var methods={
  	  picker:"",
      startO:null,// 开始对象
      endO:null,//结速对象
      startD:"",//开始日期
      endD:"",//结束日期
      dateList:[],
     
      ss:"入住日期",
      ee:"离开日期",
      total:0,//价格计算
      dateCompare(y,m,d){
  	    	var now=new Date();
  	    	var y1=now.getFullYear()
  	    	var m1=now.getMonth()+1;
  	    	var d1=now.getDate();
  	    	var dd1=new Date(y,m,d)
  	    	var dd2=new Date(y1,m1,d1)
  	    	return(dd1>=dd2)
  	    },
	  	dateclick(event){
	  		
	  		var o=event.target;//前进后退被点击
	  		if(methods._changeMonth(o)){return}//处 理前进后退，并退出
	  		o=o.parentNode;//日期被点击
	  		if(o.classList.contains('err') || o.nodeName!="LI"){return;}
	  		//今天以前日期返回
	  		if(!methods.dateCompare(o.getAttribute("data-year"),o.getAttribute("data-month"),o.getAttribute("data-day"))){return;}
	  		if(!methods.startO){methods._createstartO(o);return;}//不存在初始值，则创建
	  		if(o.getAttribute("data-id")==methods.startD){methods._cancelSelect(o,'all')}//再次点开始，取消全部选择
	  		if(!methods.endO){
	  			//是否比开始晚，早于开始，刚互换
	  			methods._createendO(o)
	  			return;
	  			
	  		}
	  		{
	  			//alert("有了结速点")
	  			/*if(o.classList.contains('active') || o.classList.contains('endactive'))
	  			{
	  				methods._cancelSelect(o,'all')
	  			}*/
	  			methods._cancelSelect(o,'all');
	  			if(!(o.classList.contains('err'))){
	  				methods._createstartO(o)
	  			}
	  		}
	  	},
	  	/*创建结束点*/
	  	_createendO(o){
	  		var d=o.getAttribute("data-id");
	  		methods.total=0;//将总价置0
	  		 methods.dateList=[];//将天数置空
	  		if(new Date(methods.startD) > new Date(d))
	  		{
	  			var middleO=methods.startO,middleD=methods.startD;
	  			if(methods._ableSelect(o,middleD))
	  			{

	  				methods._createstartO(o)
	  			    methods._createendO2(middleO)
	  			    methods._select(methods.startO)
	  			    methods._getTotal(methods.startO)
	  			}
	  			else
	  			{
	  				
	  			}
	  		}
	  		else
	  		{
	  			if(methods._ableSelect(methods.startO,d))
	  			{
	  				 methods._createendO2(o)
	  				methods._select(methods.startO)
	  				
	  				methods._getTotal(methods.startO)
	  				
	  			}
	  			else
	  			{
	  				
	  			}
	  			
	  		}
	  	},
	  		//获取总价
	  	_getTotal(o){
        
        
        var d=o.getAttribute("data-id")
	  		  methods.dateList.push(d);
	  		
        
	  		if(o.getAttribute("data-id")==methods.endD){return;}
	  	 var total=methods._getDateTotal(o);
	  		methods.total+=total;
	  		 vo=o.nextElementSibling;
	  		 if(vo == null)
	  		{
	  			vo=$(o).parent().parent().parent().next().find(".succ")[0]

	  		}
	  		
	  		 return methods._getTotal(vo);
	  	},
	  	//获取每天价格，核对时段
	  	_getDateTotal(o){
	  		var d=o.getAttribute("data-id");
	  		var td=new Date();//今天日期OBJECT
	  		var d2=methods._formatDate(td.getFullYear(),td.getMonth()+1,td.getDate(),"-");
	  		var h=td.getHours()
	  		var total=parseFloat(o.getAttribute("data-total"));
	  		//如果今天，核对实段
	  		if(d==d2){
	  			var s1s=o.getAttribute("data-s1s"),s1e=o.getAttribute("data-s1e"),s1t=o.getAttribute("data-s1t");
	  			var s2s=o.getAttribute("data-s2s"),s2e=o.getAttribute("data-s2e"),s2t=o.getAttribute("data-s2t");
	  			if( s1s!="null" && s1e != "null" && s1t != "null")
	  			{
	  				//匹配一时段，符合，返回价格
	  				s1s=parseInt(s1s);s1e=parseInt(s1e);s1t=parseInt(s1t)
	  				if(h>=s1s && h<s1e){return total *(s1t/100);}
	  			}
	  			if( s2s!="null" && s2e != "null" && s2t != "null")
	  			{
	  				//匹配二时段，符合，返回价格
	  				s2s=parseInt(s2s);s2e=parseInt(s2e);s1t=parseInt(s2t)
	  				if(h>=s2s && h<s2e){return total *(s2t/100);}
	  			}
	  			return total;
	  		}
	  		else   
	  		{
	  			return total;//返回非今天价格，不按时段
	  		}
	  	},
	  	_createendO2(o){
	  		
	  		methods.endD=o.getAttribute("data-id");methods.endO=o;
	  		mypicker.endD=methods.endD;
	  		var classList=o.classList+" active endactive"
	  		o.setAttribute("class",classList);
	  		$(o).children(".datatime_ts").text("离")
	  		var x=new Date(methods.startD).getTime()
	  		var y=new Date(methods.endD).getTime()

	  	},
	  	qxSelectDate(){
	  		methods._cancelSelect(new Object(),"all")
	  		//methods.$emit("selectTime",null)
	  		mypicker.startD="";
	  		mypicker.endD="";
	  		$("."+ mypicker.con).removeClass("dateshow")
	  		
	  	},
	  	qdSelectDate(){
	  		if(methods.startD=="" || methods.endD==""){return}
	  		mypicker.startD=methods.startD;
	  		mypicker.endD=methods.endD;
	  		sessionStorage.startD=methods.startD;
	  		sessionStorage.endD=methods.endD;
	  		$(".pageFoot_total span").text( "￥"+methods.total)
	  		$("#night").val(methods.dateList.length-1)
	  		
	  		$("#live_time").val(methods.dateList)
	  		
	  		$("."+ mypicker.con).removeClass("dateshow")
	  		if(qbl.buy)
	  		{
	  			//layer.load();
	  			//$("#xqform").submit();
	  			
	  		}
	  	},
	  	/*select*/
	  	_select(o){
	  		var vo=o;
	  		o=o.nextElementSibling;
	  		if(o == null)
	  		{
	  			o=($(vo).parent().parent().parent().next().find(".succ")[0])
	  		}
	  		if(o.getAttribute("data-id")==methods.endD){return;}
	  		o.setAttribute("class","li succ active");
	  		return methods._select(o);
	  	},
	  	/*检测是否可多选*/
	  	_ableSelect(o,endD){
	  		if(o.classList.contains('err')){return false;}
	  		if(o.getAttribute("data-id")==endD){return true;}
	  		var vo=o.nextElementSibling;
	  		if(vo == null)
	  		{
	  			vo=$(o).parent().parent().parent().next().find(".succ")[0]

	  		}
	  		
	  		return methods._ableSelect(vo,endD);
	  	},
	  	/*取消点或全部*/
	  	_cancelSelect(o,s){
	  		
	  		if(s=="all")
	  		{
	  			var objs=document.querySelectorAll(".active");
	  			for(let i=0;i<objs.length;i++){objs[i].setAttribute("class","li succ");}
	  			methods.startO=null;methods.startD="";methods.endO=null;methods.endD="";
	  		}
	  		else
	  		{
	  			o.setAttribute("class","li succ");
	  		}
	  		$(".datatime_ts").text("")
	  	},
	  	/*创建开始点*/
	  	_createstartO(o){
	  		methods.startO=o;
	  		methods.startD=o.getAttribute("data-id");
	  		mypicker.startD=methods.startD;
	  		var classList=o.classList+" active startactive"
	  		o.setAttribute("class",classList);
	  		$(o).children(".datatime_ts").text("入")
	  	},
	  	/*前进后退*/
	  	_changeMonth(o){
	  		if(o.classList.contains('prev')){
	  			if(!o.parentNode.parentNode.previousElementSibling){return;}
	  			o.parentNode.parentNode.style.display="none";
	  			o.parentNode.parentNode.previousElementSibling.style.display="block";return true;
	  		}
	  		if(o.classList.contains('next')){
	  			if(!o.parentNode.parentNode.nextElementSibling){return;}
	  			o.parentNode.parentNode.style.display="none";
	  			o.parentNode.parentNode.nextElementSibling.style.display="block";return true;
	  		}
	  		return false;
	  	},
	  		_formatDate(y,m,d,s){
	   	   m > 9 ? m = m +'' :m = '0'+ m;
	   	   d > 9 ? d = d +'' :d = '0'+ d;
	   	   return y + s + m + s + d;
	   },
  	
  }
  function created(){
  	//var j=JSON.parse(mypicker.jsonData)
  	var j;
  	mypicker.jsonData == "" ? j={} : j=JSON.parse(mypicker.jsonData)
   //j={"2018":{"6":{"10":{"total":"200","type":"0","time":{"s1s":"8","s1e":"9","s1t":"80%","s2s":"8","s2e":"9","s2t":"60%","s3s":"null","s3e":"null","s3t":"null","s4s":"null","s4e":"null","s4t":"null"}},"11":{"total":"200","type":"1","time":{"s1s":"8","s1e":"9","s1t":"80%","s2s":"8","s2e":"9","s2t":"60%","s3s":"null","s3e":"null","s3t":"null","s4s":"null","s4e":"null","s4t":"null"}},"12":{"total":"200","type":"1","time":{"s1s":"8","s1e":"9","s1t":"80%","s2s":"8","s2e":"9","s2t":"60%","s3s":"null","s3e":"null","s3t":"null","s4s":"null","s4e":"null","s4t":"null"}},"13":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"14":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"15":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"16":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"17":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"19":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"20":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"21":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"22":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"23":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}},"24":{"total":"500","type":"1","time":{"s1s":"1","s1e":"1","s1t":"","s2s":"1","s2e":"1","s2t":"","s3s":"1","s3e":"1","s3t":"","s4s":"1","s4e":"1","s4t":""}}}}}
	console.log(j)
	var t={
	   start:"",
	   end:"",
	   year:(new Date()).getFullYear(),
	   month:(new Date()).getMonth()+1,
	   day:(new Date()).getDate(),
	   isRyear:()=>{if(  (t.year%4==0 && t.year%100!=0) || (t.year%400==0 && t.year%100!=0)  ){return true}return false;},
	   is30:(m)=>{if(/4|6|9|11/g.test(m)){return true;}else{return false;}},
	   insert:()=>{
	   	var month=t.month+6
	   	  for(let i=t.month;i<month+6;i++)
	   	  {
	   	  	    
		   	  	if(t.month>12)
		   	  	{
		   	  		t.year=parseInt(t.year)+1;
		   	  		t.month=i%12
		   	  	}
		   	  	var dom_top="";
		   	  	var dom_bottom=`
			   	  	      </ul>
			           </div>
			       </div>
			   	`
		   	  	
		   	  	if(t.month==(new Date().getMonth()+1))
		   	  	{
			   	  	    dom_top=`
		   	  	       <div class="datetime_main">
		               <div class="datetime_top"><span class="prev"   ><</span>`+t.year+"年"+t.month+`月<span class="next" >></span></div>
		               <div class="datetime_week"><table><tr><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td><td>日</td></tr></table></table></div>
		               <div class="datetime_content">
		           	  <ul>
		   	  	    `
			   	  	
		   	  	}
		   	  	else{
			   	  		dom_top=`
		   	  	       <div class="datetime_main" style="display:none;">
		               <div class="datetime_top"><span class="prev"><</span>`+t.year+"年"+t.month+`月<span class="next" >></span></div>
		               <div class="datetime_week"><table><tr><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td><td>日</td></tr></table></table></div>
		               <div class="datetime_content">
		           	  <ul>
		   	  	    `
			   	  	
		   	  	}
	   	  	var days;
	   	  	if(t.is30(t.month)){days=30;}else{if(t.month==2){t.isRyear()==true ? days=29:days=28;}else{days=31;}}
	   	  	var str="";
	   	  	for(let d=1;d<days+1;d++)
	   	  	{
	   	  		var dat=t.formatDate(t.year,t.month,d,"-")
	   	  		if(d==1)
	   	  		{
	   	  			var week=new Date(dat).getDay();
	   	  			week==0 ? week=7 : week=week;
	   	  			for(var w=1;w<week;w++){str=str+"<li></li>"}
	   	  		}
	   	  		var zhuru=10,total=10;
	   	  	    try{
	   	  	    	
	   	  		    total=j[t.year][t.month][d].total;
	   	  		    type=j[t.year][t.month][d].type;
	   	  		    if(t.dateCompare(t.year,t.month,d) && type=="1")
	   	  		    {
	   	  		       str=str+"<li data-year='"+t.year+"'  data-month='"+t.month+"' data-day='"+d+"' ref='dat' class='li succ' id='"+dat+"'  data-id='"+dat+"' data-total="+total+"><div class='datatime_ts'></div><div class='datetime_date'>"+d+"</div><div class='datetime_total'>￥"+total+"</div></li>"
	              }
	   	  		    else
	   	  		    {
	   	  		    	 str=str+"<li data-year='"+t.year+"'  data-month='"+t.month+"' data-day='"+d+"' ref='dat' class='li err' id='"+dat+"'  data-id='"+dat+"' data-total="+total+"><div class='datatime_ts'></div><div class='datetime_date'>"+d+"</div><div class='datetime_total'>￥"+total+"</div></li>"
	   	  		    }
	   	  	    }catch(e){
	   	  	    	zhuru=false;
	   	  	    	total=0;
	   	  	    	str=str+"<li data-year='"+t.year+"'  data-month='"+t.month+"' data-day='"+d+"' ref='dat'  class='li err'  id='"+dat+"'        data-id='"+dat+"' data-total="+total+"><div class='datatime_ts'></div><div class='datetime_date'>"+d+"</div><div class='datetime_total'></div></li>"
	
	   	  	    }
	   	  	}
	   	  	str=dom_top+str+dom_bottom;
	   	  	
	   	  	methods.picker=methods.picker+str;
	   	    t.month+=1;
	   	  }
	   	  document.getElementById("mypicker").innerHTML=methods.picker
	   },
	   formatDate:(y,m,d,s)=>{
	   	   m > 9 ? m = m +'' :m = '0'+ m;
	   	   d > 9 ? d = d +'' :d = '0'+ d;
	   	   return y + s + m + s + d;
	   },
	   dateCompare:(y,m,d)=>{
  	    	var now=new Date();
  	    	var y1=now.getFullYear()
  	    	var m1=now.getMonth()+1;
  	    	var d1=now.getDate();
  	    	var dd1=new Date(y,m,d)
  	    	var dd2=new Date(y1,m1,d1)
  	    	return(dd1>=dd2)
  	 },
	
	}
	t.insert()
  }
created()