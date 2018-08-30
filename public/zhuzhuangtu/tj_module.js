	/**
	 * event
	 */
var laydate=layui.laydate;
//alert(laydate)
	
$(function(){
	
   
    setTimeout(function(){bindData()},1000)
    		
	function bindData(){
	
		$(".tj_dateselect input").each(function(){
			//alert(this.id)
	    		     var that=this;
	    		     var type=that.getAttribute("data-type")

			    		laydate.render
				    	  ({
					    	  	elem: '#'+that.id,
					    	  	//type:type,
					    	  	range: true,
					    	  	done:function(value,date,endDate)
					    	  	{
					    	  		var op={
					    	  			start:value,
					    	  			end:endDate
					    	  		}
					    	  		changeDate(that.id,op)
					    	  	}
				    	  });
			    	})
	}
	function changeDate(id,op)
	{
		//alert(id)
		//alert(op.start+"------------"+op.end)
		var obj=document.getElementById(id)
		
		var Url=obj.getAttribute("data-url")
		var Date=obj.value;
		var cb=obj.getAttribute("data-succ")
		$.ajax({
			url:Url,
			date:op,
			success:cb,
			error:function(){layer.alert("网络异常")}
		})
	}
	/*快捷时间选择*/
	$(".tj_dateselect .tj_dataselect_l").on("click","a",function(){
		var url=this.getAttribute("data-url");
		var type=this.getAttribute("data-type");
		var cb=this.getAttribute("data-succ");
		//alert(cb)
		$(this).addClass("active").siblings().removeClass("active");
		var date=new Date();
		
		switch (type)
		{
			case  "day" :
			 var str=date.getFullYear()+"-" + (parseInt(date.getMonth)+1) + date.getDate();
			break;
			case "week" :
			break;
			case "month" :
			break;
		}
        var that=this;
      
		$.ajax({
			url:url,
			data:"type="+type,
			type:"post",
			success:function(res){
				
				if(cb==""||!cb)
				{
					var obj=$(that).parent().parent().next();
					obj.setAttribute("data-data",res.info)
				}
				else
				{
					
				   window[cb](res);
				}
			},
			error:function(){layer.alert("网络异常")},
		})
	})
	
	
		
})
    	
   /*
    * draw
    */ 	  
$(function(){b()})
function b(){  
	
    		$(".echarts").each(function()
    		{
    			var title=this.getAttribute("data-title");
    			var type=this.getAttribute("data-type");
    		    var ops={dom:this,title:title,type:type,}
    			
    			
    			switch (ops.type)
    			{
    				case "bar":
    				   	var sort=this.getAttribute("data-sort");
		    			var data=this.getAttribute("data-data");
		    			var barWidth=this.getAttribute("data-barWidth");
		    			var color=this.getAttribute("data-color");
		    			data=JSON.parse(data);
		    			var titleArr ,dataArr;//bar,line,pei用数据
		    			ops.color=color;
		    			ops.sort=sort;
		    			ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr=_jsonToArray(data,"value","int");
		    			ops.barWidth= !barWidth || barWidth=="" ? "100" : barWidth,
	    				_echarts_bar_line(ops);
	    				break;
    				case "line" : 
    				   	var sort=this.getAttribute("data-sort");
		    			var data=this.getAttribute("data-data");
		    			var barWidth=this.getAttribute("data-barWidth");
		    			var color=this.getAttribute("data-color");
		    			data=JSON.parse(data);
		    			
		    			var titleArr ,dataArr;//bar,line,pei用数据
		    			ops.sort=sort;
		    			ops.color=color;
		    			ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr=_jsonToArray(data,"value","int");
		    			
		    			ops.barWidth= !barWidth || barWidth=="" ? "100" : barWidth,
	    				_echarts_bar_line(ops);
	    				break;
	    			case "line2" :
	    			    var data=this.getAttribute("data-data");
	    			    data=JSON.parse(data);
		    			var barWidth=this.getAttribute("data-barWidth");
	    			    var titleArr ,dataArr;//bar,line,pei用数据
	    			    ops.titleArr=_jsonToArray(data,"name","str");
	    
		    			ops.dataArr=_jsonToArray(data,"value","int");
	    			    _echarts_line2(ops);
	    			    break;
	    			case "double_line_bar" :
	    			     var data=this.getAttribute("data-data");
	    			     var sort=this.getAttribute("data-sort");
	    			     var type1=this.getAttribute("data-type1");
	    			     var type2=this.getAttribute("data-type2");
	    			     var color1=this.getAttribute("data-color1");
	    			     var barWidth=this.getAttribute("data-barWidth");
	    			     var color2=this.getAttribute("data-color2");
	    			     data=JSON.parse(data);
	    			     ops.sort=eval(sort);
	    			     ops.type1=type1;
	    			     ops.type2=type2;
	    			     ops.barWidth=barWidth;
	    			     var titleArr ,dataArr1,dataArr2;
	    			    ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr1=_jsonToArray(data,"value","int");
		    			ops.dataArr2=_jsonToArray(data,"value2","int");
		    			ops.color1=color1;ops.color2=color2;
	    			      _echarts_double_line_bar(ops)
	    			     break;
	    			case "double_line_bar2" :
	    			     var data=this.getAttribute("data-data");
	    			     var sort=this.getAttribute("data-sort");
	    			     var type1=this.getAttribute("data-type1");
	    			     var type2=this.getAttribute("data-type2");
	    			     var color1=this.getAttribute("data-color1");
	    			     var barWidth=this.getAttribute("data-barWidth");
	    			     var color2=this.getAttribute("data-color2");
	    			     data=JSON.parse(data);
	    			     ops.sort=eval(sort);
	    			     ops.type1=type1;
	    			     ops.type2=type2;
	    			     ops.barWidth=barWidth;
	    			     var titleArr ,dataArr1,dataArr2;
	    			    ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr1=_jsonToArray(data,"value","int");
		    			ops.dataArr2=_jsonToArray(data,"value2","int");
		    			ops.color1=color1;ops.color2=color2;
	    			      _echarts_double_line_bar2(ops)
	    			     break;
	    			case "pie" :
	    			     var data=this.getAttribute("data-data");
	    			     data=JSON.parse(data);
	    			     ops.sortName=this.getAttribute("data-sort");
	    			     ops.sortArr=_jsonToArray(data,"name","str");
	    			     ops.dataArr=data;
    					_echarts_air(ops);
    				    break;
    				case "map" :
    				    var data=this.getAttribute("data-data");
    				    data=JSON.parse(data);
    				    ops.mapDataArr=data;
    				    _chinaMap(ops)
    				    break;
    				case "map_sheng" :
    				   var data=this.getAttribute("data-data");
    				    data=JSON.parse(data);
    				    ops.mapDataArr=data;
    				    ops.sheng=this.getAttribute("data-mc");
    				    _shengMap(ops)
    				    break;
    				case "column" :
    				    var data=this.getAttribute("data-data");
    				    data=JSON.parse(data);
    				    var barWidth=this.getAttribute("data-barWidth");
	    			    var titleArr ,dataArr;//bar,line,pei用数据
	    			    ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr=_jsonToArray(data,"value","int");
		    			_left_right_column(ops);
		    			break;
		    		case "radar" : //雷达图  单个雷达图
		    		   
		    		    var data=this.getAttribute("data-data");//数据
		    		    data=JSON.parse(data);
		    		    ops.data=data;
		    		    var indicator=this.getAttribute("data-indicator");//标准
		    		    ops.sort=this.getAttribute("data-sort");//小明
		    		    var titleArr ,dataArr;
	    			    ops.titleArr=_jsonToArray(data,"name","str");
		    			ops.dataArr=_jsonToArray(data,"value","int");
		    			ops.indicator=JSON.parse(indicator)
		    		    _echarts_radar(ops)

		    		    break;
    			}
    		})
}
function _jsonToArray(arr,str,status)
{
    	var rearr=[];
    	for(var i=0;i<arr.length;i++)
    	{
    		status=="int" ? rearr.push(parseInt(arr[i][str])) : rearr.push(arr[i][str]);
    	}
    	return rearr;
}
function _echarts_air(ops)
{
    	var myChart = echarts.init(ops.dom);
		option = {
			    title : {
			        text: ops.title,
			        subtext: '',//副标题
			        x:'center',
			    },
			   tooltip : {
			        trigger: 'item',
			        formatter: "{a} <br/>{b} : {c} ({d}%)"
			    },
			    legend: {
			        orient: 'vertical',
			        left: 'right',
			        data: ops.sortArr,
			    },
			    series : [
			        {
			            name:ops.sortName,
			            type: 'pie',
			            radius : '55%',
			            center: ['50%', '60%'],
			            data:ops.dataArr,
			            itemStyle: {
			                emphasis: {
			                    shadowBlur: 10,
			                    shadowOffsetX: 0,
			                    shadowColor: 'rgba(0, 0, 0, 0.5)'
			                }
			            }
			        }
			    ]
			};
		myChart.setOption(option);
 }
function _echarts_bar_line(ops)
{
	
        var myChart = echarts.init(ops.dom);
        var option = {
            title: {
                text: ops.title,
                left:20,
                top:10,
            },
            grid: {left: '20px',right: '0%',bottom: '5%',containLabel: true},
            color : [ops.color,'#87cefa', '#61a0a8', '#d48265', '#91c7ae','#749f83',  '#ca8622', '#bda29a','#6e7074', '#546570', '#c4ccd3'],
            tooltip: {},
          /*  legend: {
                data:[ops.sort],
                top:10, 
            },*/
           toolbox: {
			        show: true,
			        feature: {
			            dataZoom: {
			                yAxisIndex: 'none'
			            },
			            dataView: {readOnly: false},
			            magicType: {type: ['line', 'bar']},
			            restore: {},
			            saveAsImage: {}
			        }
			},
            xAxis: {
              data:ops.titleArr, // data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
              axisLabel:{  
                        interval:0,  
                        rotate:45,//倾斜度 -90 至 90 默认为0  
                        margin:10,  
                        textStyle:{  
                            fontWeight:"",  
                            color:"#000000"  
                        }  
                    }, 
            },
            yAxis: {},
            series: [{
                name: ops.sort,
                type: ops.type,
                barMaxWidth: ops.barWidth,
                data:ops.dataArr,// data: [5, 20, 36, 10, 10, 20]
                label:{position:'bottom'}
            }]
        };
        myChart.setOption(option);
}

function _shengMap(ops)
{
		var myChart = echarts.init(ops.dom)
	myChart.showLoading();
    $.get('../js/map_sheng/'+ops.sheng+'.json', function (geoJson) {
  		myChart.hideLoading();
  		echarts.registerMap('HK', geoJson);
        myChart.setOption(option = {
        title: 
        {
            text: ops.title,
            left:"center",
            top:100,
            textStyle:{color:"#303030"}
        },
        tooltip: {trigger: 'item',formatter: '{b}<br/>{c}'},
        toolbox: 
        {
            show: true,
            orient: 'vertical',
            left: 'right',
            top: 'center',
            feature: {
                dataView: {readOnly: false},
                restore: {},
                saveAsImage: {}
            }
        },
        visualMap:
        {
            min: 800,
            max: 50000,
           // type: 'piecewise', 
            text:['高','低'],
            realtime: false,
            calculable: true,
            inRange: {
                color: ['lightskyblue','yellow', 'orangered']
            }
        },
        series: 
        [
                {
	                name: '销量',
	                type: 'map',
	                mapType: 'HK', // 自定义扩展图表类型
	                itemStyle:
	                {
	                    normal:{label:{show:true}},
	                    emphasis:{label:{show:true}}
	                },
                	data:ops.mapDataArr,
           		 }
       	]
    });
    myChart.on('click', function (params) {//点击事件
    	   
    	   for(var i in params)
    	   {
    	   	console.log(i+"=="+params[i])
    	   }
    	   
		        if (params.componentType === 'series') {
		             var provinceName =params.name;
		              ops.title=params.name
		             ops.dom=document.getElementById("shi");
		             var data=ops.dom.getAttribute("data-data");
		             data=JSON.parse(data);
    				 ops.mapDataArr=data;
    				 ops.shi=ops.title;
		             _cityMap(ops)
		            }
		});
  });
}
function _cityMap(ops)
{
		var myChart = echarts.init(ops.dom)
	myChart.showLoading();
    $.get('../js/map_city/'+ops.shi+'.json', function (geoJson) {
  		myChart.hideLoading();
  		echarts.registerMap('HK', geoJson);
        myChart.setOption(option = {
        title: 
        {
            text: ops.title,
            left:"center",
            top:"100",
            textStyle:{color:"#303030"}
        },
        tooltip: {trigger: 'item',formatter: '{b}<br/>{c}'},
        toolbox: 
        {
            show: false,
            orient: 'vertical',
            left: 'right',
            top: 'center',
            feature: {
                dataView: {readOnly: false},
                restore: {},
                saveAsImage: {}
            }
        },
        visualMap:
        {
            min: 800,
            max: 50000,
           // type: 'piecewise', 
            text:['高','低'],
            realtime: false,
            calculable: true,
            inRange: {
                color: ['lightskyblue','yellow', 'orangered']
            }
        },
        series: 
        [
                {
	                name: '销量',
	                type: 'map',
	                mapType: 'HK', // 自定义扩展图表类型
	                itemStyle:
	                {
	                    normal:{label:{show:true}},
	                    emphasis:{label:{show:true}}
	                },
                	data:ops.mapDataArr,
           		 }
       	]
    });
  });
}
function _chinaMap(ops)
{
   	var myChart = echarts.init(ops.dom)
	myChart.showLoading();
    $.get('../js/china.json', function (geoJson) {
  		myChart.hideLoading();
  		echarts.registerMap('HK', geoJson);
        myChart.setOption(option = {
					        title: 
					        {
					            text: ops.title,
					            left:"center",
					            top:"200",
					            textStyle:{color:"#303030"}
					        },
        					tooltip: {trigger: 'item',formatter: '{b}<br/>{c}'},
					        toolbox: 
					        {
					            show: false,
					            orient: 'vertical',
					            left: 'right',
					            top: 'center',
					            feature: {
					                dataView: {readOnly: false},
					                restore: {},
					                saveAsImage: {}
					            }
					        },
					        visualMap:
					        {
					        	show:true,
					            min: 800,
					            max: 50000,
					           type: 'piecewise', 
					            text:['高','低'],
					            realtime: false,
					            calculable: true,
					            inRange: {
					                color: ['lightskyblue','yellow', 'orangered']
					            }
					        },
					        series: 
					        [
					                {
						                name: '销量',
						                type: 'map',
						                mapType: 'HK', // 自定义扩展图表类型
						                itemStyle:
						                {
						                    normal:{label:{show:true}},
						                    emphasis:{label:{show:true}}
						                },
					                	data:ops.mapDataArr,
					           		 }
					       	]
    	});
    	myChart.on('click', function (params) {//点击事件
		        if (params.componentType === 'series') {
		             var provinceName =params.name;
		             ops.dom=document.getElementById("sheng");
		             ops.title=params.name;
		             var data=ops.dom.getAttribute("data-data");
		            // alert(ops.title)
		             data=JSON.parse(data);
    				 ops.mapDataArr=data;
    				 ops.sheng=ops.title;
		             _shengMap(ops)
		            }
		});
  });
}
function _echarts_line2(ops)
{
	
	var myChart = echarts.init(ops.dom)
	option = 
	{
		    title: {
		        text: ops.title,
		       // subtext: '数据来自网络'
		    },
		    tooltip: {
		        trigger: 'axis',
		        axisPointer: {
		            type: 'shadow'
		        }
		    },
		    /*legend: {
		        data: ['2011年', '2012年']
		    },*/
		    grid: {
		        left: '3%',
		        right: '4%',
		        bottom: '3%',
		        containLabel: true
		    },
		    xAxis: {
		        type: 'value',
		        boundaryGap: [0, 0.01],
		         /*axisLabel:{  
                        interval:0,  
                        rotate:45,//倾斜度 -90 至 90 默认为0  
                        margin:10,  
                        textStyle:{  
                            fontWeight:"",  
                            color:"#000000"  
                        }  
                    } */
           
		    },
		    yAxis: {
		        type: 'category',
		       // data: ['巴西','印尼','美国','印度','中国','世界人口(万)']
		       data:ops.titleArr
		    },
		    series: [
		        /*{
		            name: '2011年',
		            type: 'bar',
		            data: [18203, 23489, 29034, 104970, 131744, 630230]
		        },*/
		        {
		            //name: '2012年',
		            type: 'bar',
		            //data: [19325, 23438, 31000, 121594, 134141, 681807]
		            data:ops.dataArr
		        }
		    ]
		};
		myChart.setOption(option);
}
function _echarts_double_line_bar(ops)
{
	var myChart = echarts.init(ops.dom);
	option = {
    title: {
        text: ops.title,
      //  subtext: '纯属虚构'
    },
   
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:ops.sort,
        
        },
    toolbox: {
        show: true,
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            dataView: {readOnly: false},
            magicType: {type: ['line', 'bar']},
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis:  {
        type: 'category',
        boundaryGap: false,
        data: ops.titleArr,
		axisLabel:{  
                        interval:0,  
                        rotate:45,//倾斜度 -90 至 90 默认为0  
                        margin:10,  
                        textStyle:{  
                            fontWeight:"",  
                            color:"#000000"  
                        }  
                    }, 
		
    },
    yAxis: {
        type: 'value',
        axisLabel: {
            formatter: '{value}'
        }
    },
    series: [
	        {
	            name:ops.sort[0],
	            type:ops.type1,
	            data:ops.dataArr1,
	            barMaxWidth: ops.barWidth,
	            markPoint: {
	                data: [
	                    {type: 'max', name: '最大'+ops.sort[0]},
	                    {type: 'min', name: '最小'+ops.sort[0]}
	                ]
	            },
	            itemStyle:{
	            	color:ops.color1
	            },
	        },
	        {
	            name:ops.sort[1],
	            type:ops.type2,
	            data:ops.dataArr2,
	            barMaxWidth: ops.barWidth,
	            markPoint: {
	                data: [
	                    {type: 'max', name: '最大'+ops.sort[0]},
	                    {type: 'min', name: '最小'+ops.sort[0]}
	                ]
	            },
	            itemStyle:{
	            	color:ops.color2
	            },
	          
	        }
    	]
	};
	myChart.setOption(option);
}
function _left_right_column(ops)
{
	
}




function _echarts_radar(ops){
	var myChart = echarts.init(ops.dom);
	option = {
    title: {
        text: ops.title,
		 left:"center"
    },
    tooltip: {},
    legend: {
        data: [/*'预算分配（Allocated Budget）', '实际开销（Actual Spending）'*/],
		top:30
    },
    radar: {
        // shape: 'circle',
        name: {
            textStyle: {
                color: '#fff',
                backgroundColor: '#999',
                borderRadius: 3,
                padding: [3, 5]
           }
        },
        indicator:ops.indicator
    },
    series: [{
        name: ops.sort,
        type: 'radar',
        // areaStyle: {normal: {}},
        data : [
            {
                value : ops.dataArr,
                name : ops.sort,
				 itemStyle:{
			                	borderColor:"#000",
			                	color:"#000",
			                	borderWidth:5,
			                },
			                areaStyle: {
			                	color:"rgba(0,0,0,0.3)",
			                       
			                    }
            }
        ]
    }]
};
myChart.setOption(option);
}

function _echarts_double_line_bar2(ops){
	alert(ops.titleArr)
	
	var myChart = echarts.init(ops.dom); 
	option = 
	{
	    color: ['#003366', '#006699', '#4cabce', '#e5323e'],
	    title: {
        text: ops.title,
		 left:"center",
		 
         },
	    tooltip: {
	        trigger: 'axis',
	        axisPointer: {
	            type: 'shadow'
	        }
	    },
	    legend: {
	        data: ops.sort,
	        top:30,
	    },
	    toolbox: {
	        show: true,
	        orient: 'vertical',
	        left: 'right',
	        top: 'center',
	        feature: {
	            mark: {show: true},
	            dataView: {show: true, readOnly: false},
	            magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
	            restore: {show: true},
	            saveAsImage: {show: true}
	        }
	    },
	    calculable: true,
	    
	    grid: {  y2: 200  },  
	    xAxis: [
	        {
	            type: 'category',
	            axisTick: {show: false},
	            data: ops.titleArr,
	             axisLabel:{  
                         interval:0,//横轴信息全部显示  
                         rotate:45,//-30度角倾斜显示  
                    }  
                
	        }
	    ],
	    yAxis: [
	        {
	            type: 'value'
	        }
	    ],
	    series: [
	        {
	        	
	            name: ops.sort[0],
	            type:ops.type2,
	            data:ops.dataArr2,
	            color:ops.color2,
	            barWidth:ops.barWidth,
	            barGap: 0,
	           
	        },
	        {
	            name: ops.sort[1],
	            type:ops.type1,
	            color:ops.color1,
	            data:ops.dataArr1,
	            barWidth:ops.barWidth,
	           
	        }
	    ]
	};
	myChart.setOption(option);
}
