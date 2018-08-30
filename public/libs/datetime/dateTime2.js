var cz=
{
	tj(){
		
		cz.setTotal();
		cz.setSd();
		cz.lock();
		var j={};
		var objs=$(".glsucc");

		for(var i=0;i<objs.length;i++)
		{
		
			var o=objs[i];
			var y=o.dataset.year;
		
			var m=o.dataset.month;
			var d=o.dataset.day;
			var t=$(o).attr("data-type");
			var total=$(o).attr("data-total");
			var s1s=$(o).attr("data-s1s"),
			    s1e=$(o).attr("data-s1e"),
			    s1t=$(o).attr("data-s1t"),
			    
			    s2s=$(o).attr("data-s2s"),
			    s2e=$(o).attr("data-s2e"),
			    s2t=$(o).attr("data-s2t"),
			    
			    s3s=$(o).attr("data-s3s"),
			    s3e=$(o).attr("data-s3e"),
			    s3t=$(o).attr("data-s3t"),
			    
			    s4s=$(o).attr("data-s4s"),
			    s4e=$(o).attr("data-s4e"),
			    s4t=$(o).attr("data-s4t");
			    
			    
			    
			if(j[y])
			{
                            // alert(y)

				if(j[y][m])
				{
					j[y][m][d]={};
				    j[y][m][d]["total"]=total
				    j[y][m][d]["type"]=t;
				    j[y][m][d]["time"]={};
				    j[y][m][d]["time"]["s1s"]=s1s;j[y][m][d]["time"]["s1e"]=s1e;j[y][m][d]["time"]["s1t"]=s1t;
				     j[y][m][d]["time"]["s2s"]=s2s;j[y][m][d]["time"]["s2e"]=s2e;j[y][m][d]["time"]["s2t"]=s2t;
				     j[y][m][d]["time"]["s3s"]=s3s;j[y][m][d]["time"]["s3e"]=s3e;j[y][m][d]["time"]["s3t"]=s3t;
				      j[y][m][d]["time"]["s4s"]=s4s;j[y][m][d]["time"]["s4e"]=s4e;j[y][m][d]["time"]["s4t"]=s4t;
				}
				else
				{
					j[y][m]={};
				    j[y][m][d]={};
				    j[y][m][d]["total"]=total;
				    j[y][m][d]["type"]=t
				    j[y][m][d]["time"]={};
				    j[y][m][d]["time"]["s1s"]=s1s;j[y][m][d]["time"]["s1e"]=s1e;j[y][m][d]["time"]["s1t"]=s1t;
				     j[y][m][d]["time"]["s2s"]=s2s;j[y][m][d]["time"]["s2e"]=s2e;j[y][m][d]["time"]["s2t"]=s2t;
				     j[y][m][d]["time"]["s3s"]=s3s;j[y][m][d]["time"]["s3e"]=s3e;j[y][m][d]["time"]["s3t"]=s3t;
				      j[y][m][d]["time"]["s4s"]=s4s;j[y][m][d]["time"]["s4e"]=s4e;j[y][m][d]["time"]["s4t"]=s4t;
				}
			}
			else
			{
				j[y]={};
				j[y][m]={};
				j[y][m][d]={};
				j[y][m][d]["total"]=total
				j[y][m][d]["type"]=t
				j[y][m][d]["time"]={};
				j[y][m][d]["time"]["s1s"]=s1s;j[y][m][d]["time"]["s1e"]=s1e;j[y][m][d]["time"]["s1t"]=s1t;
				     j[y][m][d]["time"]["s2s"]=s2s;j[y][m][d]["time"]["s2e"]=s2e;j[y][m][d]["time"]["s2t"]=s2t;
				     j[y][m][d]["time"]["s3s"]=s3s;j[y][m][d]["time"]["s3e"]=s3e;j[y][m][d]["time"]["s3t"]=s3t;
				      j[y][m][d]["time"]["s4s"]=s4s;j[y][m][d]["time"]["s4e"]=s4e;j[y][m][d]["time"]["s4t"]=s4t;
			}
		}
		jsonData={};
		jsonData=j;
		alert(JSON.stringify(jsonData));
		cz._doc(mydate.hdinput).value=JSON.stringify(jsonData);
		
	},
	setSd(){
		var s1s=cz._doc("s1s").value;
		var s1e=cz._doc("s1e").value;
		var s1t=cz._doc("s1t").value;
		
		var s2s=cz._doc("s2s").value;
		var s2e=cz._doc("s2e").value;
		var s2t=cz._doc("s2t").value;
		
		var s3s=cz._doc("s3s").value;
		var s3e=cz._doc("s3e").value;
		var s3t=cz._doc("s3t").value;
		
		var s4s=cz._doc("s4s").value;
		var s4e=cz._doc("s4e").value;
		var s4t=cz._doc("s4t").value;
		var objs=document.querySelectorAll(".glactive");
		
		for(var i=0;i<objs.length;i++)
		{
			var o=objs[i];
			$(o).attr("data-s1s",s1s);$(o).attr("data-s1e",s1e);$(o).attr("data-s1t",s1t);
			$(o).attr("data-s2s",s2s);$(o).attr("data-s2e",s2e);$(o).attr("data-s2t",s2t);
			$(o).attr("data-s3s",s3s);$(o).attr("data-s3e",s3e);$(o).attr("data-s3t",s3t);
			$(o).attr("data-s4s",s4s);$(o).attr("data-s4e",s4e);$(o).attr("data-s4t",s4t);
		}
	},
	setTotal(){
	    var total=$("#total").val();
		var objs=document.querySelectorAll(".glactive");
		
		for(var i=0;i<objs.length;i++)
		{
			var o=objs[i];
			var y=o.dataset.year;
			var m=o.dataset.month;
			var d=o.dataset.day;
			var t=$(o).attr("data-type");
			
			$(o).attr("data-total",total);
			$(o).removeClass("err");
			//$(o).removeClass("glactive")
			$(o).addClass("glsucc")
			$(o).children(".datetime_total").text("￥"+total)
			
		}
		
		
	},
  	dateclick(event){

  		var o=event.target.parentNode;
  		if( o.nodeName!="LI"){return;}
  		if(o.classList.contains('glactive')){cz._cancelSelect(o,"only");return;}
  		if(cz._isLock(o))
  		{
  			o.setAttribute("class","lock glactive");
  		}
  		else
  		{
  			o.setAttribute("class","glactive");
  		}
  	},
  	dbdateclick(obj){
  		mydate.startObj=obj;
  		mydate.startDate=obj.dataset.id;
  		mydate.endDate="";
  		mydate.endObj=null;
  		//cz._showDate();
  	},
  	_isLock(o){if(o .dataset.type=="0"){return true;}return false;
  	},
  	lock(){
  		var obj=cz._doc("lock")
  		var objs=$(".glactive");

  		if(obj.checked==false)
  		{
  			for(var i=0;i<objs.length;i++)
	  		{
	  			cz._cancelLock(objs[i])
	  		}
  		}
  		else
  		{
	  		for(var i=0;i<objs.length;i++)
	  		{
	  			cz._lock(objs[i])
	  		}
  		}
  		
  	},
  	cancelLock(){
  		var objs=$(".glactive");
  		for(var i=0;i<objs.length;i++)
  		{
  			cz._cancelLock(objs[i])
  		}
  	},
  	_lock(o){
  		o.dataset.type="0";
  		o.setAttribute("class","glsucc lock")
  	},
  	_cancelLock(o){
  		o.dataset.type="1";
  		o.setAttribute("class","glsucc")
  	},
  	_doc(id){
  		return document.querySelector("#"+id);
  	},
  	_cancelsrk(){
  		cz._cancelSelect(new Object(),"all");
  		cz._doc("srk").style.display="none"
  	},
  	_cancelSelect(o,c){                      
  		if(c=="only")
  		{
  			
  			if(cz._isLock(o)){o.setAttribute("class","lock glsucc");}else{o.setAttribute("class","glsucc");}
  			o.children[0].innerHTML=""
  		}
  		else
  		{
  		   var os=document.getElementsByClassName("glsucc");
	  		for(let i=0;i<os.length;i++)
	  		{
	  			//os[i].setAttribute("class","glsucc");
	  			if(cz._isLock(os[i])){os[i].setAttribute("class","lock glsucc");}else{os[i].setAttribute("class","glsucc");}
	  			os[i].children[0].innerHTML=""
	  		}
	  		
	  		var oe=document.getElementsByClassName("err");
	  		for(let i=0;i<oe.length;i++)
	  		{
	  			oe[i].setAttribute("class","err");
	  			oe[i].children[0].innerHTML=""
	  		}
	  		
	  		mydate.startObj="";mydate.startDate="";mydate.endObj="";mydate.endDate="";
  		}
  	},
  	_start(o){
  		//o.children[0].innerHTML="入驻"
  		o.setAttribute("class","glsucc glactive");
  		mydate.startDate=o.dataset.id;
  		mydate.startObj=o;
  	},
  	_end(o){
  		//o.children[0].innerHTML="离开"
  		o.setAttribute("class","glsucc glactive");
  		mydate.endDate=o.dataset.id;
  		mydate.endObj=o;
  		//cz._showDate()
  	},
  	/*_showDate(){

  		if(mydate.endDate!="")
  		{
  			cz._doc("rq").innerHTML=mydate.startDate+"&nbsp;&nbsp;至&nbsp;&nbsp;"+mydate.endDate;
  		}else
  		{
  			cz._doc("rq").innerHTML=mydate.startDate;
  		}
  		cz._doc("srk").style.display="block";
  	},*/
  	_next(o){
  		var no=o.nextElementSibling;
  		if(no === mydate.endObj){return;}
  		var classstr=no.classList+" glactive2";
  		no.setAttribute("class",classstr);
  		cz._next(no)
  	},
  	prevmonth(o){
  		if(!o.parentNode.parentNode.previousElementSibling){return}
  		o.parentNode.parentNode.style.display="none"
  		o.parentNode.parentNode.previousElementSibling.style.display="block"
  	},
   nextmonth(o){
   	    if(!o.parentNode.parentNode.nextElementSibling){return;}
  		o.parentNode.parentNode.style.display="none"
  		o.parentNode.parentNode.nextElementSibling.style.display="block"
  	},
  	edit(o){
  		if(o.classList.contains("glsucc"))
  		{
  			alert("have")
  		}
  		else
  		{
  			alert("no")
  		}
  	},
  	getParams(){
  		
  	}
  	
}
/*var jsonData={
			2018:{
				    1:{
				    	1:{"total" : 10000,type:0,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}},
				    	2:{"total" : 100,type:0,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}},
				    	3:{"total" : 200,type:1,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}}
				    },
				    2:{
				    	1:{"total" : 100,type:1},
				    	2:{"total" : 100,type:0},
				    	3:{"total" : 200,type:1}
				    },
				    3:{
				    	1:{"total" : 100,type:1},
				    	2:{"total" : 100,type:0},
				    	3:{"total" : 200,type:1}
				    },
				    6:{
				    	1:{"total" : 100000,type:1},
				    	2:{"total" : 100,type:1},
				    	3:{"total" : 200,type:0},
				    	10:{"total" : 200,type:0,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}},
				    	11:{"total" : 200,type:1,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}},
				    	12:{"total" : 200,type:1,"time":{"s1s":8,"s1e":9,"s1t":"80%", "s2s":8,"s2e":9,"s2t":"60%"}}
				    },
				    7:{
				    	1:{"total" : 100,type:1},
				    	2:{"total" : 100,type:1},
				    	3:{"total" : 200,type:1},
				    	31:{"total" : 20000,type:1}
				    },
		         },
			2019:{}
		}*/

var jsonData=document.getElementById("dateprice").value;
if(jsonData == ''){
   jsonData = {};	

}else{
   jsonData = JSON.parse(jsonData)
}
function  created()
{

  	 
	var t=
	{
	   start:"",
	   end:"",
	   year:(new Date()).getFullYear(),
	   month:(new Date()).getMonth()+1,
	   day:(new Date()).getDate(),
	   isRyear:()=>{if(  (t.year%4==0 && t.year%100!=0) || (t.year%400==0 && t.year%100!=0)  ){return true}return false;},
	   is30:(m)=>{if(/4|6|9|11/g.test(m)){return true;}else{return false;}},
	   insert:()=>{
	   	mydate.picker="";
	   	 $("#con").html("");	
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
		   	  	       <div style="width:100%; background:#fff; margin-bottom:10px; ; overflow:hidden">
		               <div class="datetime_top"><span class="p" ><<</span>`+t.year+"年"+t.month+`月<span class="n" onclick="cz.nextmonth(this)">>></span></div>
		               <div class="week"><table><tr><td>周一</td><td>周二</td><td>周三</td><td>周四</td><td>周五</td><td>周六</td><td>周日</td></tr></table></table></div>
		               <div class="content">
		           	  <ul>
		   	  	    `
			   	  	
		   	  	}
		   	  	else{
			   	  		 dom_top=`
		   	  	       <div style="width:100%; background:#fff; margin-bottom:10px;display:none; overflow:hidden">
		               <div class="datetime_top"><span class="p" onclick="cz.prevmonth(this)"><<</span>`+t.year+"年"+t.month+`月<span class="n" onclick="cz.nextmonth(this)">>></span></div>
		               <div class="week"><table><tr><td>周一</td><td>周二</td><td>周三</td><td>周四</td><td>周五</td><td>周六</td><td>周日</td></tr></table></table></div>
		               <div class="content">
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
		   	  		var zhuru=10,total=10,type=1;
		   	  	    try{
		   	  	    	
		   	  		    total=jsonData[t.year][t.month][d].total;
		   	  		    type=jsonData[t.year][t.month][d].type;
		   	  		    time=jsonData[t.year][t.month][d].time;
		   	  		   
		   	  		    s1s=( !time.s1s ? "null" : time.s1s)
		   	  		    s1e=( !time.s1e ? "null" : time.s1e)
		   	  		    s1t=( !time.s1t ? "null" : time.s1t)
		   	  		    s2s=( !time.s2s ? "null" : time.s2s)
		   	  		    s2e=( !time.s2e ? "null" : time.s2e)
		   	  		    s2t=( !time.s2t ? "null" : time.s2t)
		   	  		    
		   	  		    s3s=( !time.s3s ? "null" : time.s3s)
		   	  		    s3e=( !time.s3e ? "null" : time.s3e)
		   	  		    s3t=( !time.s3t ? "null" : time.s3t)
		   	  		    
		   	  		    s4s=( !time.s4s ? "null" : time.s4s)
		   	  		    s4e=( !time.s4e ? "null" : time.s4e)
		   	  		    s4t=( !time.s4t ? "null" : time.s4t)
		   	  		    
		   	  		    if(type=="0")
		   	  		    {
		   	  		      str=str+"<li ondblclick='cz.dbdateclick(this)' onclick='cz.dateclick(event)'  data-s1s='"+s1s+"'  data-s1e='"+s1e+"' data-s1t='"+s1t+"'              data-s2s='"+s2s+"'  data-s2e='"+s2e+"' data-s2t='"+s2t+"'             data-s3s='"+s3s+"'  data-s3e='"+s3e+"' data-s3t='"+s3t+"'     data-s4s='"+s4s+"'  data-s4e='"+s4e+"' data-s4t='"+s4t+"'              data-year='"+t.year+"'  data-type='"+type+"'   data-month='"+t.month+"'  data-day='"+d+"'     class='li glsucc lock' data-id='"+dat+"' data-total="+total+"><img src='/public/libs/datetime/lock.png' class='datetime_lock'><div class='datetime_zt'></div><div class='datetime_date' >"+d+"</div><div class='datetime_total'>￥"+total+"</div></li>"
		                }
		   	  		    else
		   	  		    {
		   	  		    	str=str+"<li ondblclick='cz.dbdateclick(this)' onclick='cz.dateclick(event)' data-s1s='"+s1s+"'  data-s1e='"+s1e+"' data-s1t='"+s1t+"'              data-s2s='"+s2s+"'  data-s2e='"+s2e+"' data-s2t='"+s2t+"'             data-s3s='"+s3s+"'  data-s3e='"+s3e+"' data-s3t='"+s3t+"'     data-s4s='"+s4s+"'  data-s4e='"+s4e+"' data-s4t='"+s4t+"'          data-year='"+t.year+"'  data-type='"+type+"'  data-month='"+t.month+"'  data-day='"+d+"'     class='li glsucc' data-id='"+dat+"' data-total="+total+"><img src='/public/libs/datetime/lock.png' class='datetime_lock'><div class='datetime_zt'></div><div class='datetime_date' >"+d+"</div><div class='datetime_total'>￥"+total+"</div></li>"
		   	  		    }
		   	  	    }catch(e){
		   	  	    	
		   	  	    	total=0;
		   	  	    	type=1;
		   	  	    	str=str+"<li ondblclick='cz.dbdateclick(this)' onclick='cz.dateclick(event)' data-type='"+type+"'   data-year='"+t.year+"'   data-month='"+t.month+"'  data-day='"+d+"'   class='li err' data-id='"+dat+"' data-total="+total+"><img src='/public/libs/datetime/lock.png' class='datetime_lock'><div class='datetime_zt'></div><div class='datetime_date' >"+d+"</div><div class='datetime_total'></div></li>"
		   	  	    }
		   	  	}
	   	  	str=dom_top+str+dom_bottom;
	   	  	
	   	  	mydate.picker==""? mydate.picker=str :  mydate.picker= mydate.picker+str;
	   	    t.month+=1;
	   	    
	   	  }
	   	  
	   	   document.getElementById(mydate.con).innerHTML=mydate.picker
	   	  

	   },
	   formatDate:(y,m,d,s)=>{
	   	   m > 9 ? m = m +'' :m = '0'+ m;
	   	   d > 9 ? d = d +'' :d = '0'+ d;
	   	   return y + s + m + s + d;
	   },
	}
	t.insert()
  	
  }
  
  created()
