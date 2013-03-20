<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo "Map for $library $floor $row" ?></title> 
<?php $height = 850;?>
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
	width:450px;
	height: <?php echo $height; ?>px;
}

.map {
  margin-top:-<?php echo $height; ?>px;
}

.main {
  margin:18px 15px 10px 5px;
  width:440px;
  position:relative;
  float:left;
}

.column1 {
	margin:425px 15px 10px 73px;
	width:120px;
	float:left;
}

.column2 {
	margin: 425px 0px 10px 70px;
	width:145px;
	float:left;
}

.top4 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 70px;
	margin-bottom:12px;
}

.shifted {
  margin-left:14px;
}

.shifted2 {
  margin-left:28px;
}

.table {
  height:75px;
  width:100px;
  float:left;
}

.top5 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 85px;
}

.bottom5 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 85px;
	margin-bottom:12px;
}

.top-space {
  margin-top:4px;
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
	margin-bottom:11px;
}

.staff {
  border-color: transparent;
}

</style>
</head>
<body>
 <img src="/map-it/images/law/law-3.jpg" alt="Law 3" class="print-map" />
        <div id="map1" class="map">
          <div class="main">
            <div class="column1">
              <span id="row11" class="top4 staff"></span>
              <span id="row11" class="top5 staff"></span><span id="row10" class="bottom5 staff"></span>
              <span id="row11" class="top5 staff"></span><span id="row10" class="bottom5 staff"></span>
              <span id="row8" class="top6 staff"></span><span id="row7" class="bottom6 staff"></span>
              <span id="row5" class="top6 staff"></span><span id="row4" class="bottom6 staff"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row11" class="top5"></span><span id="row10" class="bottom5"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row11" class="top5 top-space"></span><span id="row54" class="bottom5"></span>
            </div>
            <div class="column2">
              <span id="row11" class="top4 shifted2 staff"></span>
              <span id="row11" class="top5 shifted staff"></span><span id="row10" class="bottom5 shifted staff"></span>
              <span id="row11" class="top5 shifted"></span><span id="row10" class="bottom5 shifted"></span>
              <span id="row8" class="top6"></span><span id="row7" class="bottom6"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top5 shifted"></span><span id="row10" class="bottom5 shifted"></span>
              <span id="row5" class="top6"></span><span id="row4" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row11" class="top5 shifted"></span><span id="row10" class="bottom5 shifted"></span>
              <span id="row5" class="top6"></span><span id="row40" class="bottom6"></span>
              <span id="row11" class="top6"></span><span id="row10" class="bottom6"></span>
              <span id="row71" class="top5 shifted top-space"></span><span id="row10" class="bottom5 shifted"></span>
            </div>
       		</div> 
</body>