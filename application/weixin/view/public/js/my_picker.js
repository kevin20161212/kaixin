(function ($)
{
	$.fn.my_picker=function(opi)
	{
		var self=
		{
			con:'',// 父容器
			data:[],//插入数据
			fun:"",//回调函数,数组形式返回，返回数据长度等于列数【1：00，2：00】，类型为字符串
		}
		var picker=$.extend(self,opi);
		picker.itemH=40;
		picker.conHeight=0;
		picker.inter="";
		picker.oldscrolltop=0;
		picker.obj="";
		init()
		function init(){
			picker.conHeight=$(picker.con).height();
			insert()
		}
		function insert()
		{
			
			var divwk=document.createElement("div");
			divwk.setAttribute("class","my_pickerwk");
			for(let i=0;i<picker.data.length;i++)
			{
				var divk=document.createElement("div");
			    divk.setAttribute("class","my_pickerk")
			    var ul=document.createElement("ul");
			    ul.setAttribute("class","my_picker_ul");
			    ul.onscroll=function(e){js(e.target)};
			    ul.style.paddingTop=(picker.conHeight/2-picker.itemH)+"px"
			    
			    for(let y=0;y<picker.data[i].length;y++)
			    {
			    	var li=document.createElement("li");
			    	y==0 ? li.setAttribute("class","active") : "" ;
			    	li.innerHTML=picker.data[i][y].text;
			    	li.id=picker.data[i][y].value
			    	li.style.height=picker.itemH+"px";
			    	li.style.lineHeight=picker.itemH+"px";
			    	ul.appendChild(li);
			    	y==picker.data[i].length-1 ? li.style.marginBottom=(picker.conHeight-picker.itemH)+"px" : "" ;
			    }
			    divk.appendChild(ul)
			    divwk.appendChild(divk)
			}
		    picker.con.appendChild(divwk)
		   var  divfilter=document.createElement("div");
		   divfilter.setAttribute("class","filter");
		   divfilter.style.height=picker.itemH+"px";
		   divfilter.style.top=(picker.conHeight/2-picker.itemH)+"px"
		   divwk.appendChild(divfilter);
		}
		function js(obj)
		{
			
			if(picker.inter){clearInterval(picker.inter)}
			picker.obj=obj
			picker.oldscrolltop=obj.scrollTop;
			picker.inter=setInterval(function(){
				if(picker.obj.scrollTop==picker.oldscrolltop)
				{
					clearInterval(picker.inter);
					check()
				}
			},200)
			move();
		}
		
		function move(){
			var $liobjs=$(picker.obj).children("li");
				    $liobjs.each(function(index,item){
					    var y=(index)*picker.itemH
						if( (picker.oldscrolltop>y-1)   && picker.oldscrolltop<y+picker.itemH)
						{
							$(picker.obj).children("li").removeClass("active")
							$(item).addClass("active")
						}
					})
		}
		function check(){
			//alert("ccc")
			var $liobjs=$(picker.obj).children("li");
				    $liobjs.each(function(index,item){
					
					    var y=(index)*picker.itemH
						if( (picker.oldscrolltop>y-1)   && picker.oldscrolltop<y+picker.itemH)
						{
							$(picker.obj).children("li").removeClass("active")
							$(item).addClass("active")
							$(picker.obj).scrollTop(y)
						}
					})
				    getData();
		}
		function getData(){
			//alert(1)
			var arr=[];
			$(".my_picker_ul").each(function(){
				$(this).children("li").each(function(){
					if($(this).hasClass("active"))
					{
						arr.push(this.id);return false;
					}
				})
			})
			picker.fun(arr)
		}
				
	}
	
})(jQuery);
