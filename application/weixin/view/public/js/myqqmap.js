function myMapInit()
{
	document.write(`<style>
	
	.mapsearch{ background: #fff; width:auto; height: 40px; overflow: hidden;border: 1px solid #ddd; margin-top: 2PX;}
		.mapsearch input{ text-indent:10px; display: inline-block; height: 38px; line-height: 38px; width:200px; border: none; }
		.mapsearch a{ width:70px; height: 38px; line-height: 38px;; display: inline-block; background: red; color: #fff; text-align: center;}
	
	</style>`);
	var latlng=new qq.maps.LatLng(mymap.lat, mymap.lng);
		mymap.map = new qq.maps.Map(
		document.getElementById(mymap.conId),
			{
			center: latlng,
			zoom: mymap.zoom,
			draggable: true,
			scrollwheel: false,
			disableDoubleClickZoom: false
			}
	);
	
	var marker = new qq.maps.Marker({
                        map: mymap.map,
                        position: latlng
                    });
                    mymap.markerArray.push(marker)
}
myMapInit()
var geocoder = new qq.maps.Geocoder();

 function codeAddress()
 {
 	clearOverlays()
                var address = document.getElementById("address").value;
                
                geocoder.getLocation(address);
               
                geocoder.setComplete(function(result) {
                    mymap.map.setCenter(result.detail.location);
                    console.log(result.detail.location)
                    
                   var marker = new qq.maps.Marker({
                        map: mymap.map,
                        position: result.detail.location
                    });
                    mymap.markerArray.push(marker)
                    if(mymap.latVal)
					{
						document.getElementById(mymap.latVal).value=result.detail.location.lat
						document.getElementById(mymap.lngVal).value=result.detail.location.lng;
					}
                    
                    
                    //点击Marker会弹出反查结果
                   /* qq.maps.event.addListener(marker, 'click', function() {
                        alert("坐标地址为： " + result.detail.location);
                    });*/
                });
                geocoder.setError(function() {
                    alert("出错了，请输入正确的地址！！！");
                });
}

var listenr=qq.maps.event.addListener(
	mymap.map,
	'click',
	function(e){
		//alert("click map lat="+e.latLng.getLat()+"lng="+e.latLng.getLng())
		if(mymap.latVal)
		{
			document.getElementById(mymap.latVal).value=e.latLng.getLat()
			document.getElementById(mymap.lngVal).value=e.latLng.getLng()
		}
		addPoint(e.latLng.getLat(),e.latLng.getLng())
	}
)
function addPoint(x,y)
{
	clearOverlays()
	var latlng=new qq.maps.LatLng(x, y);
		var markerObj=new qq.maps.Marker
		({
			position:latlng,
			map:mymap.map,
			
	  })

		 markerObj.setAnimation(qq.maps.MarkerAnimation.DOWN);
		
		 mymap.markerArray.push(markerObj);
		/* var anchor = new qq.maps.Point(10, 10),
         size = new qq.maps.Size(30, 30),
         sizee = new qq.maps.Size(20, 20),
         origin = new qq.maps.Point(0,0),
         markerIcon = new qq.maps.MarkerImage(
		     "../images/1.png",
		     size,
		     origin,
		     anchor,sizee
		   );
		markerObj.setIcon(markerIcon);*/	
}
function clearOverlays() {
    if (mymap.markerArray) {
        for (i in mymap.markerArray) {
            mymap.markerArray[i].setMap(null);
        }
    }
}
var scale=new qq.maps.ScaleControl(
	{
		align:qq.maps.ALIGN.TOP_LEFT,
		margin:qq.maps.Size(85,15),
		map:mymap.map
	}
)
// 移除控制
//scale.setMap(null)

/*var myscale=new qq.maps.Control({
	   content:`
			     <div class="mapsearch">
			        <input type="text" id="address"/>
			        <a onclick="codeAddress()">搜索</a>
			     </div>
			   `,
	   align:qq.maps.ALIGN.TOP_RIGHT,

		map:mymap.map
})*/


     /*var anchor = new qq.maps.Point(10, 10),
         size = new qq.maps.Size(30, 30),
         
        sizee = new qq.maps.Size(20, 20),
         origin = new qq.maps.Point(0,0),
         markerIcon = new qq.maps.MarkerImage(
		     "../images/1.png",
		     size,
		     origin,
		     anchor,sizee
		    
		   );*/
for(var i=0;i<mymap.jsonArr.length;i++)
{
	var latlng=new qq.maps.LatLng(mymap.jsonArr[i].lat, mymap.jsonArr[i].lng);
	var markerObj=new qq.maps.Marker
	({
		position:latlng,
		map:mymap.map,
		id:mymap.jsonArr[i].id,
   })
	mymap.markerArray.push(markerObj)
	/*markerObj.setIcon(markerIcon);
	var info=new qq.maps.InfoWindow({
		map:map
	})*/
	/*qq.maps.event.addListener(
	markerObj,
	'click',
	function(e){
		
		var content=`
		              <div style='width:300px'>你点击了`+e.target.id+`.</div>
		              <a href="http://www.baidu.com">
		               <img src="../images/logo.jpg" />
		              </a>
		            `;
		
		map.panTo(new qq.maps.LatLng(e.latLng.getLat(),e.latLng.getLng()));
		info.open();
		info.setContent(content);
		info.setPosition(new qq.maps.LatLng(e.latLng.getLat(),e.latLng.getLng()))
		
	})*/
	
	
}