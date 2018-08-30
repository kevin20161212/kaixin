//$("#scrollmain").css("height",($("body").height()+90)+"px")
//myScroll.refresh()

(function ($)
{
	$.fn.jQscroll=function(opi)
	{
		var self=
		{
			
			con:'',// 父容器
		    url:"",//翻页地址
		    params:"",
		    auto:'',//是否自动请求第一页
		    move:"",
			moveCB:"",//滚动条到底函数,
		    
		    wait:"",//请求数据时，需做的DOM处理
		    cancelWait:"",//取消等待效果
			none:"",//无数据回调函数
			
			over:"",//有数据到底了回调
		}
		var JQS=$.extend(self,opi);
		//是否全部加载完毕。
		JQS.isOver=false;
		JQS.myScroll = new IScroll('#'+JQS.con, { probeType: 3, mouseWheel: true });
       JQS.myScroll.on('scrollEnd',scrollOver);
       JQS.myScroll.on('scroll',scrollMove);
       //滚动条滚动触发
		function scrollMove()
		{
	        JQS.move(this.y)
			/*if(this.y>60)
			{
				blv.loadZt=true; $("#pullDown img").addClass("zd");
			}
			else
			{
				if(blv.loadZt)
				{
					$("#pullDown img").removeClass("zd").addClass("fzd");
					if(this.y<1)
					{
						location.reload()
					}
				}
			}*/
		}
		//滚动条停止滚动触发
		function scrollOver()
		{
			
			if(this.y<this.maxScrollY+5)
			{
		        
				if(JQS.isOver){return;}
				JQS.wait()
                JQS.myScroll.refresh()
			    nextpage()
				
			}
		}
		//下一页请求
		function nextpage()
		{
			$.ajax({
					type:"post",
					url:JQS.url,
					data:JQS.params,
					success:function(res)
					{
						
		                console.log(res.status)
		                JQS.cancelWait();
						//$(".gif").hide();
						if(res.status=="1")//表示还有数据
						{

							JQS.moveCB(res);
							JQS.myScroll.refresh()
							JQS.params.page+=1;
							
						}
						else
						{
							
							JQS.isOver=true;
							
							if(JQS.params.page==1)
							{
								JQS.none();
								JQS.myScroll.refresh()
							}
							else
							{
								JQS.over();
								JQS.myScroll.refresh()
								//$(".gif").show()
								//$(".gif").html(	'<div class="over"><label></label><span>我是有底线的！</span><label></label></div>')
							}
						}
					},
					error:function()
					{
						JQS.isOver=true;
						JQS.myScroll.refresh()
						JQS.cancelWait();
					}
				});
		}
		JQS.auto==true ? nextpage() : "";
		return JQS.myScroll;
   }
})(jQuery);

