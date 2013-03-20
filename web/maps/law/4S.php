<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo "Map for $library $floor $row" ?></title> 
<?php $height = 1000;?>
<link rel="stylesheet" type="text/css" href="/map-it/css/map.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
<script>
var row = '<?php echo $row; ?>';
var height = <?php echo $height; ?>;
</script>
<script src="/map-it/js/highlight.js"></script>
<style>
#map1 {
	width:500px;
	height: <?php echo $height; ?>px;
}

.map {
  margin-top:-<?php echo $height; ?>px;
}

.main {
  margin:18px 15px 10px 5px;
  width:500px;
  position:relative;
  float:left;
}

.column1 {
	margin:10px 15px 10px 65px;
	width:195px;
	float:left;
}

.column2 {
	margin: 10px 0px 10px 35px;
	width:175px;
	float:left;
}

.carrels { 
  height:50px;
  width:150px;
  float:left;
}

.lounge {
  height:140px;
  width:150px;
  float:left;
}

.table {
  height:75px;
  width:150px;
  float:left;
}

.top5 {
	border: 1px solid #6a8012;
	height: 8px;
	width: 110px;
}

.bottom5 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 8px;
	width: 110px;
	margin-bottom:13px;
}

.tight {
  margin-bottom:3px;
}

.column1 .top5, .column1 .bottom5 {
  margin-left:38px;
}

.top7 {
	border: 1px solid #6a8012;
	height: 8px;
	width: 150px;
}

.bottom7 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 8px;
	width: 150px;
	margin-bottom:11px;
}

</style>
</head>
<body>
 <img src="/map-it/images/law/law-4S.jpg" alt="Law 4 South" class="print-map" />
        <div id="map1" class="map">
          <div class="main">
            <div class="column1">
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row8" class="top7"></span><span id="row7" class="bottom7"></span>
              <div class="carrels"></div>
              <span id="row5" class="top7"></span><span id="row4" class="bottom7"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top7"></span><span id="row4" class="bottom7"></span>
              <div class="lounge"></div>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top5"></span><span id="row4" class="bottom5 tight"></span>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top5"></span><span id="row4" class="bottom5 tight"></span>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
            </div>
            <div class="column2">
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row8" class="top7"></span><span id="row7" class="bottom7"></span>
              <div class="carrels"></div>
              <span id="row5" class="top7"></span><span id="row4" class="bottom7"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top7"></span><span id="row4" class="bottom7"></span>
              <div class="lounge"></div>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top5"></span><span id="row4" class="bottom5 tight"></span>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top5"></span><span id="row4" class="bottom5 tight"></span>
              <div class="table"></div>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
            </div>
       		</div> 
</body>