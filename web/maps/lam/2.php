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
body{
	font-size:75%;
	font-family:Arial, Verdana, sans-serif;
	background:#fff;
	color:#333;
}

#map2 {
	width:700px;
	height: 335px;
}

.map {
  margin-top: -335px;
}

.row1 {
	margin:65px 15px 10px 85px;
	width:600px;
	float:left;
}

.row2 {
	margin:18px 5px 10px 60px;
	width:600px;
	float:left;
}

.left2 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-top:38px;
}

.right2 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-right: 8px;
	margin-top:38px;
}

.left3 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-top:24px;
	margin-left:4px;
}

.right3 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-right: 18px;
	margin-top:24px;
}

.single3 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-top:24px;
	margin-right:6px;
}

.vertical2 {
  margin-top:0px;
  margin-bottom:24px;
}

.horizontal1 {
  margin-left:8px;
}

.skinny {
  margin-right:5.5px;
}

.aisle {
  display:block;
  float:left;
  height:5px;
  width:28px;
}

.left4 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 62px;
	width: 6px;
	margin-left:4px;
}

.right4 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 62px;
	width: 6px;
	margin-right: 18px;
}

</style>
</head>
<body>
  <img src="/map-it/images/lam/lam-2.jpg" alt="Lamont 2" class="print-map" />
        <div id="map2" class="map">
          <div class="row1">
       			<span id="row3" class="right3 vertical2"></span>
       			<span id="row5" class="left3"></span><span id="row6" class="right3"></span>
       			<span id="row7" class="left3"></span><span id="row8" class="right3"></span>
       			<span id="row9" class="left3"></span><span id="row10" class="right3"></span>
       			<span id="row11" class="left4"></span><span id="row12" class="right4"></span>
       			<span id="row13" class="left3"></span><span id="row14" class="right3"></span>
       			<span id="row15" class="left3 top"></span><span id="row16" class="right3 top"></span>
       			<span id="row17" class="left3 top"></span><span id="row18" class="right3 top"></span>
       			<span id="row19" class="left3 top"></span><span id="row20" class="right3 top"></span>
       			<span id="row21" class="left3"></span><span id="row22" class="right3"></span>
       			<span id="row23" class="left4"></span><span id="row24" class="right4"></span>
       			<span id="row25" class="left3 horizontal1"></span><span id="row26" class="right3"></span>
       			<span id="row27" class="left3 horizontal1"></span><span id="row28" class="right3"></span>
       			<span id="row29" class="left3 horizontal1"></span><span id="row30" class="single3"></span>
            <span id="row30" class="right3 vertical2"></span>
       		</div>
       		<div class="clear"></div>
       		<div class="row2">
       			<span id="row1" class="left2"></span><span id="row2" class="right2"></span>
       			<span id="row3" class="left2"></span><span id="row4" class="right2"></span>
       			<span id="row5" class="left2"></span><span id="row6" class="right2"></span>
       			<span id="row7" class="left3"></span><span id="row8" class="right3 skinny"></span>
       			<span id="row9" class="left3"></span><span id="row10" class="right3 skinny"></span>
       			<span id="row11" class="left3"></span><span id="row12" class="right3 skinny"></span>
       			<span id="row13" class="left3"></span><span id="row14" class="right3 skinny"></span>
       			<span id="row15" class="left3 top"></span><span id="row16" class="right3 skinny"></span>
       			<span id="row17" class="left3 top"></span><span id="row18" class="right3 skinny"></span>
       			<span id="row19" class="left3 top"></span><span id="row20" class="right3 skinny"></span>
       			<span id="row21" class="left3"></span><span id="row22" class="right3 skinny"></span>
       			<span id="row23" class="left3"></span><span id="row24" class="right3 skinny"></span>
       			<span id="row25" class="left3"></span><span id="row26" class="right3 skinny"></span>
       			<span id="row27" class="left3"></span><span id="row28" class="right3 skinny"></span>
       			<span id="row29" class="left3"></span><span id="row30" class="right3 skinny"></span>
       			<span id="row27" class="left3"></span><span id="row28" class="right3 skinny"></span>
       			<span id="row29" class="left3"></span><span id="row30" class="right3 skinny"></span>
       			<span class="aisle"></span>
       			<span id="row29" class="left3"></span><span id="row30" class="right3 skinny"></span>
       			<span id="row27" class="left3"></span><span id="row28" class="right3 skinny"></span>
       			<span id="row29" class="left3"></span><span id="row30" class="right3 skinny"></span>
       			<span id="row1" class="left2"></span><span id="row2" class="right2"></span>
       			<span id="row3" class="left2"></span><span id="row4" class="right2"></span>
       			<span id="row5" class="left2"></span><span id="row6" class="right2"></span>
       		</div>
       	</div>  
</body>