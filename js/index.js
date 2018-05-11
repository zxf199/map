$(function(){
  	// 百度地图API功能
	var mp = new BMap.Map("allmap");
	mp.centerAndZoom(new BMap.Point(113.797104, 27.880169), 12);
	mp.enableScrollWheelZoom();
  var positions = $.point,markers = [];
  setMarker(positions,mp,markers);
  $("#search").click(function(){
    var key = $("#keyWord").val(),points = [],isExist=[];
    mp.clearOverlays();
    if(key){
      for(var i=0;i<positions.length;i++){
        var content = positions[i].content;
        if(content.indexOf(key)!=-1){
          points.push(positions[i]);
        }
      }
      setMarker(points,mp,isExist);
    }else{
      setMarker(positions,mp,markers);
    }
  });
  mp.addEventListener('touchstart',function(e){
    var element = e.domEvent.srcElement;
    element.click();
  });
  $("#detail").on("click",".detail-title",function(){
    $("#intro").animate({bottom:"100%"});
    $(".detail-tab li:first-child").addClass("active").siblings().removeClass("active");
    $("#tabs1").show();
    $("#tabs2").hide();
  });
  $(".pop-title").on("click",".right",function(){
    $("#intro").animate({bottom:"0"});
  });
  $(".detail-tab").on("click","li",function(){
    var id = $(this).data("id");
    if(id == "tabs1"){
      $("#tabs1").show();
      $("#tabs2").hide();
    }else if(id=="tabs2"){
      $("#tabs2").show();
      $("#tabs1").hide();
    }else{
      var des = $(this).data("posit").split(',');
      var lng = des[0],lat = des[1];
      var geolocation = new BMap.Geolocation();
      geolocation.getCurrentPosition(function(r){
        // $.hidePreloader();
        var gps = {};
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
          gps.lng=r.point.lng;
          gps.lat=r.point.lat;
        }
        else {
          alert('failed'+this.getStatus());
        }  
        if(gps.lng>0){}else{return false;}
          //取用户定位
          // url="http://map.baidu.com/mobile/webapp/search/search/foo=bar&qt=nav&sn=1$$$$"+gps.lng*111500+","+gps.lat*111500+"$$$$0$$$$&en=1$$$$12672648.46,3138687.313$$$$0$$$$&version=3&from=place&vt=map";
          url="http://api.map.baidu.com/direction?origin=name:起点|latlng:"+gps.lat+","+gps.lng+"&destination=name:目的地|latlng:"+lat+","+lng+"&mode=driving&region=萍乡&output=html&coord_type=bd09ll";
          location.href=url;      
      },{enableHighAccuracy: true});
    }
    $(this).addClass("active").siblings().removeClass("active");
  });
});
function setMarker(positions,mp,markers){
  for(var i=0;i<positions.length;i++){
    var myCompOverlay = new ComplexCustomOverlay(new BMap.Point(positions[i].position[0],positions[i].position[1]), positions[i].content,mp,positions[i]);  
    mp.addOverlay(myCompOverlay);
    var point = new BMap.Point(positions[i].position[0],positions[i].position[1]);
    markers.push(point);
    var myIcon = new BMap.Icon("img/"+positions[i].icon, new BMap.Size(36,36));
    var marker = new BMap.Marker(point,{icon:myIcon});
    mp.addOverlay(marker);
  }
  mp.setViewport(markers);
}
// 复杂的自定义覆盖物
function ComplexCustomOverlay(point, text,mp,posit){
  this._point = point;
  this._text = text;
  this._mp = mp;
  this._posit = posit;
}
ComplexCustomOverlay.prototype = new BMap.Overlay();
ComplexCustomOverlay.prototype.initialize = function(map){
  this._map = map;
  var div = this._div = document.createElement("div");
  div.style.position = "absolute";
  div.style.zIndex = BMap.Overlay.getZIndex(this._point.lat);
  div.style.backgroundColor = "#EE5D5B";
  div.style.border = "1px solid #BC3B3A";
  div.style.color = "white";
  div.style.height = "18px";
  div.style.padding = "2px";
  div.style.lineHeight = "18px";
  div.style.whiteSpace = "nowrap";
  div.style.MozUserSelect = "none";
  div.style.fontSize = "12px";
  var span = this._span = document.createElement("span");
  div.appendChild(span);
  span.appendChild(document.createTextNode(this._text));     
  var that = this;

  var arrow = this._arrow = document.createElement("div");
  arrow.style.background = "url(http://map.baidu.com/fwmap/upload/r/map/fwmap/static/house/images/label.png) no-repeat";
  arrow.style.position = "absolute";
  arrow.style.width = "11px";
  arrow.style.height = "9px";
  arrow.style.top = "21px";
  arrow.style.left = "8px";
  arrow.style.overflow = "hidden";
  div.appendChild(arrow);
  this._mp.getPanes().labelPane.appendChild(div);
  span.click = function () {
    $.ajax({
      type: "get",
      url: "test.php",
      data: { id: that._posit.id},
      success: function (data) {
        var data = JSON.parse(data)
        $("#detail").show();
        $(".detail-title").html(that._text + '<span class="iconfont icon-xiangxiajiantou right">');
        $("#tabs1").html(data.intro + "<p  class='color'>版权所有 ©技术支持：上栗马管家&nbsp; &nbsp;</p>");
        $("#navigate").attr("data-posit", that._posit.position);
        var srcs = data.src;
        if (srcs && srcs.length) {
          for (var i = 0, html = ""; i < srcs.length; i++) {
            html += "<img src='img/" + srcs[i] + "'>"
          }
        }
        $("#tabs2").html(html);
        $(".pop-title").html(that._text + '<span class="iconfont icon-xiangxiajiantou right">');
      }
    })
  };
  span.onclick = function () {
    $.ajax({
      type: "get",
      url: "test.php",
      data: { id: that._posit.id },
      success: function (data) {
        var data = JSON.parse(data)
        $("#detail").show();
        $(".detail-title").html(that._text + '<span class="iconfont icon-xiangxiajiantou right">');
        $("#tabs1").html(data.intro + "<p class='color'>版权所有 ©技术支持：上栗马管家&nbsp; &nbsp;</p>");
        $("#navigate").attr("data-posit", that._posit.position);
        var srcs = data.src;
        if (srcs && srcs.length) {
          for (var i = 0, html = ""; i < srcs.length; i++) {
            html += "<img src='img/" + srcs[i] + "'>"
          }
        }
        $("#tabs2").html(html);
        $(".pop-title").html(that._text + '<span class="iconfont icon-xiangxiajiantou right">');
      }
    })
  };
  
  return div;
};
ComplexCustomOverlay.prototype.draw = function(){
  var map = this._map;
  var pixel = map.pointToOverlayPixel(this._point);
  this._div.style.left = pixel.x - parseInt(this._arrow.style.left) + "px";
  this._div.style.top  = pixel.y - 45 + "px";
};
