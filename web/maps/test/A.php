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

#mapA {
	width:700px;
	height: 335px;
}

.map {
  margin-top: -335px;
}

.row1 {
	margin:67px 0px 10px 88px;
	width:600px;
	float:left;
}

.row2 {
	margin:12px 0px 10px 65px;
	width:610px;
	float:left;
}

.row3 {
	margin:25px 15px 10px 553px;
	width:100px;
	float:left;
}

.left1 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 12px;
	width: 6px;
	margin-left:3px;
}

.right1 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 12px;
	width: 6px;
	margin-right: 6px;
}

.left2 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-top:40px;
}

.right2 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-right: 6px;
	margin-top:40px;
}

.left3 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-top:26px;
}

.right3 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-right: 20px;
	margin-top:26px;
}

.horizontal1 {
  margin-left:5px;
}

.skinny {
  margin-right:10px;
}

.down {
  margin-top:40px;
}

.aisle {
  float:left;
  height:5px;
  width:12px;
  background:none;
}

.left5 {
	display:block;
	float:left;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 65px;
	width: 6px;
}

.right5 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 65px;
	width: 6px;
	margin-right: 22px;
}

.single5 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 65px;
	width: 6px;
	margin-right:10px;
}

.vertical2 {
  margin-top:0px;
  margin-bottom:24px;
}

</style>
</head>
<body>
  <img src="/map-it/images/lam/lam-A.jpg" alt="Lamont A" class="print-map" />
        <div id="mapA" class="map">
          <div class="row1">
       			<span id="row82" class="right5"></span>
       			<span id="row81" class="left5"></span><span id="row80" class="right5"></span>
       			<span id="row79" class="left5"></span><span id="row78" class="right5"></span>
       			<span id="row77" class="left5"></span><span id="row76" class="right5"></span>
       			<span id="row75" class="left5"></span><span id="row74" class="right5"></span>
       			<span id="row73" class="left5"></span><span id="row72" class="right5"></span>
       			<span id="row71" class="left5"></span><span id="row70" class="right5"></span>
       			<span id="row69" class="left5"></span><span id="row68" class="right5"></span>
       			<span id="row67" class="left5"></span><span id="row66" class="right5"></span>
       			<span id="row65" class="left5"></span><span id="row64" class="right5"></span>
       			<span id="row63" class="left3"></span><span id="row62" class="right3"></span>
       			<span id="row61" class="left3 horizontal1"></span><span id="row60" class="right3"></span>
       			<span id="row59" class="left3 horizontal1"></span><span id="row58" class="right3"></span>
       			<span id="row57" class="left5 horizontal1"></span><span id="row56" class="single5"></span>
            <span id="row55" class="single5"></span>
       		</div>
       		<div class="clear"></div>
       		<div class="row2">
       			<span id="row9" class="left2"></span><span id="row10" class="right2"></span>
       			<span id="row11" class="left2"></span><span id="row12" class="right2"></span>
       			<span id="row13" class="left3"></span><span id="row14" class="right3 skinny"></span>
       			<span id="row15" class="left3"></span><span id="row16" class="right3 skinny"></span>
       			<span id="row17" class="left3"></span><span id="row18" class="right3 skinny"></span>
       			<span id="row19" class="left3"></span><span id="row20" class="right3 skinny"></span>
       			<span id="row21" class="left3"></span><span id="row22" class="right3 skinny"></span>
       			<span id="row23" class="left3 top"></span><span id="row24" class="right3 skinny"></span>
       			<span id="row25" class="left3 top"></span><span id="row26" class="right3 skinny"></span>
       			<span id="row27" class="left3 top"></span><span id="row28" class="right3 skinny"></span>
       			<span id="row29" class="left3"></span><span id="row30" class="right3 skinny"></span>
       			<span id="row31" class="left3"></span><span id="row32" class="right3 skinny"></span>
       			<span id="row33" class="left3"></span><span id="row34" class="right3 skinny"></span>
       			<span id="row35" class="left3"></span><span id="row36" class="right3 skinny"></span>
       			<span id="row37" class="left3"></span><span id="row38" class="right3 skinny"></span>
       			<span id="row39" class="left3"></span><span id="row40" class="right3 skinny"></span>
       			<span id="row41" class="left3"></span><span id="row42" class="right3 skinny"></span>
       			<div class="aisle"></div>
       			<span id="row43" class="left3"></span><span id="row44" class="right3 skinny"></span>
       			<div class="aisle"></div>
       			<span id="row45" class="left3"></span><span id="row46" class="right3 skinny"></span>
       			<span id="row47" class="left3"></span><span id="row48" class="right3 skinny"></span>
       			<span id="row49" class="left2"></span><span id="row50" class="right2"></span>
       			<span id="row51" class="left1 down"></span><span id="row52" class="right1 down"></span>
       			<span id="row53" class="left2"></span><span id="row54" class="right2"></span>
       		</div>
       		<div class="clear"></div>
       		<div class="row3">
       		  <span id="row8" class="left1"></span><span id="row7" class="right1"></span>
       		  <span id="row6" class="left1"></span><span id="row5" class="right1"></span>
       		  <span id="row4" class="left1"></span><span id="row3" class="right1"></span>
       		  <span id="row2" class="left1"></span><span id="row1" class="right1"></span>
       		</div>
       	</div>  
</body>