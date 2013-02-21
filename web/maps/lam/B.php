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

#map1 {
	width:750px;
	height: 500px;
}

.map {
  margin-top:-500px;
}

.row1 {
  margin-left:16px;
  margin-top:37px;
  height:170px;
}

.leftwall {
  width:8px;
  float:left;
}

.backwall {
  width:294px;
  float:left;
}

.backdesk {
  width:98px;
  float:left;
}

.column1 {
	margin:12px 15px 10px 122px;
	width:65px;
	float:left;
}

.column2 {
	margin: 12px 0px 10px 50px;
	width:76px;
	float:left;
}

.column3 {
	margin:26px 0px 10px 0px;
	width:80px;
	float:left;
}

.column4 {
	margin:12px 0px 10px 0px;
	width:68px;
	float:left;
}

.column5 {
	margin:12px 0px 10px 74px;
	width:78px;
	float:left;
}

.space1 {
  margin-left:12px;
}

.space4 {
  margin-left:55px;
}

.space5 {
  margin-left:69px;
}

.space2 {
  margin-top:26px;
}

.vertical2 {
  display:block;
	border: 1px solid #6a8012;
	height: 24px;
	width: 6px;	
}

.vertical3 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 46px;
	width: 6px;	
}

.vertical4 {
  display:block;
	border: 1px solid #6a8012;
	height: 60px;
	width: 6px;	
}

.vertical6 {
  display:block;
	border: 1px solid #6a8012;
	height: 80px;
	width: 6px;	
}

.vertical7 {
  display:block;
	border: 1px solid #6a8012;
	height: 92px;
	width: 6px;	
}

.horizontal2 {
  display:block;
  float:left;
  border: 1px solid #6a8012;
  height:6px;
  width:26px;
  margin:0 0 6px 0px;
}

.horizontal3 {
  display:block;
  float:left;
  border: 1px solid #6a8012;
  height:6px;
  width:44px;
  margin:0 0 6px 0px;
}

.horizontal6 {
  display:block;
  float:left;
  border: 1px solid #6a8012;
  height:6px;
  width:94px;
  margin:0 0 6px 0;
}

.microfilm4 {
  display:block;
  float:left;
  border: 1px solid #6a8012;
  height:12px;
  width:32px;
  margin:0 0 0 0px;
}

.microfilm10 {
  display:block;
  float:left;
  border: 1px solid #6a8012;
  height:12px;
  width:82px;
  margin:0 0 0 0px;
}

.aisle {
  margin-left:80px;
}

.top4 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 5px;
	width: 60px;
}

.bottom4 {
	display:block;
	float:left;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 60px;
	margin-bottom:1px;
}

.top5 {
	display:block;
	float:left;
	border: 1px solid #6a8012;
	height: 5px;
	width: 72px;
}

.bottom5 {
	display:block;
	float:left;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 72px;
	margin-bottom:1px;
}

.left3 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
}

.right3 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
}

.hall-left3 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
}

.hall-right3 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 38px;
	width: 5px;
	margin-left:64px;
}

.left5 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 80px;
	width: 5px;
}

.right5 {
  display:block;
  float:left;
	border: 1px solid #6a8012;
	height: 80px;
	width: 5px;
	margin-left:64px;
}

.vertical

</style>
</head>
<body>
  <img src="/map-it/images/lam/lam-B.jpg" alt="Lamont B" class="print-map" />
        <div id="map1" class="map">
          <div class="row1">
            <div class="leftwall">
              <span id="row55" class="vertical3"></span>
              <span id="row55" class="vertical2"></span>
              <span id="row60" class="vertical6"></span>
            </div>
            <div class="backwall">
              <span id="row60" class="horizontal6"></span>
              <span id="row60" class="microfilm10"></span>
              <span id="row60" class="horizontal3"></span>
              <span id="row60" class="microfilm4"></span>
              <span id="row60" class="horizontal2"></span>
            </div>
            <div class="backdesk">
              <span id="row55" class="vertical3"></span>
              <span id="row55" class="vertical3 aisle"></span>
            </div>
            <div class="backwall">
              <span id="row60" class="horizontal2"></span>
              <span id="row60" class="microfilm4"></span>
              <span id="row60" class="horizontal3"></span>
              <span id="row60" class="microfilm10"></span>
              <span id="row60" class="horizontal6"></span> 
            </div>
            <div class="leftwall">
              <span id="row55" class="vertical4"></span>
              <span id="row60" class="vertical7"></span>
            </div>
          </div>
          <div class="clear"></div>
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
       			<span id="row12" class="top4 space1"></span><span id="row13" class="bottom4 space1"></span>
       			<span id="row14" class="right3 space5"></span>
       			<span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
       			<span id="row17" class="right3 space5"></span>
       			<span id="row18" class="top4 space1"></span><span id="row19" class="bottom4 space1"></span>
       			<span id="row20" class="right3 space5"></span>
       			<span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
       		</div>
       		<div class="column3">
       		  <span id="row24" class="left5"></span><span id="row25" class="right5"></span>
       		  <span id="row23" class="hall-left3 space2"></span><span id="row26" class="hall-right3 space2"></span>
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
       			<span id="row40" class="right3 space4"></span>
       			<span id="row41" class="top4"></span><span id="row42" class="bottom4"></span>
       			<span id="row43" class="right3 space4"></span>
       			<span id="row44" class="top4"></span><span id="row45" class="bottom4"></span>
       			<span id="row46" class="right3 space4"></span>
       			<span id="row47" class="top4"></span><span id="row48" class="bottom4"></span>
       		</div>
       	</div>  
</body>