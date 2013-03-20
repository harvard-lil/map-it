<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
	width:550px;
	height: 400px;
}

.map {
  margin-top:-400px;
}

.main {
  margin:36px 15px 10px 5px;
  width:540px;
  position:relative;
  float:left;
}

.column1 {
	margin:15px 15px 10px 32px;
	width:120px;
	float:left;
}

.column2 {
	margin: 15px 0px 10px 25px;
	width:145px;
	float:left;
}

.column3 {
	margin:15px 0px 10px 30px;
	width:120px;
	float:left;
}

.top3 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 60px;
}

.bottom3 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 60px;
	margin-bottom:13px;
}

.top4 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 72px;
}

.bottom4 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 72px;
	margin-bottom:13px;
}

.top5 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 90px;
}

.bottom5 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 90px;
	margin-bottom:13px;
}

.shifted {
  margin-left:10px;
}

.top6 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 100px;
}

.bottom6 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 100px;
	margin-bottom:13px;
}

.top7 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 120px;
}

.bottom7 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 120px;
	margin-bottom:13px;
}

</style>
</head>
<body>
 <img src="/map-it/images/law/law-1.jpg" alt="Law 1" class="print-map" />
        <div id="map1" class="map">
          <div class="main">
            <div class="column1">
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row8" class="top6"></span><span id="row7" class="bottom6"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row2" class="top6"></span><span id="row1" class="bottom6"></span>
              <span id="row11" class="top5 shifted"></span><span id="row10" class="bottom5 shifted"></span>
            </div>
            <div class="column2">
              <span id="row2" class="top7"></span><span id="row1" class="bottom7"></span>
              <span id="row15" class="top7"></span><span id="row16" class="bottom7"></span>
              <span id="row21" class="top7"></span><span id="row22" class="bottom7"></span>
              <span id="row15" class="top5 shifted"></span><span id="row16" class="bottom5 shifted"></span>
              <span id="row21" class="top7"></span><span id="row22" class="bottom7"></span>
              <span id="row21" class="top7"></span><span id="row22" class="bottom7"></span>
              <span id="row15" class="top5 shifted"></span><span id="row16" class="bottom5 shifted"></span>
              <span id="row21" class="top7"></span><span id="row22" class="bottom7"></span>
              <span id="row15" class="top7"></span><span id="row16" class="bottom7"></span>
            </div>
            <div class="column3">
              <span id="row15" class="top4"></span><span id="row16" class="bottom4"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top6"></span><span id="row16" class="bottom6"></span>
              <span id="row21" class="top6"></span><span id="row22" class="bottom6"></span>
              <span id="row21" class="top6"></span><span id="row22" class="bottom6"></span>
              <span id="row15" class="top6"></span><span id="row16" class="bottom6"></span>
              <span id="row21" class="top6"></span><span id="row22" class="bottom6"></span>
              <span id="row15" class="top3"></span><span id="row16" class="bottom3"></span>
              <span id="row21" class="top3"></span><span id="row22" class="bottom3"></span>
            </div>
       		</div> 
</body>