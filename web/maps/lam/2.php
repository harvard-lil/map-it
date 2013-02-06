<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo "Map for $library $floor $row" ?></title> 

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
	background: url('/map-it/images/lam/lam-2.jpg') no-repeat;
	width:700px;
	height: 535px;
}

.rows span {
	background-color: #eee;
}


span.highlight {
	background-color: #990000;
	border: 1px solid #990000;
}

.row1 {
	padding:80px 15px 10px 85px;
	width:600px;
	float:left;
}

.row2 {
	padding:15px 15px 10px 60px;
	width:600px;
	float:left;
}

.left2 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-top:26px;
}

.right2 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 24px;
	width: 6px;
	margin-right: 6px;
	margin-top:26px;
}

.left3 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 38px;
	width: 6px;
}

.right3 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 38px;
	width: 6px;
	margin-right: 18.3px;
	margin-top:24px;
}

.single3 {
	display:inline-block;
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
  margin-left:5px;
}

.skinny {
  margin-right:5.8px;
}

.aisle {
  display:inline-block;
  width:30px;
}

.left4 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 62px;
	width: 6px;
}

.right4 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 62px;
	width: 6px;
	margin-right: 18.3px;
}

</style>
</head>
<body>
        <div id="map2" class="rows">
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