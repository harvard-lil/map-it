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
#map6W {
	width:730px;
	height: 480px;
}

.map {
  margin-top:-480px;
}

#bottomfull {
	margin:0px 0px 50px 24px;
	float:left;
}

#rightcolumntop {
	margin:30px 0px 10px 600px;
	float:left;
	width:100px;
}

.left3 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-bottom:156px;
}

.right3 {
	border: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-right: 5px;
	margin-bottom:156px;
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

.left6 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-top:12px;
}

.right6 {
	border: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-right: 5px;
	margin-top:12px;
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

.left8 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-top:12px;
}

.right8 {
	border: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-right: 5px;
	margin-top:12px;
}

.left10 {
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 120px;
	width: 5px;
	margin-bottom:72px;
}

.right10 {
	border: 1px solid #6a8012;
	height: 120px;
	width: 5px;
	margin-right: 5px;
	margin-bottom:72px;
}

.top {
	margin-bottom:106px;
}

.above {
	margin-bottom:108px;
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
  <img src="/map-it/images/wid/wid-6W.jpg" alt="Widener 6W" class="print-map" />
        <div id="map6W" class="map">
        	<div id="rightcolumntop">
       			<span id="row1" class="top6"></span><span id="row2" class="bottom6 tall-space"></span>
       			<span id="row3" class="top6"></span><span id="row4" class="bottom6 tall-space"></span>
       			<span id="row5" class="top6"></span><span id="row6" class="bottom6 tall-space"></span>
       			<span id="row7" class="top6"></span><span id="row8" class="bottom6 tall-space"></span>
       			<span id="row9" class="top6"></span><span id="row10" class="bottom6 tall-space"></span>
       			<span id="row11" class="top6"></span><span id="row12" class="bottom6 tall-space"></span>
       			<span id="row13" class="top6"></span><span id="row14" class="bottom6 tall-space"></span>
       			<span id="row15" class="top6"></span><span id="row16" class="bottom6 tall-space"></span>
       			<span id="row17" class="top6"></span><span id="row18" class="bottom6 tall-space"></span>
       			<span id="row19" class="top6"></span><span id="row20" class="bottom6 tall-space"></span>
       			<span id="row21" class="top6"></span><span id="row22" class="bottom6 tall-space"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="bottomfull">
       			<span id="row96" class="left8"></span><span id="row95" class="right8"></span>
       			<span id="row94" class="left8"></span><span id="row93" class="right8"></span>
       			<span id="row92" class="left8"></span><span id="row91" class="right8"></span>
       			<span id="row90" class="left8"></span><span id="row89" class="right8"></span>
       			<span id="row88" class="left8"></span><span id="row87" class="right8"></span>
       			<span id="row86" class="left8"></span><span id="row85" class="right8"></span>
       			<span id="row84" class="left8"></span><span id="row83" class="right8"></span>
       			<span id="row82" class="left8"></span><span id="row81" class="right8"></span>
       			<span id="row80" class="left8"></span><span id="row79" class="right8"></span>
       			<span id="row78" class="left8"></span><span id="row77" class="right8"></span>
       			<span id="row76" class="left8"></span><span id="row75" class="right8"></span>
       			<span id="row74" class="left8"></span><span id="row73" class="right8"></span>
       			<span id="row72" class="left8"></span><span id="row71" class="right8"></span>
       			<span id="row70" class="left4"></span><span id="row69" class="right4"></span>
       			<span id="row68" class="left4"></span><span id="row67" class="right4"></span>
       			<span id="row66" class="left4"></span><span id="row65" class="right4"></span>
       			<span id="row64" class="left8"></span><span id="row63" class="right8"></span>
       			<span id="row62" class="left8"></span><span id="row61" class="right8"></span>
       			<span id="row60" class="left8"></span><span id="row59" class="right8"></span>
       			<span id="row58" class="left8"></span><span id="row57" class="right8"></span>
       			<span id="row56" class="left8"></span><span id="row55" class="right8"></span>
       			<span id="row54" class="left8"></span><span id="row53" class="right8"></span>
       			<span id="row52" class="left8"></span><span id="row51" class="right8"></span>
       			<span id="row50" class="left8"></span><span id="row49" class="right8"></span>
       			<span id="row48" class="left8"></span><span id="row47" class="right8"></span>
       			<span id="row46" class="left8"></span><span id="row45" class="right8"></span>
       			<span id="row44" class="left6 top"></span><span id="row43" class="right6 top"></span>
       			<span id="row42" class="left6 top"></span><span id="row41" class="right6 top"></span>
       			<span id="row40" class="left7 above"></span><span id="row39" class="right7 above"></span>
       			<span id="row38" class="left7 above"></span><span id="row37" class="right7 above"></span>
       			<span id="row36" class="left10"></span><span id="row35" class="right10"></span>
       			<span id="row34" class="left10"></span><span id="row33" class="right10"></span>
       			<span id="row32" class="left7 above"></span><span id="row31" class="right7 above"></span>
       			<span id="row30" class="left7 above"></span><span id="row29" class="right7 above"></span>
       			<span id="row28" class="left7 above"></span><span id="row27" class="right7 above"></span>
       			<span id="row26" class="left7 above"></span><span id="row25" class="right7 above"></span>
       			<span id="row24" class="left3"></span><span id="row23" class="right3"></span>
       		</div>
       	</div>  
</body>
