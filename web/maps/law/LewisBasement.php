<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo "Map for $library $floor $row" ?></title> 

<!--<link rel="stylesheet" type="text/css" href="/map-it/css/map.css" />-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
<script>
var row = '<?php echo $row; ?>';
</script>
<script src="/map-it/js/highlight.js"></script>
<style>
#map1 {
	width:400px;
	height: 865px;
}

.print-map {
  position:relative;
  display:inline;
  z-index:2;
}

.map {
  position:relative;
  z-index:3;
  margin-top:-865px;
}

.clear {
  clear:both;
}

.map span {
	/*background-color: #eee;*/
}


span.highlight {
	background-color: #990000;
	border: 1px solid #990000;
}

.main {
  padding:4px 15px 10px 15px;
  width:390px;
  position:relative;
  float:left;
}

.hallway {
  padding:47px 15px 10px 85px;
  width:300px;
  position:relative;
  float:left;
}

.column1 {
	padding:15px 15px 10px 8px;
	width:145px;
	float:left;
}

.column2 {
	padding: 15px 0px 10px 25px;
	width:145px;
	float:left;
}

.near-stairs {
 width:45px;
 float:left;
}

.stairs {
  float:left;
  width:80px;
}

.top2 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 34px;
}

.bottom2 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 34px;
	margin-bottom:15px;
}

.top3 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 6px;
	width: 50px;
	margin-bottom:-22px;
}

.stairs4 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 70px;
	margin-top:15px;
	margin-left:20px;
	margin-bottom:18px;
}

.top4 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 70px;
	margin-left: 65px;
}

.top5 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 83px;
	margin-left: 8px;
}

.bottom5 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 90px;
	margin-bottom:12px;
}

.top6 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 105px;
	margin-left:30px;
}

.top7 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 115px;
}

.bottom7 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 115px;
	margin-bottom:14px;
}

.column1 .bottom7, .column1 .top7 {
  margin-left:20px;
}

.less-space {
  margin-bottom:10px;
}

.horizontal1 {
  margin-left:0px;
}

.top8 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 7px;
	width: 135px;
}

.bottom8 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 135px;
	margin-bottom:14px;
}

.extra-space {
  margin-bottom:18px;
}

.aisle {
  margin-bottom:14px;
}

.left3 {
  display:inline-block;
	border: 1px solid #6a8012;
	height: 50px;
	width: 6px;
}

</style>
</head>
<body>
 <img src="/map-it/images/law/law-ILSBasement.jpg" alt="Law ILSBasement" class="print-map" />
        <div id="map1" class="map">
          <div class="main">
            <div class="column1">
              <span id="row11" class="top8 aisle"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row8" class="top8"></span><span id="row7" class="bottom8 extra-space"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row8" class="top8"></span><span id="row7" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 less-space"></span>
              <div class="near-stairs">
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
              </div>
              <div class="stairs">
                <span id="row8" class="top5"></span>
                <span id="row8" class="left3"></span>
                <span id="row8" class="top3"></span>
              </div>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 extra-space"></span>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8 extra-space"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 extra-space"></span>
              <div class="near-stairs">
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
              </div>
              <div class="stairs">
                <span id="row8" class="top5"></span>
                <span id="row8" class="left3"></span>
                <span id="row8" class="stairs4"></span>
              </div>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row2" class="top8"></span>
            </div>
            <div class="column2">
              <span id="row11" class="top8 aisle"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 extra-space"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8 extra-space"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 extra-space"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8 extra-space"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row2" class="top4"></span>
            </div>
       		</div>
       	</div>  
</body>