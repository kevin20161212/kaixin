//$("#scrollmain").css("height",($("body").height()+90)+"px")
//myScroll.refresh()

var blv={
		    
             isOver:false,//是否全部加载完毕。
             loadZt:false,
	}

myScroll = new IScroll('#scrollmain', { probeType: 3, mouseWheel: true });
myScroll.on('scrollEnd',scrollOver);
myScroll.on('scroll',scrollMove);
  //myScroll.bounce=true;
function scrollMove(){
	
	mysc.moveCB(this.y)
	if(this.y>60)
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
	}
}
function scrollOver(){if(this.y<this.maxScrollY+5)
	{
        
		if(blv.isOver){return;}
		$(".gif").show()
	    nextpage()
		
	}
}

function nextpage(){
	$.ajax({
			type:"post",
			url:mysc.url,
			data:mysc.params,
			success:function(res){
           console.log(res.status)
				$(".gif").hide();
				if(res.status=="1")//表示还有数据
				{
					mysc.overCB(res);
					myScroll.refresh()
				}
				else
				{
					
					blv.isOver=true;
					
					if(mysc.params.page==1)
					{
						mysc.none();
					}
					else
					{
						$(".gif").show()
						$(".gif").html(	'<div class="over"><label></label><span>我是有底线的！</span><label></label></div>')
					}
				}
			},
			error:function(){
				alert("网终异常")
				blv.isOver=true;
				$(".gif").hide();
			}
		});
}
nextpage()
