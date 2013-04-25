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
#map1 {
	width:750px;
	height: 500px;
}

.map {
  margin-top: -500px;
}

.column1 {
	margin:188px 0px 10px 124px;
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

</style>
</head>
<body>
 <img src="/map-it/images/lam/lam-1.jpg" alt="Lamont 1" class="print-map" />
        <div id="map1" class="map">
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
       			<span id="row23" class="top4 horizontal1"></span><span id="row12" class="bottom4 horizontal1"></span>
       			<span id="row13" class="right3 horizontal5"></span>
       			<span id="row14" class="top5"></span><span id="row15" class="bottom5"></span>
       			<span id="row16" class="right3 horizontal5"></span>
       			<span id="row17" class="top4 horizontal1"></span><span id="row18" class="bottom4 horizontal1"></span>
       			<span id="row19" class="right3 horizontal5"></span>
       			<span id="row20" class="top5"></span><span id="row21" class="bottom5"></span>
       		</div>
       		<div class="column3">
       		  <span id="row22" class="left5"></span><span id="row25" class="right5"></span>
       		  <span class="hall-left3 vertical2 row22addl"></span><span class="hall-right3 vertical2 row25addl"></span>
       		</div>
       		<div class="column4">
       			<span id="row24" class="top4"></span><span id="row35" class="bottom4"></span>
       			<span id="row34" class="left3"></span>
       			<span id="row33" class="top5"></span><span id="row32" class="bottom5"></span>
       			<span id="row31" class="left3"></span>
       			<span id="row30" class="top4"></span><span id="row29" class="bottom4"></span>
       			<span id="row28" class="left3"></span>
       			<span id="row27" class="top5"></span><span id="row26" class="bottom5"></span>
       		</div>
       		<div class="column5">
       			<span id="row36" class="top4"></span><span id="row37" class="bottom4"></span>
       			<span id="row38" class="right3 horizontal4"></span>
       			<span id="row39" class="top4"></span><span id="row40" class="bottom4"></span>
       			<span id="row41" class="right3 horizontal4"></span>
       			<span id="row42" class="top4"></span><span id="row43" class="bottom4"></span>
       			<span id="row44" class="right3 horizontal4"></span>
       			<span id="row45" class="top4"></span><span id="row46" class="bottom4"></span>
       		</div>
       	</div>  
</body>