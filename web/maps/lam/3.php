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

#map3 {
	width:900px;
	height: 565px;
}

.print-map {
  position:relative;
  display:inline;
  z-index:2;
}

.map {
  position:relative;
  z-index:3;
  margin-top:-565px;
}

.clear {
  clear:both;
}

.column1 {
	margin:188px 0px 10px 120px;
	width:65px;
	float:left;
}

.column2 {
	margin: 188px 0px 10px 65px;
	width:76px;
	float:left;
}

.column3 {
	margin:202px 0px 10px 0px;
	width:80px;
	float:left;
}

.column4 {
	margin:188px 0px 10px 0px;
	width:68px;
	float:left;
}

.column5 {
	margin:186px 0px 10px 75px;
	width:78px;
	float:left;
}

.farnsworth-top {
	margin:265px 0px 10px 89px;
	width:130px;
	float:left;
}

.farnsworth-middle {
	margin:0px 0px 0px 146px;
	width:75px;
	float:left;
}

.poetry {
	margin:0px 0px 10px 367px;
	width:274px;
	float:left;
}

.farnsworth-bottom {
	margin:15px 0px 10px 0px;
	width:210px;
	float:left;
}

.horizontal1 {
  margin-left:12px;
}

.horizontal4 {
  margin-left:55px;
}

.horizontal5 {
  margin-left:69px;
}

.vertical2 {
  margin-top:26px;
}

.top3 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 5px;
	width: 45px;
	margin-right:170px;
}

.bottom3 {
	display:block;
	float:left;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 45px;
	margin-right:170px;
}

.top4 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 60px;
	float: left;
}

.bottom4 {
	display:block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 60px;
	margin-bottom:1px;
	float:left;
}

.top5 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 72px;
	float: left;
}

.bottom5 {
	display:block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 72px;
	margin-bottom:1px;
	float: left;
}

.left3 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	float:left;
}

.right3 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	float:left;
}

.hall-left3 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	float:left;
}

.hall-right3 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	margin-left:64px;
	float:left;
}

.left5 {
  display:block;
	border: 1px solid #6a8012;
	height: 80px;
	width: 5px;
	float:left;
}

.right5 {
  display:block;
	border: 1px solid #6a8012;
	height: 80px;
	width: 5px;
	margin-left:64px;
	float:left;
}

.left-wall-1 {
  display:block;
	border: 1px solid #6a8012;
	height: 12px;
	width: 5px;
	margin-top:78px;
	float:left;
}

.floor1 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 20px;
	float:left;
	margin-left:15px;
	margin-top:45px;
}

.top-wall-2 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	margin-left:100px;
	float:left;
}

.bottom-wall-1 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 12px;
	float:left;
	margin-left:25px;
	margin-top:140px;
}

.top-wall-4 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 70px;
	float:left;
}

.right-wall-3 {
  display:block;
	border: 1px solid #6a8012;
	height: 60px;
	width: 5px;
	float:left;
}

.right-wall-bottom3 {
  display:block;
	border: 1px solid #6a8012;
	height: 60px;
	width: 5px;
	float:left;
	margin-left:72px;
}

.right-wall-2 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 30px;
	float:left;
	margin-left:45px;
}

.left-wall-2 {
  display:block;
	border: 1px solid #6a8012;
	height: 24px;
	width: 5px;
	margin-top:32px;
	float:left;
}

.top-wall-1 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 8px;
	float:left;
}

.top-wall-5 {
	display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 70px;
	float:left;
	margin-left:5px;
}

.top-left2 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	float:left;
}

.top-top4 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 5px;
	width: 55px;
}

.top-right3 {
  display:block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	float:left;
	margin-left:52px;
}

.bottom-left2 {
  display:block;
	border: 1px solid #6a8012;
	height: 18px;
	width: 5px;
	float:left;
}

.bottom-left4 {
  display:block;
	border: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-top:73px;
}

.bottom-bottom2 {
  display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 24px;
	float:left;
	margin-left:58px;
	margin-top:3px;
	margin-right:15px;
}

.bottom-bottom1 {
  display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 8px;
	float:left;
	margin-top:3px;
}

.bottom-bottom-right1 {
  display:block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 8px;
	float:left;
	margin-top:3px;
	margin-left:55px;
}

.bottom-right2 {
  display:block;
	border: 1px solid #6a8012;
	height: 25px;
	width: 5px;
	float:left;
	margin-top:-20px;
}

.bottom-right4 {
  display:block;
	border: 1px solid #6a8012;
	height: 45px;
	width: 5px;
	float:left;
	margin-top:-50px;
}

</style>
</head>
<body>
 <img src="/map-it/images/lam/lam-3.jpg" alt="Lamont 3" class="print-map" />
        <div id="map3" class="map">
          <div class="column1">
       			<span id="row11" class="top4"></span><span id="row10" class="bottom4"></span>
       			<span id="row9" class="left3"></span>
       			<span id="row8" class="top4"></span><span id="row7" class="bottom4"></span>
       			<span id="row6" class="left3"></span>
       			<span id="row5" class="top4"></span><span id="row4" class="bottom4"></span>
       			<span id="row3" class="left3"></span>
       			<span id="row2" class="top4"></span><span id="row1" class="bottom4"></span>
       		</div>
       		<div class="column2">
       			<span id="row12" class="top4 horizontal1"></span><span id="row13" class="bottom4 horizontal1"></span>
       			<span id="row14" class="right3 horizontal5"></span>
       			<span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
       			<span id="row17" class="right3 horizontal5"></span>
       			<span id="row18" class="top4 horizontal1"></span><span id="row19" class="bottom4 horizontal1"></span>
       			<span id="row20" class="right3 horizontal5"></span>
       			<span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
       		</div>
       		<div class="column3">
       		  <span id="row24" class="left5"></span><span id="row25" class="right5"></span>
       		  <span id="row23" class="hall-left3 vertical2"></span><span id="row26" class="hall-right3 vertical2"></span>
       		</div>
       		<div class="column4">
       			<span id="row37" class="top4"></span><span id="row36" class="bottom4"></span>
       			<span id="row35" class="left3"></span>
       			<span id="row34" class="top5"></span><span id="row33" class="bottom5"></span>
       			<span id="row32" class="left3"></span>
       			<span id="row31" class="top4"></span><span id="row30" class="bottom4"></span>
       			<span id="row29" class="left3"></span>
       			<span id="row28" class="top5"></span><span id="row27" class="bottom5"></span>
       		</div>
       		<div class="column5">
       			<span id="row38" class="top4"></span><span id="row39" class="bottom4"></span>
       			<span id="row40" class="right3 horizontal4"></span>
       			<span id="row41" class="top4"></span><span id="row42" class="bottom4"></span>
       			<span id="row43" class="right3 horizontal4"></span>
       			<span id="row44" class="top4"></span><span id="row45" class="bottom4"></span>
       			<span id="row46" class="right3 horizontal4"></span>
       			<span id="row47" class="top4"></span><span id="row48" class="bottom4"></span>
       		</div>
       		<div class="farnsworth-top">
       		  <span id="row38" class="left-wall-2"></span>
       		  <span id="row38" class="top-wall-1"></span>
       		  <span id="row38" class="top-wall-5"></span>
       		</div>
       		<div class="farnsworth-middle">
       		  <span id="row" class="top-left2"></span>
       		  <span id="row" class="top-left2"></span>
       		  <span id="row38" class="top-top4"></span><span id="row39" class="top-top4"></span>
       		  <span id="row" class="top-right3"></span>
       		</div>
       		<div class="clear"></div>
       		<div class="poetry">
       		    <span id="row38" class="left-wall-1"></span>
       		    <span id="row38" class="top-wall-2"></span>
       		    <span id="row" class="floor1"></span>
       		    <span id="row" class="bottom-wall-1"></span>
       		    <span id="row" class="top-wall-4"></span>
       		    <span id="row" class="right-wall-3"></span>
       		    <span id="row" class="right-wall-2"></span>
       		    <span id="row" class="right-wall-2"></span>
       		    <span id="row" class="right-wall-bottom3"></span>
       		</div>
       		<div class="farnsworth-bottom">
       		  <span id="row11" class="top3"></span><span id="row10" class="bottom3"></span>
       		  <span id="row" class="bottom-left2"></span>
       		  <span id="row" class="bottom-left4"></span>
       		  <span id="row" class="bottom-bottom2"></span>
       		  <span id="row" class="bottom-bottom1"></span>
       		  <span id="row" class="bottom-right2"></span>
       		  <span id="row" class="bottom-right2"></span>
       		  <span id="row" class="bottom-bottom1"></span>
       		  <span id="row" class="bottom-bottom-right1"></span>
       		  <span id="row" class="bottom-right4"></span>
       		</div>
       	</div>  
</body>