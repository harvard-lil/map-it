<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <title><?php echo "Map for $library $floor $row" ?></title> 
  
  <link rel="stylesheet" type="text/css" href="/map-it/css/map.css" />
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
  <script>
  var row = '<?php echo $row; ?>';
  </script>
  <script src="/map-it/js/highlight.js"></script>
<style>
#mapAW {
	width:710px;
	height: 415px;
}

.map {
  margin-top:-415px;
}

#bottomfull {
	margin:0px 0px 82px 124px;
	float:left;
}

#rightcolumntop {
	float:left;
	margin:66px 0px 10px 3px;
	width:100px;
}

#leftcolumntop {
	float:left;
	margin:138px 0px 10px 418px;
	width:75px;
}

.left3 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 36px;
	width: 5px;
}

.right3 {
	border: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-right: 5px;
}

.left4 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-top:60px;
}

.right4 {
	border: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-right: 5px;
	margin-top:60px;
}

.left7 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 84px;
	width: 5px;
}

.right7 {
	border: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin-right: 5px;
}

.left9 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 108px;
	width: 5px;
}

.right9 {
	border: 1px solid #6a8012;
	height: 108px;
	width: 5px;
	margin-right: 5px;
}

.closed {
	border: 1px solid #6a8012;
}

.top5 {
	border: 1px solid #6a8012;
	height: 5px;
	width: 60px;
}

.bottom5 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 5px;
	width: 60px;
}

.top6 {
	border: 1px solid #6a8012;
	height: 5px;
	width: 72px;
}

.bottom6 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 5px;
	width: 72px;
}

.tall-space {
	margin-bottom: 11px;
}
</style>
</head>
<body>
  <img src="/map-it/images/wid/wid-AW.jpg" alt="Widener AW" class="print-map" />
        <div id="mapAW" class="map">
        	<div id="leftcolumntop">
       			<span id="row1" class="top5"></span><span id="row2" class="bottom5"></span>
       			<span id="row3" class="top5"></span><span id="row4" class="bottom5"></span>
       			<span id="row5" class="top5"></span><span id="row6" class="bottom5"></span>
       			<span id="row7" class="top5"></span><span id="row8" class="bottom5"></span>
       			<span id="row9" class="top5"></span><span id="row10" class="bottom5"></span>
       		</div>
        	<div id="rightcolumntop">
       			<span id="row1" class="top6"></span><span id="row2" class="bottom6"></span>
       			<span id="row3" class="top6"></span><span id="row4" class="bottom6"></span>
       			<span id="row5" class="top6"></span><span id="row6" class="bottom6"></span>
       			<span id="row7" class="top6"></span><span id="row8" class="bottom6"></span>
       			<span id="row9" class="top6"></span><span id="row10" class="bottom6"></span>
       			<span id="row11" class="top6"></span><span id="row12" class="bottom6"></span>
       			<span id="row13" class="top6"></span><span id="row14" class="bottom6"></span>
       			<span id="row15" class="top6"></span><span id="row16" class="bottom6"></span>
       			<span id="row17" class="top6"></span><span id="row18" class="bottom6"></span>
       			<span id="row19" class="top6"></span><span id="row20" class="bottom6"></span>
       			<span id="row21" class="top6"></span><span id="row22" class="bottom6"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="bottomfull">
       			<span id="row11" class="left9"></span><span id="row85" class="right9"></span>
       			<span id="row27" class="left4"></span><span id="row69" class="right4"></span>
       			<span id="row29" class="left4"></span><span id="row67" class="right4"></span>
       			<span id="row31" class="left4"></span><span id="row65" class="right4"></span>
       			<span id="row13" class="left9"></span><span id="row83" class="right9"></span>
       			<span id="row15" class="left9"></span><span id="row81" class="right9"></span> 			
       			<span id="row17" class="left9"></span><span id="row79" class="right9"></span>
       			<span id="row19" class="left9"></span><span id="row77" class="right9"></span>
       			<span id="row21" class="left9"></span><span id="row75" class="right9"></span>
       			<span id="row23" class="left9"></span><span id="row73" class="right9"></span>
       			<span id="row25" class="left9"></span><span id="row71" class="right9"></span>
       			<span id="row33" class="left9"></span><span id="row63" class="right9"></span>
       			<span id="row35" class="left9"></span><span id="row61" class="right9"></span>
       			<span id="row37" class="left9"></span><span id="row59" class="right9"></span>
       			<span id="row53" class="left7 top"></span><span id="row43" class="right7 top"></span>
       			<span id="row55" class="left7 top"></span><span id="row41" class="right7 top"></span>
       			<span id="row57" class="left7 top"></span><span id="row39" class="right7 top"></span>
       			<span id="row59" class="left7 top"></span><span id="row37" class="right7 top"></span>
       			<span id="row36" class="left7 top"></span><span id="row35" class="right7 top"></span>
       			<span id="row34" class="left7 top"></span><span id="row33" class="right7 top"></span>
       			<span id="row32" class="left7 top"></span><span id="row31" class="right7 top"></span>
       			<span id="row30" class="left7 top"></span><span id="row29" class="right7 top"></span>
       			<span id="row28" class="left7 top"></span><span id="row27" class="right7 top"></span>
       			<span id="row26" class="left7 top"></span><span id="row25" class="right7 top"></span>
       			<span id="row24" class="left3 above"></span><span id="row23" class="right3 above"></span>
       		</div>
       	</div>  
</body>
