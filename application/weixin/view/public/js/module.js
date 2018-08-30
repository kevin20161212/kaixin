
//需保证全局变量LAYRE
$(document).ready(function(){
	/*var layer;
	layui.use('layer', function(){ layer = layui.layer;});
	/*setTimeout(function(){alert(layer)},1000)*/
	
	/*
	 * 确定取消提示框
	 */
	$(".layer-dialog-2").click(function(){

  	    var mess= $(this).attr("data-mess");
  	    var successCall= $(this).attr("data-succ");
  	    var httpUrl=$(this).attr("data-url");
  	    var params= $(this).attr("data-params");
		
	    params=eval('('+params+')')
  	    !mess || mess==""?mess= "确定要执行吗?" : mess=mess;
  	    if(successCall=="" || !successCall){gl.layer_dialog_1("layer-dialog-2类未添加'data-succ'属性(点击确定回调方法名)");return;};
  	    if(httpUrl){gl.layer_dialog_2(successCall,mess,httpUrl,params)}else{gl.layer_dialog_2(successCall,mess)}
  	})
   
    /*
     * 确定对话框
     */
    $(document).on("click",".layer-dialog-1",function(){
    	var mess=$(this).data("mess")
    	!mess || mess==""?mess= "确定要这样操作吗?" : mess=mess;
        var httpUrl=$(this).data("url")
        var succ=$(this).data("succ")
  	    gl.layer_dialog_1(mess,succ,httpUrl)
    })
    /*
     * post    formdata
     */
     $(document).on('click touchstart',".ajax-post2",function(){
  	    
  	    var successCall= $(this).attr("data-succ");
  	    var httpUrl=$(this).attr("data-url");
  	    var params= $(this).attr("data-params");
	    params=eval('('+params+')')
  	    gl.sendAjax(httpUrl,params,successCall,'post');
  	 
  	})
     
      $(document).on("click  touchstart",".ajax-get",function(){
      		var successCall= $(this).attr("data-succ");
  	      var httpUrl=$(this).attr("data-url");
  	      var params= $(this).attr("data-params");
	      params=eval('('+params+')')
  	      gl.sendAjax(httpUrl,params,successCall,'get');
      })
     
     
    $(document).on("click  touchstart",".ajax-post",function(){
    	
    	var formObj,query, target_form,action;
    	var target_form = $(this).attr('target-form');
    	var that = this;
        var succ=$(this).data("succ")
    	if(target_form){formObj =  $('.'+target_form) ;}else{formObj = $(this).closest('form')}
    	if (formObj.get(0) == undefined) {gl.layer_dialog_1("未发现FORM表单");return false;}
        action=formObj.attr("action")
        if(action=="" || !action){gl.layer_dialog_1("FORM表单中缺少 'action'属性");return;}
        /*空及格式检测*/
      var proContinue=true;//检测格式不正确时，变为FALSE，程序不继续执行
      
      formObj.find("input").each(function(){
      	
       	  var inputMess=$(this).data("mess")
       	  
       	  if($(this).hasClass("tel"))//手机号格式检测
       	  {
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请输入"+inputMess);return false;}
       	  	if(!gl.telCheck(this.value)){proContinue=false; gl.layer_dialog_1(inputMess+"格式不正确");return false;}
       	  }
       	  
       	  if($(this).hasClass("card"))//身份证格式检测
       	  {
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请输入"+inputMess);return false;}
       	  	if(!gl.isCardID(this.value)){proContinue=false; gl.layer_dialog_1(inputMess+"格式不正确");return false;}
       	  }

       	  if($(this).hasClass("money"))//金额格式检测
       	  {
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请输入"+inputMess);return false;}
       	  	if(!gl.moneyCheck(this.value)){proContinue=false; gl.layer_dialog_1(inputMess+"格式不正确");return false;}
       	  }
       	  if($(this).hasClass("int"))//整数格式检测
       	  {
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请输入"+inputMess);return false;}
       	  	if(!gl.intCheck(this.value)){proContinue=false; gl.layer_dialog_1(inputMess+"格式不正确");return false;}
       	  }
       	  if($(this).hasClass("notEmpty"))//是否为空检测
       	  {
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1(inputMess);return false;}
       	  }
       })
       formObj.find("textarea").each(function(){
       	  if($(this).hasClass("notEmpty"))//是否为空检测
       	  {
       	  	var inputMess=$(this).data("mess")
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请输入"+inputMess);return false;}
       	  }
       })
       formObj.find("select").each(function(){
       	  if($(this).hasClass("notEmpty"))//是否为空检测
       	  {
       	  	var inputMess=$(this).data("mess")
       	  	if(this.value==""){proContinue=false; gl.layer_dialog_1("请选择"+inputMess);return false;}
       	  }
       })
       if(!proContinue){return false} //被检测信息有不合法情况，直接退出
       
    	if(formObj.find("input[type='file']").size()>0)
    	{
    	    query=new FormData(formObj.get(0));
    	    if($(that).hasClass("confirm")){gl.layer_dialog_2(succ,"确定要提交信息吗?",action,query,true)}else{layer.load();l.sendFormData(action,query,succ)}
    	}
    	else
    	{
    		query=gl.jQseri(formObj.get(0));
    		this.Debug ? alert(query) :"";
    		if($(that).hasClass("confirm")){gl.layer_dialog_2(succ,"确定要提交信息吗?",action,query,false)}else{layer.load();gl.sendAjax(action,query,succ,'post')}
    	}
    })
    /*
     * 移动端头部导航
     */
    $(".nav-top ul li").on("click",function(){
        var $ul=$(this).parent(); //父元素
		var 	$nav_top=$ul.parent();
			///var windowW=$(window).width()
			var windowW=$(this).parent().width()
			
		    var $liCount=$nav_top.children("ul").eq(0).children("li").size();//子元素个数
			var labelStartLeft=(windowW/$liCount-windowW*0.10)/2
			
			var cb=$nav_top.data("callback");
			$oldIndex=$ul.children(".active").eq(0).index()+1
			$(this).siblings().removeClass("active");
			$(this).addClass("active");
			var index=$(this).index()+1;//当前被点角标
			var dir=windowW/$liCount*(index-1)+labelStartLeft+"px"
			$nav_top.children("label").animate({left:dir},"fast")
			window[cb](index)
		})
        
		/*
		 * 省市选择器
		*/
		$(".city-picker").on("click",function(){
			var size=3;
			var showDom=$(this).data("showdom");
			!showDom || showDom==""?showDom= $(this)[0] : showDom=$("."+showDom)[0];
			$(this).hasClass("second") ? size = 2 : size = 3;
			var cityPicker3 = new mui.PopPicker({layer:size});
		    cityPicker3.setData(cityData3);
	        cityPicker3.show(function(items) {
	        	if(showDom.nodeName=="INPUT")
	        	{
	        		size ==2 ? showDom.value = items[1].text : showDom.value = items[0].text+"-"+items[1].text+"-"+items[2].text
	        	}
	        	else
	        	{
	        		size ==2 ? showDom.innerHTML = items[1].text : showDom.innerHTML = items[0].text+"-"+items[1].text+"-"+items[2].text
	        	}
	        })
		})
		/*
		 * 时间选择器
		 */
		$(".datetime-picker").on("click",function(){
			mui.init();
			var showDom=$(this).data("showdom");
			!showDom || showDom==""?showDom= $(this)[0] : showDom=$("."+showDom)[0];
			var _self=this
			var optionsJson= this.getAttribute('data-options') || '{}';
							var options = JSON.parse(optionsJson);
							_self.picker = new mui.DtPicker(options);
							_self.picker.show(function(rs) {
								showDom.innerHTML=rs.text
							})
		})
		/*
		 * muiopen
		 * 类：muia 绑定此类，点击后，会自动调用MUIOPEN函数
		 * data属性：
		 *        data-href="html/muinav.html"   要跳转的页面地址（相对路径）
		 *        data-position='{"top":"0px","bottom":"0px,"width":"100%","height":"100%"}'新开页面位置，及宽高，设置后，IOS右滑关闭功能失效，建议留空，用默认设置
		 *        data-dir="left"  打开页面滑动方 向left:从左侧滑出，right:从右侧滑出  top || bottom 从下或下滑出
		 *        data-cache="false"就否缓存被打开页面,false || 留空 ||不设置  为不用缓存，每 次打开新页面。默认为不用缓存，
		 *        data-params='{"name":"gaoliang","age":"20"}   传递给新页面的数据
		 * 
		 * 
		 * 
		 * data-target="false" data-position='{"top":"0px","bottom":"0px,"width":"100%","height":"100%"}' data-href="html/muinav.html" data-dir="" data-params='{"name":"gaoliang","age":"20"}'
		 */
		$(document).on("click",".muia",function(){
			var url=$(this).attr("data-href");
			var dir=$(this).attr("data-dir");
			var params=$(this).attr("data-params");
			var pos=$(this).attr("data-position");
			var cache=$(this).attr("data-cache")
			!dir ? dir ="right" : dir=dir;
			!params || params=="" ? params={} : params=JSON.parse(params);
			cache=="false" || !cache || cache=="" ? cache=true : cache=false;
			!pos || pos=="" ? pos={} : pos=JSON.parse(pos);
			gl.muiOpenPage(mui,url,cache,pos,params,dir);
		})
		/*
		 * muicamera
		 * 类  ： camera 类，会自动调用图片选择方式（摄像头 / 相册）
		 * data-showDom="headimg" data-name="touxiang" class="camera mui-btn mui-btn-block mui-btn-blue" data-url="aaa.html" data-succ="succ"
		 */
		$(document).on("click",".camera",function(){
			var showdom=$(this).attr("data-showDom");
			var httpurl=$(this).attr("data-url");
			var cb=$(this).attr("data-succ");
			var imgname=$(this).attr("data-name");
			if(!showdom || showdom==""){mui.alert("muicamera属性data-showDom未设置");return;};
			if(!httpurl || httpurl==""){mui.alert("muicamera属性data-httpurl未设置");return;}
			if(!cb || cb==""){mui.alert("muicamera属性data-succ未设置");return;}
			if(!imgname || imgname==""){mui.alert("muicamera属性data-name未设置");return;}
			gl.muiCamera($("."+showdom)[0],imgname,httpurl,cb);
		})
		/*
		 * 点击后，DIV从右侧滑出
		 *   class="search_one" data-showClass="silde_right_one" data-succ="aca"  data-hideClass="one"
		 *   添加类： search_one  含有此类的元素被点击后，会绑定DIV右侧滑出事件
		 *   data属性：
		 *       showClass ： 必填   从右侧滑出DIV的CLASS，保证唯一性，页面中可用多个右侧滑出DIV
		 *       hideClass : 必填   点击此含 有此类的按钮，DIV从右侧滑出
		 *       succ：  选填   点后后的回调函数,返回TRUE/FALSE,当返回TRUE时，DIV才会滑出，否则不滑出，若不添加，刚默认DIV直接滑出
		 */
		/* try
		{
			
			mui("body").on("tap",".search_one",function(){
				
				_search_one(this)
			})
		}
		catch(err)
		{
			$(".search_one").click(function(){
				_search_one(this)
			})
		}*/
		$(".search_one").click(function(){
				_search_one(this)
		})
		function _search_one(obj){
			
			var showClass=$(obj).attr("data-showClass");
				var hideClass=$(obj).attr("data-hideClass");
				var cb=$(obj).attr("data-succ");
				var speed=$(obj).attr("data-speed");
				!speed || speed=="" ? speed=200 : speed=parseInt(speed);
				mui("."+showClass).on("tap","."+hideClass,function(){
					$("."+showClass).animate({"left":"100%"},speed);
				})
				if(!cb){$("."+showClass).animate({"left":"0%"},speed);return;}
				if(window[cb]()){$("."+showClass).animate({"left":"0%"},speed);}
		}
		/*
		 * css3显示框或关闭框
		 */
		function _insert_css3_close_open(w,h){
			var obj=document.getElementById("css3_close_open");
			if(!obj)
			{
				
				var style2=document.createElement("style")
				style2.innerHTML=`
				  					@keyframes css3open{
									from   { width:0px; height:0px; display: block;}
									to { width:`+w+`; height:`+h+`;display: block;}
									}
									@keyframes css3close
									{
									from   { width:`+w+`; height:`+h+`; display: block;}
									to { width:0px; height:0px;display: none;}
									}
								`;
				document.body.appendChild(style2)
			}
		}
	$(document).on("click",".css3open",function(e){
		var obj=e.target;
		var objClass=obj.getAttribute("data-class");
		var time=obj.getAttribute("data-time");
		var obj2=document.querySelectorAll("."+objClass)[0];
		var width=obj.getAttribute("data-width");;
		var height=obj.getAttribute("data-height");;
		_insert_css3_close_open(width,height)
		
		
		obj2.style.transformOrigin="center center";
		obj2.style.animationName="css3open"
		
		obj2.style.animationDuration=time+"s";
		obj2.style.animationFillMode="forwards"
		
	})
	$(document).on("click",".css3close",function(e){
		
		var obj=e.target;
		var objClass=obj.getAttribute("data-class");
		var time=obj.getAttribute("data-time");
		var obj2=document.querySelectorAll("."+objClass)[0];
		var width=obj.getAttribute("data-width");;
		var height=obj.getAttribute("data-height");;
		_insert_css3_close_open(width,height)
		
		obj2.style.transformOrigin="center center";
		obj2.style.animationName="css3close";
		
		obj2.style.animationDuration=time+"s";
		obj2.style.animationFillMode="forwards"
	})
	
});
/*
  *
  *
  *
  *
  *

*/

var GLJS=function(){}
GLJS.prototype.debug=false;
GLJS.prototype.layer_dialog_2=function(succ,message,httpUrl,params,isFd){
		if(httpUrl)
		{
			layer.confirm(message,{btn: ['取消','确定'] },function(){$(".layui-layer-shade,.layui-layer").hide()},function()
			{
				if(isFd){layer.load();gl.sendFormData(httpUrl,params,succ)}else{gl.sendAjax(httpUrl,params,succ,'post')}
			});
		}
		else{layer.confirm(message,{btn: ['取消','确定'] },function(){$(".layui-layer-shade,.layui-layer").hide()},window[succ]);}
}
GLJS.prototype.layer_dialog_1=function(mess,callback,httpUrl){
			if(httpUrl){layer.alert(mess,function(){location.href=httpUrl});return;}
			if(callback){layer.alert(mess,window[callback]);return;};
			layer.alert(mess)
   },
GLJS.prototype.sendAjax=function(httpUrl,params,callBack,type){
	
	   	layer.load();
	   	if(type=="post")
	   	{
	   		this.debug ? alert("POST发送FORMDATA数据:"+JSON.stringify(params)) :"";
	   		var t=this;
	   		$.ajax({
				url:httpUrl,type:"post",data:params,timeout:15000,
				success:function(res)
				{
					
					t.debug ? alert("POS返回数据:"+JSON.stringify(res)) :"";
	                 layer.closeAll('loading');
	                 
					if(callBack){window[callBack](res)}

					{
						/*
						 * 处理无回调常用类型
						 */
					}
				},
				error:function(data){layer.alert("网络异常");layer.closeAll('loading');}
			})
	   	}
	   	else{
	   		var str="";
	   		for(i in params)
	   		{
	   			str=="" ? str="?"+i+"="+params[i] : str=str+"&"+i+"="+params[i]
	   		}
	   		alert(httpUrl+str)
	   		$.get(httpUrl+str,function(res){
	   			layer.closeAll('loading');
	   			if(callBack){window[callBack](res)}
					else
					{
						/*
						 * 处理无回调常用类型
						 */
					}
	   		})
	   	}
		
},

GLJS.prototype.sendFormData=function(httpUrl,fd,callBack){
	var that=this;
		this.debug ? alert("POST发送FORMDATA数据"+fd) :"";
		$.ajax({
			url:httpUrl,type:'post',data:fd,async: false,cache: false,contentType: false,processData: false,timeout:15000,
			success:function(res){
	            layer.closeAll('loading');
				if(callBack){window[callBack](res);}
				else
				{
					/*
					 * 处理无回调常用类型
					 */
				}
			},error:function(){layer.closeAll('loading');layer.alert("网络异常")},
		})
	},
/*
*/
GLJS.prototype.upload=function(selector)
{
	var $obj,serverUrl,resize,succ,imgSrc,size;
	    $obj=$(selector);
	    serverUrl=$obj.attr("data-url");
	    $obj.hasClass("webupload-resize") ? resize=true :resize=false;
	    succ=$obj.attr("data-succ");
	    size=$obj.attr("data-size");
	    !size || size=="" ? size=0 : size=parseInt(size);
	
	    if(!$obj){this.debug ? alert("未找到选择器"+selector) : "";return;}
	    if(serverUrl==""  || !serverUrl){ this.debug ? alert("未添加上传地址data-rul") : "" ;return;}
	    
	  var UPName="web"+new Date().getSeconds();
	  var params={};
	  //单张上传
	
	  if($obj.hasClass("webupload-img"))
	  {
	  	   this.debug ? alert("单张图片上传"): "" ;
		  	params={
		  		auto: true,
		        swf: '/module/js/Uploader.swf',
		        server: serverUrl,
		        pick:selector,
		        resize:resize,
		        accept: {
					        title: 'Images',
					        extensions: 'gif,jpg,jpeg,bmp,png',
					        mimeTypes: 'image/*'
					    }
		  	}
	  }
	  //多张上传
	  if($obj.hasClass("webupload-imgs"))
	  {
	  
	  	    this.debug ? alert("多张上传"): "" ;
		  	params=
		  	{
		  		    dnd:"."+$obj.attr("data-container"),
			  		auto: true,
			        swf: '/module/js/Uploader.swf',
			        server: serverUrl,
			        pick:selector,
			        resize:resize,
			         accept: {
						        title: 'Images',
						        extensions: 'gif,jpg,jpeg,bmp,png',
						        mimeTypes: 'image/*'
						    }
			  }
	  }
	  //文件上传
	  if($obj.hasClass("webupload-file"))
	  {
	  	 this.debug ? alert("文件上传"): "" ;
		  	params=
		  	{
			  		auto: true,
			         swf: '/module/js/Uploader.swf',
			        server: serverUrl,
			        pick:selector,
			}
	  }
	   imgSrc="";
		UPName=WebUploader.create(params)
		UPName.on('beforeFileQueued',function(file){
	
			if(size!=0){if((file.size/1024)>size){alert("上传文件不得超过"+size+"KB"); return false;}	}
		})
		UPName.on('fileQueued',function(file){
				UPName.makeThumb(file,function(error,src){
				imgSrc=src;
				},100,100)
	   })
		UPName.on("uploadSuccess",function(file,res){
			 if($obj.hasClass("webupload-file"))
			 {
			 	window[succ](res,file)  
			 }
			 else
			 {
			 	window[succ](res,imgSrc)  
			 }
		})
}
/*返回OBJ距obj2元素的距离，direction  'top'||'left'||'bottom'||'right'*/
GLJS.prototype.parentSpac=function(obj,obj2,direction){var x,y;switch (direction) {case 'top': x=obj.getBoundingClientRect().top;y=obj2.getBoundingClientRect().top;break;case 'left': x=obj.getBoundingClientRect().left;y=obj2.getBoundingClientRect().left;break;case 'bottom':x=obj.getBoundingClientRect().bottom;y=obj2.getBoundingClientRect().bottom;break;case 'right': x=obj.getBoundingClientRect().right; y=obj2.getBoundingClientRect().right;break; }return(x-y)}
/*移动端禁止滑动*/	
GLJS.prototype.touchStop=function(){window.addEventListener("touchmove",this.docMoveStop,false); document.body.style.height=window.innerHeight+"px"; document.body.style.overflowY="hidden";}
/*移动端开启滑动*/	
GLJS.prototype.touchStart=function(){window.removeEventListener("touchmove",this.docMoveStop,false); document.body.style.height="auto"; document.body.style.overflowY="scroll";}
GLJS.prototype.docMoveStop=function(e){e.preventDefault && e.preventDefault();e.returnValue=false;e.stopPropagation && e.stopPropagation();return false;},
/*获取字符串长度，汉字为两个字节*/
GLJS.prototype.getStrLength=function(str){var len = 0;for (var i=0; i<str.length; i++) {if (str.charCodeAt(i)>127 || str.charCodeAt(i)==94) {len += 2;    } else {     len ++;     }     }return len;    }
/*
 * 检测返回
 * /
 /*整数检测，return ture/false   */
GLJS.prototype.intCheck=function(str){ var myreg=/^(\d)+$/;if(myreg.test(str)){return true;}else{return false}}
/*金额格式检测  return true/false*/
GLJS.prototype.moneyCheck=function(str){if(isNaN(str)){return false;} if(parseFloat(str)<0){return false}; var x=parseFloat(str)*(1000)/10; ;var y=parseInt(parseFloat(str)*1000/10);if(x==y){return true;}else{return false;}}
/*检测手机号*/
GLJS.prototype.telCheck=function(str){var myreg=/^1[3-9]+[0-9]+$/;if(myreg.test(str)&&str.length==11){ return true;}else{return false;}}
/*安卓或IOS系统检测*/
GLJS.prototype.isAnd=function(){var u = navigator.userAgent, app = navigator.appVersion;var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); return isAndroid}
GLJS.prototype.isIOS=function(){var u = navigator.userAgent, app = navigator.appVersion;var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); return isiOS}

/*身份证检测*/
GLJS.prototype.isCardID=function(sId){ 
  var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"} 
  var iSum=0 ;
  var info="" ;
  if(!/^\d{17}(\d|x)$/i.test(sId)) return false; 
  sId=sId.replace(/x$/i,"a"); 
  if(aCity[parseInt(sId.substr(0,2))]==null) return false; 
  sBirthday=sId.substr(6,4)+"-"+Number(sId.substr(10,2))+"-"+Number(sId.substr(12,2)); 
  var d=new Date(sBirthday.replace(/-/g,"/")) ;
  if(sBirthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate()))return false; 
  for(var i = 17;i>=0;i --) iSum += (Math.pow(2,i) % 11) * parseInt(sId.charAt(17 - i),11) ;
  if(iSum%11!=1) return false; 
  //aCity[parseInt(sId.substr(0,2))]+","+sBirthday+","+(sId.substr(16,1)%2?"男":"女");//此次还可以判断出输入的身份证号的人性别
  return true;
}




/*
 * 数值运算
 * /
/*浮点运算，参数1，参数2，运算符，'1'+  '2'-  '3'*   '4' */
GLJS.prototype.jfAdd=function(arg1,arg2,fh){var r1, r2, m;try{r1 = arg1.toString().split(".")[1].length}catch (e){r1 = 0}try{r2 = arg2.toString().split(".")[1].length}catch (e){ r2 = 0 } m = Math.pow(10, Math.max(r1, r2));if(fh=="1"){return (parseInt(arg1 * m)+parseInt(arg2 * m))/m};if(fh=="2"){return (parseInt(arg1 * m)-parseInt(arg2 * m))/m};if(fh=="3"){return (parseInt(arg1 * m)*parseInt(arg2 * m))/m/m}; if(fh=="4"){return (parseInt(arg1 * m)/parseInt(arg2 * m))}}
/*浮点数的四舍五入及取舍 MODE  1直接向上进拉，2直接舍掉最后，3四舍五入*/
GLJS.prototype.floatCut=function(num,length,mode){if(isNaN(num)){return "非数字"};if(!length || parseInt(length)<1){return '请传入位数'};var bigNum=parseFloat(num)*(Math.pow(10,parseInt(length)));if(mode==1){bigNum=Math.ceil(bigNum);}if(mode==2){bigNum=Math.floor(bigNum);}if(mode==3){var arr=num.toString().split(".");if(arr.length!=2){return num};var x=arr[1].substr(parseInt(length),1);if(x>=5){arr[1]=parseInt(arr[1].substr(0,parseInt(length)));arr[1]=parseInt(arr[1])+1;}else{arr[1]=parseInt(arr[1].substr(0,parseInt(length)));}return arr[0]+"."+arr[1];}return bigNum/Math.pow(10,parseInt(length));}
/*delSpace(str)删掉字符串中空格*/
GLJS.prototype.delSpace=function(str){str=str.replace(/ /g,"");return str}

GLJS.prototype.nav_top_Init=function(nav_top,i=1){
			$nav_top=$("."+nav_top)
			//var windowW=$(window).width()
			var windowW=$nav_top.children("ul").width()
			
		  var $liCount= $nav_top.children("ul").eq(0).children("li").size();
			var labelStartLeft=(windowW/$liCount-windowW*0.10)/2
			$nav_top.children("ul").children("li").eq(i-1).siblings().removeClass("active");
			$nav_top.children("ul").children("li").eq(i-1).addClass("active");
			$nav_top.children("label").css("left",windowW/$liCount*(i-1)+labelStartLeft+"px")
			var cb=$nav_top.data("callback")
			window[cb](i)
}  

/*移动端用加载中GIF，初始，显示，取消*/
GLJS.prototype.addWait2=function() {document.write('<style>.addwait2{ position: fixed; top:0px; left:0px; background:rgba(0,0,0,0) ;width:100%; height:100%; font-family:微软雅黑; display:none; z-index:9999;}.addwait2k{ width:90px; height:90px; background:rgba(0,0,0,0.6); border-radius:5px; margin:0px auto; margin-top:200px; overflow:hidden;}.addwait2k_top{ height:55px;  overflow:hidden;}.addwait2k_bottom{  height:35px; line-height:35px; text-align:center; color:#fff; font-size:14px;}.addwait2k_topk{ width:30px; height:30px; margin:0px auto; background:none; margin-top:20px; position:relative }.addwait2k_move{ ; background:#fff; width:7px; height:2px; opacity:0.2 ; border-radius:5px;}@keyframes mymove{from {width:0px; height:0px;}to {width:90px; height:90px}}@-webkit-keyframes mymove {from {width:0px; height:0px;}to {width:90px; height:90px}}@keyframes mymove2{from {width:90px; height:90px;}to {width:0px; height:0px}}@-webkit-keyframes mymove2 {from {width:90px; height:90px;}to {width:0px; height:0px}}</style>');var div1,div2,div3,div4,num=15;div1=document.createElement('div');div1.setAttribute("class","addwait2");document.body.appendChild(div1);div2=document.createElement('div');div2.setAttribute("class","addwait2k");div1.appendChild(div2);div3=document.createElement('div');div3.setAttribute("class","addwait2k_top");div2.appendChild(div3);div4=document.createElement('div');div4.setAttribute("class","addwait2k_bottom");div4.innerHTML="正在加载";div2.appendChild(div4);div5=document.createElement('div');div5.setAttribute("class","addwait2k_topk");div3.appendChild(div5);for(var i=0;i<num;i++){var jd=360/num;var r=10;var x=0;var y=0;x=Math.cos(i*jd*2*Math.PI/360)*r;y=Math.sin(i*jd*2*Math.PI/360)*r;var div6=document.createElement('div');div6.setAttribute("class","addwait2k_move");div6.style.position="absolute";div6.style.left=(x+r)+"px";div6.style.bottom=(y+r+r/2)+"px";var beta=Math.atan2(y,x);div6.style.transform="rotate("+360/6.18*(-beta)+"deg)";div6.style.webkitTransform="rotate("+360/6.18*(-beta)+"deg)";div6.style.mozTransform="rotate("+360/6.18*(-beta)+"deg)";div5.appendChild(div6);}var objs=document.getElementsByClassName("addwait2k_move");var i=3;setInterval(function(){if(i<0){i=num-1;$(".addwait2k_move").css("opacity","0.2");}/*if(i>parseInt(num/2)){div4.innerHTML="正在加载"}else{div4.innerHTML="请稍候"}*/objs[i].style.opacity=1;i--;},100)}
GLJS.prototype.showaddWait2=function(){/*$(".addwait2").slideDown();$(".addwait2k")[0].style.animation="mymove 0.1s"*/$(".addwait2,.addwait2k").show()}
GLJS.prototype.qxaddWait2=function(){setTimeout(function(){$(".addwait2,.addwait2k").hide()},0)/*$(".addwait2k")[0].style.animation="mymove2 0.2s";setTimeout(function(){$(".addwait2").hide();},100)*/}
GLJS.prototype.addWait3=function(){
	!arguments[0] ? arguments[0] =5 : arguments[0]=arguments[0];
    !arguments[1] ? arguments[1] ="silver" : arguments[1]=arguments[1];
	document.write("<style>.wwait3{ display:none; position:fixed;; top:0px; left: 0px; width:100%; height: 100%; background: none; z-index: 9999;}.wwait3k{ width:100%; height: 100%; position:relative;}.wwait3kk { position:fixed; width:auto; left: 0px; right: 0px; margin: auto;; text-align: center; height: 30px; margin: 0px auto; margin-top: calc(100vh / 2); transform:translateY(-50%);-moz-transform:translateY(-50%);-webkit-transform:translateY(-50%);-o-transform:translateY(-50%);;}.wwait3kk  div{margin-left:4px; border-radius:2px 2px 2px 2px; display: inline-block; width:3px; height: 100%; background: gray;transition:0.3s}</style>")
    var wwait3=document.createElement("div"), wwait3k=document.createElement("div"), wwait3kk=document.createElement("div");
    wwait3.setAttribute("class","wwait3"); wwait3k.setAttribute("class","wwait3k"); wwait3kk.setAttribute("class","wwait3kk");
    for(let i=0;i<arguments[0];i++)
    {
    	var obj=document.createElement("div");
    	obj.setAttribute("data-zt","true");
    	(typeof arguments[1])=="string" ? obj.style.background=arguments[1] : obj.style.background=arguments[1][i]; 
    	wwait3kk.appendChild(obj)
    }
    wwait3k.appendChild(wwait3kk)
    wwait3.appendChild(wwait3k)
    document.body.appendChild(wwait3);  
}
GLJS.prototype.showaddWait3=function()
{
	document.getElementsByClassName("wwait3")[0].style.display="block"
	var i=-1;
	var setZt=true;
	var interval=setInterval(function(){
		var objs=document.querySelectorAll(".wwait3kk div");
		if(setZt){i++;i>objs.length ? setZt=false :setZt=true;}else{i--;i<0 ? setZt=true :setZt=false;}
		try
		{
		   var zt=objs[i].getAttribute("data-zt");
			zt=="true" ? objs[i].setAttribute("data-zt","fasle") : objs[i].setAttribute("data-zt","true");
			if(zt=="true"){var y=0.2*Math.random()*2;objs[i].style.transform="scaleY("+y+")"}
			else{objs[i].style.transform="scaleY(1)"}
		}
		catch(err){}
	},100)
	return interval;
}
GLJS.prototype.qxaddWait3=function(jb){document.getElementsByClassName("wwait3")[0].style.display="none";clearInterval(jb)}

/* JQ 序列化， 接收表单ID值或FORM表单对象(JS对象)，并解码汉字*/
GLJS.prototype.jQseri=function(pro){var data;if(pro.nodeName=="FORM"){data=$(pro).serialize()}else{data=$(document.getElementById(pro)).serialize()}
	data= decodeURIComponent(data,true);return data;}
/* 跨域请求*/
GLJS.prototype.JSONP=function(url,callback,errback){$.ajax({url:url,  type:'GET', dataType:'JSONP',callBack:callback, success: function(res){ },error:errback,})}
/*
 get请求地址参数取与赋
*/
GLJS.prototype.setGetOps=function(S,O){var haveOps=S.indexOf("?"), ops="";for(i in O){ops=="" ? ops=i+"="+O[i] : ops=ops+"&"+i+"="+O[i] ;}if(haveOps>0){return S+"&"+ops;}else{return  S+"?"+ops;}}
GLJS.prototype.getGetOps=function(LOC,S){var haveOps=LOC.indexOf("?");if(haveOps<=0){return null;}var ar=LOC.split("?");LOC=ar[1];var arr=LOC.split("&");for(var i=0;i<arr.length;i++){var arrr=arr[i].split("=");if(arrr[0]==S){return arrr[1];}}return null;}
/*
 * 时间处理
/
/* par=201506  返回2015年6月的天数*/
GLJS.prototype.monthDays=function(par){ par=par.toString();if(par.length!=6 || !parseInt(par) ){alert("errorMessage:monthDays需要接收201506样式数据");return;}var year=parseInt(par.substr(0,4));var month=parseInt(par.substr(4,6));if(month>12){alert("errorMessage:monthDays月份数据异常");return;}var  bigM=/^1$|3|5|7|8|10|12/g;var rn=false;if(year%400==0){rn=true;}if(year%4==0 && year%100!=0){rn=true;}if(bigM.test(month)){return 31;}else{if(month==2){if(rn){return 29;}else{return 28;}}else{return 30;}}}
/*str="2017年1月20日10时45份5秒"  返回指定时间段与现在时间的差，以小时为单位*/
GLJS.prototype.timeC=function(str){var str2="";for(var i=0;i<str.length;i++){if(str[i].charCodeAt()>57||str[i].charCodeAt()<48){str2=str2+"/"}else{str2=str2+str[i]}};var arr=str2.split("/");var nowDate=new Date();var oldDate=new Date();oldDate.setFullYear(parseInt(arr[0]));oldDate.setMonth(parseInt(arr[1])-1);oldDate.setDate(parseInt(arr[2]));oldDate.setHours(parseInt(arr[3]));oldDate.setMinutes(parseInt(arr[4]));oldDate.setSeconds(parseInt(arr[5]));var x=nowDate.getTime();var y=oldDate.getTime();return ((x-y)/(60000*60));}
/*接收2016，返回是否是闰年*/
GLJS.prototype.isLeap=function(year){year=parseInt(year);if(year%400==0){rn=true;}if(year%4==0 && year%100!=0){rn=true;}return false}
/*
 * 数组操作
 */
/*数值数组冒泡排序  默认为从小到大，zt TRUE/FALSE  */
GLJS.prototype.bubbleSort=function (arr,zt){for(var i=0;i<arr.length;i++){for(var j=i+1;j<arr.length;j++){var temp=0;if(zt){if(arr[i]<arr[j]){temp=arr[i];arr[i]=arr[j];arr[j]=temp;}}else{if(arr[i]>arr[j]){temp=arr[i];arr[i]=arr[j];arr[j]=temp;}}}}}
/*数值数组选择排序 默认为从小到大，TRUE/FALSE  */
GLJS.prototype.selectSort=function (arr,zt){for(var i=0;i<arr.length;i++){var minVal=arr[i];var minIndex=i;var temp;for(var j=i+1;j<arr.length;j++){if(zt){if(minVal<arr[j]){minVal=arr[j];minIndex=j;}}else{if(minVal>arr[j]){minVal=arr[j];minIndex=j;}}}temp=arr[i];arr[i]=minVal;arr[minIndex]=temp;}}
/*合并数组，并排除一致内容*/
/*
 * mui 移动版轮播  参数选择器，轮播时长（毫秒）
 */

GLJS.prototype.muiloop=function(selector,haomiao){mui.init({swipeBack:true });
		var slider = mui(selector);slider.slider({interval: haomiao});
	}

/*
 * mui 懒加载，接收默认图片路径，
 */

GLJS.prototype.muiLazyLoad=function(defaultSrc){
  try {mui(document).imageLazyload({placeholder: defaultSrc});}catch(err){this.debug ? alert("未加载MUI") : "";}
}
/*
 * 侧滑工具栏
 * 滑动容器ID
 * 主页面CLASS
 * 滑动部分ID
 * 主页面及滑动部分下一级DIV需加入  主页面CLASSScrollId,滑动部分第一个子元素DIV，加入ID  滑动部分IDScroll
 */

GLJS.prototype.muiasSide=function(containerId,mainClass,menuId){	

		    var div=document.createElement("div");
		    div.setAttribute("class","mui-off-canvas-backdrop");
		    
			 //侧滑容器父节点
			var offCanvasWrapper = mui('#'+containerId);
			 //主界面容器
			var offCanvasInner = offCanvasWrapper[0].querySelector('.'+mainClass);
			offCanvasInner.appendChild(div)
			 //菜单容器
			var offCanvasSide = document.getElementById(menuId);
			var moveTogether = 3;//1整体移动，2主菜单缩小，3，主菜单不动
			 //侧滑容器的class列表，增加.mui-slide-in即可实现菜单移动、主界面不动的效果；
			var classList = offCanvasWrapper[0].classList;
			
					switch (moveTogether) 
					{
						case 1:
							if (moveTogether) {
								//仅主内容滑动时，侧滑菜单在off-canvas-wrap内，和主界面并列
								offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
								moveTogether = false;
							}
							break;
						case 2:
							if (moveTogether) {
								//仅主内容滑动时，侧滑菜单在off-canvas-wrap内，和主界面并列
								offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
							}
							classList.add('mui-scalable');
							break;
						case 3:
							classList.add('mui-slide-in');
							break;
						case 4:
							moveTogether = true;
							//整体滑动时，侧滑菜单在inner-wrap内
							offCanvasInner.insertBefore(offCanvasSide, offCanvasInner.firstElementChild);
							break;
					}
					//offCanvasWrapper.offCanvas().refresh();
			document.getElementById('offCanvasShow').addEventListener('tap', function() {
				offCanvasWrapper.offCanvas('show');
			});
			document.getElementById('closeaside').addEventListener('tap', function() {
				offCanvasWrapper.offCanvas('close');
			});
			 //主界面和侧滑菜单界面均支持区域滚动；
			 var a="#"+mainClass+"Scroll";
			 var b="#"+menuId+"Scroll";
			
			
			mui(a).scroll();
			mui(b).scroll();
			 //实现ios平台的侧滑关闭页面；
			if (mui.os.plus && mui.os.ios) {
				offCanvasWrapper[0].addEventListener('shown', function(e) { //菜单显示完成事件
					plus.webview.currentWebview().setStyle({
						'popGesture': 'none'
					});
				});
				offCanvasWrapper[0].addEventListener('hidden', function(e) { //菜单关闭完成事件
					plus.webview.currentWebview().setStyle({
						'popGesture': 'close'
					});
				});
			}
}

/*
 * mui打开新页面（APP内应用）
 * 调用方式 ：  gl.muiOpenPage(mui,"html/list.html",true,{top:"50"},{name:"gao",age:"32"},"left");
 * 参数： 【1】mui对象，必填
 *       【2】跳转页面URL，必填
 *       【3】第二次打开时是否重新加载  true重新加载，false不重新加载，默认false
 *       【4】 position 默认为： {top:"0px",bottom:"0px",width:"100%",height:"100%"}，也可只传单项值{top:"50"}，其它还是默认值
 *       【5】页面传值 可不传，格式{name:"xiaoming",age:20}  新页面取值   var self = plus.webview.currentWebview(); alert(self.params.name+"******"+self.params.age);
 *       【6】切换方式，默认为由右侧滑出，要接收"top","left","right","bottom","center"
 *        
 */

GLJS.prototype.muiOpenPage=function(){
	var mmui=arguments[0],url=arguments[1],nocache=arguments[2],position=arguments[3],params=arguments[4],show=arguments[5];
	if(!mmui){layer.alert("未传入MUI对象");return;}
	if(!url || url==""){layer.alert("未传入新页面地址");return;}
    !position ? position={top:"0",bottom:"0",width:"100%",height:"100%"} : position=position;
    !params ? params={}:params=params;
    ! nocache ? false : true; 
    switch (show)
    {
    	case "left" : show="slide-in-left"; break;
    	case "right" : show="slide-in-right";break;
    	case "top" :show="slide-in-top";break;
    	case "bottom" :show="slide-in-bottom";break;
    	case "center" :show="zoom-out";break;
    	default :show="slide-in-right";
    }
    
	mmui.openWindow({
    url:url,id:url,
    styles:{
      top:position.top,//新页面顶部位置
      bottom:position.bottom,//新页面底部位置
      width:position.width,//新页面宽度，默认为100%
      height:position.height,//新页面高度，默认为100%
    },
    extras:{ params},
    createNew:nocache,
    show:{
      autoShow:true,//页面loaded事件发生后自动显示，默认为true
      aniShow:show,//页面显示动画，默认为”slide-in-right“；
      duration:200//页面动画持续时间，Android平台默认100毫秒，iOS平台默认200毫秒；
    },
    waiting:{
      autoShow:true,//自动显示等待框，默认为true
      title:'加载中...',//等待对话框上显示的提示内容
      options:{
        width:"90",//等待框背景区域宽度，默认根据内容自动计算合适宽度
        height:"90",//等待框背景区域高度，默认根据内容自动计算合适高度
        
      }
    }
 })
}
/*
 * MUI 调用本地摄像头
 * mui.plusReady(function(){一定要置于plusReady内，否则不能正常调用;})
 * 调用方式：gl.muiCamera($(".headimg")[0],"http://www.baidu.com",function(res){});
 * 参数：【1】用于回显所选的图片DOM，必填
 *       【2】上传时IMG的NAME值    必填
 *       【3】图片上传地址   必填
 *       【4】匿名回调函数  必填
 * 
 */

GLJS.prototype.muiCamera=function(imgdom,imgKey,serverUrl,callback){
	  plus.nativeUI.actionSheet({cancel:"取消",buttons:[ 
                            {title:"拍照"}, {title:"从相册中选择"} ]}, function(e){
                       	     switch(e.index){ case 1:appendByCamera();break; case 2:appendByGallery();break; }
                        }); 
                        function appendByCamera()
                        {
				               var cmr= plus.camera.getCamera();
				               var res = cmr.supportedImageResolutions[0];
	                           var fmt = cmr.supportedImageFormats[0];
				               cmr.captureImage(function(e){
				                    plus.io.resolveLocalFileSystemURL(e, function(entry) {
				                        var path = entry.toLocalURL();
				                        imgdom.src = path;  
				                        imgdom.onload=function(){upload(imgdom,callback)}
				                    }, function(e) {
				                        mui.toast("读取拍照文件错误：" + e.message);
				                    },{resolution:res,format:fmt});
				     
				                });   
				        }
                        function appendByGallery()
                        {
				                plus.gallery.pick(function(path){
				                    imgdom.src = path;
				                     imgdom.onload=function(){alert("sssss");upload(imgdom,callback)}
				                });
				        }
                         function upload(files,callback)
                         {
					                var wt=plus.nativeUI.showWaiting();
					                setTimeout(function(){wt.close()},2000);
					                var task=plus.uploader.createUpload(serverUrl,
					                    {method:"POST"},function(t,status){ wt.close();window[callback](t);}
					                );  
					                //task.addData("name","test");
					                task.addFile(files.src,{key:imgKey});
					                task.start();
					     } 
}
//muiaudio
 

GLJS.prototype.muiaudio=function(ops)
{
	        var r = plus.audio.getRecorder();
			var p=plus.audio.createPlayer("_doc/audio/test.mp3");
			var amrPath="";//录音文件存放本地路径
		    var startTime,overTime;
		    var base64;
			
		   mui("body").on("hold",ops.btnSelector,function(){
		   	startTime=new Date().getTime();
			r.record({filename:"_doc/audio/",format:"amr"},function(path){
				overTime=new Date().getTime();
				
			if(overTime-startTime<ops.longTime*1000){alert("录音时间小于"+ops.longTime+"秒");return;}
				amrPath=path;
			   !ops.useBase64 ? "":base64=Audio2dataURL(path)

			   !ops.autoPlay ? "" :    !ops.useBase64 ?  plus.audio.createPlayer(amrPath).play()  : "";
			},function(e){alert("录音失败:"+e.message)})
		})
		mui("body").on("release",ops.btnSelector,function(){r.stop();})
		
		mui("body").on("tap",ops.btnPlay,function(){p=plus.audio.createPlayer(amrPath);p.play(function(){},function(e){})})
		mui("body").on("tap",ops.btnStop,function(){p.stop()})
		function playAudio (path) {
		    var player = plus.audio.createPlayer(path);
		    player.play(function(){
		        mui.toast("播放成功");
		    }, function(e) {
		        mui.toast("播放失败");
		    }); 
		}
		function Audio2dataURL (path) 
		{
						    plus.io.resolveLocalFileSystemURL(path, function(entry){
						        entry.file(function(file){
						            var reader = new plus.io.FileReader();
						            reader.onloadend = function (e) {
						            	//showdom.innerHTML=e.target.result;
						                var base64Str= e.target.result;
						                ops.base64Dom.value=base64Str;
						                !ops.autoPlay ? "" :dataURL2Audio(base64Str, function(entry){
										        var toURL = entry.toURL();
										        // 播放音频
										        playAudio(toURL);
										    })
						            };
						            reader.readAsDataURL(file);
						        },function(e){
						            mui.alert("读写出现异常: " + e.message );
						        })
						    })
		}
     function dataURL2Audio (base64Str, callback)
     {
		    var base64Str = base64Str.replace('data:audio/amr;base64,','');
		    var audioName = (new Date()).valueOf() + '.amr';
		
		    plus.io.requestFileSystem(plus.io.PRIVATE_DOC,function(fs){
		        fs.root.getFile(audioName,{create:true},function(entry){
		            // 获得平台绝对路径
		            var fullPath = entry.fullPath;
		            if(mui.os.android){  
		                // 读取音频
		                var Base64 = plus.android.importClass("android.util.Base64");
		                var FileOutputStream = plus.android.importClass("java.io.FileOutputStream");
		                try{
		                    var out = new FileOutputStream(fullPath);
		                    var bytes = Base64.decode(base64Str, Base64.DEFAULT);
		                    out.write(bytes); 
		                    out.close();
		                    // 回调
		                    callback && callback(entry);
		                }catch(e){
		                    console.log(e.message);
		                }
		            }else if(mui.os.ios){
		                var NSData = plus.ios.importClass('NSData');
		                var nsData = new NSData();
		                nsData = nsData.initWithBase64EncodedStringoptions(base64Str,0);
		                if (nsData) {
		                    nsData.plusCallMethod({writeToFile: fullPath,atomically:true});
		                    plus.ios.deleteObject(nsData);
		                }
		                // 回调
		                callback && callback(entry);
		            }
		        })
		    })
	}
}
var gl=new GLJS();






