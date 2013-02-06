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
	background: url('/map-it/images/lam/lam-A.jpg') no-repeat;
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
	padding:56px 15px 10px 88px;
	width:600px;
	float:left;
}

.row2 {
	padding:12px 15px 10px 65px;
	width:600px;
	float:left;
}

.row3 {
	padding:22px 15px 10px 553px;
	width:600px;
	float:left;
}

.left1 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 12px;
	width: 6px;
	margin-bottom:12px;
	margin-left:3px;
}

.right1 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 12px;
	width: 6px;
	margin-right: 6px;
	margin-bottom: 12px;
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

.horizontal1 {
  margin-left:5px;
}

.skinny {
  margin-right:5.8px;
}

.aisle {
  display:inline-block;
  width:12px;
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

.left5 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 65px;
	width: 6px;
}

.right5 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 65px;
	width: 6px;
	margin-right: 18.3px;
	margin-top:24px;
}

.single5 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 65px;
	width: 6px;
	margin-top:24px;
	margin-right:6px;
}

.vertical2 {
  margin-top:0px;
  margin-bottom:24px;
}

</style>
</head>
<body>
        <div id="map2" class="rows">
          <div class="row1">
       			<span id="row82" class="right5"></span>
       			<span id="row81" class="left5"></span><span id="row80" class="right5"></span>
       			<span id="row79" class="left5"></span><span id="row78" class="right5"></span>
       			<span id="row77" class="left5"></span><span id="row76" class="right5"></span>
       			<span id="row75" class="left5"></span><span id="row74" class="right5"></span>
       			<span id="row73" class="left5"></span><span id="row72" class="right5"></span>
       			<span id="row71" class="left5 top"></span><span id="row70" class="right5 top"></span>
       			<span id="row69" class="left5 top"></span><span id="row68" class="right5 top"></span>
       			<span id="row67" class="left5 top"></span><span id="row66" class="right5 top"></span>
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
       			<span class="aisle"></span>
       			<span id="row43" class="left3"></span><span id="row44" class="right3 skinny"></span>
       			<span class="aisle"></span>
       			<span id="row45" class="left3"></span><span id="row46" class="right3 skinny"></span>
       			<span id="row47" class="left3"></span><span id="row48" class="right3 skinny"></span>
       			<span id="row49" class="left2"></span><span id="row50" class="right2"></span>
       			<span id="row51" class="left1"></span><span id="row52" class="right1"></span>
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