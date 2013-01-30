<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php echo "Map for $library $floor $row" ?></title> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="/map-it/js/highlight.js"></script>
<script language="javascript" type="text/javascript">
var row = '<?php echo $row ?>';
</script>
<style>
body{
	font-size:75%;
	font-family:Arial, Verdana, sans-serif;
	background:#fff;
	color:#333;
}

#map3E {
	background: url('/map-it/images/wid-3E.jpg') no-repeat;
	width:705px;
	height: 469px;
}

#toprow {
	padding:52px 15px 10px 110px;
}

#toprow span {
	background-color: #eee;
}

#rightcolumn {
	padding:21px 15px 10px 582px;
	width:100px;
}

#rightcolumn span {
	background-color: #eee;
}

.highlight {
	background-color: #990000 !important;
	border: 1px solid #990000;
}

.left2 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 24px;
	width: 5px;
}

.right2 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 24px;
	width: 5px;
	margin-right: 1.6px;
}

.left3 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 36px;
	width: 5px;
}

.right3 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-right: 1.6px;
}

.left4 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 48px;
	width: 5px;
}

.right4 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-right: 1.6px;
}

.left6 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 72px;
	width: 5px;
}

.right6 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-right: 1.6px;
}

.left7 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 84px;
	width: 5px;
}

.right7 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin-right: 1.6px;
}

.left8 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 96px;
	width: 5px;
}

.right8 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-right: 1.6px;
}

.left10 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 120px;
	width: 5px;
}

.right10 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 120px;
	width: 5px;
	margin-right: 1.6px;
}

.top {
	margin-bottom:60px;
}

.closed {
	border: 1px solid #6a8012;
}

.top5 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 60px;
}

.bottom5 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 5px;
	width: 60px;
}
</style>
</head>
<body>
        <div id="map3E">
        	<div id="toprow">
       			<span id="row1" class="left2"></span><span id="row2" class="right2"></span>
       			<span id="row3" class="left8"></span><span id="row4" class="right8"></span>
       			<span id="row5" class="left8"></span><span id="row6" class="right8"></span>
       			<span id="row7" class="left8"></span><span id="row8" class="right8"></span>
       			<span id="row9" class="left8"></span><span id="row10" class="right8"></span>
       			<span id="row11" class="left8"></span><span id="row12" class="right8"></span>
       			<span id="row13" class="left8"></span><span id="row14" class="right8"></span>
       			<span id="row15" class="left3 top"></span><span id="row16" class="right3 top"></span>
       			<span id="row17" class="left3 top"></span><span id="row18" class="right3 top"></span>
       			<span id="row19" class="left3 top"></span><span id="row20" class="right3 top"></span>
       			<span id="row21" class="left8"></span><span id="row22" class="right8"></span>
       			<span id="row23" class="left8"></span><span id="row24" class="right8"></span>
       			<span id="row25" class="left8"></span><span id="row26" class="right8"></span>
       			<span id="row27" class="left8"></span><span id="row28" class="right8"></span>
       			<span id="row29" class="left8"></span><span id="row30" class="right8"></span>
       			<span id="row31" class="left8"></span><span id="row32" class="right8"></span>
       			<span id="row33" class="left8"></span><span id="row34" class="right8"></span>
       			<span id="row35" class="left8"></span><span id="row36" class="right8"></span>
       			<span id="row37" class="left8"></span><span id="row38" class="right8"></span>
       			<span id="row39" class="left8"></span><span id="row40" class="right8"></span>
       			<span id="row41" class="left7"></span><span id="row42" class="right7"></span>
       			<span id="row43" class="left7"></span><span id="row44" class="right7"></span>
       			<span id="row45" class="left6"></span><span id="row46" class="right6"></span>
       			<span id="row47" class="left7"></span><span id="row48" class="right7"></span>
       			<span id="row49" class="left6"></span><span id="row50" class="right6"></span>
       			<span id="row51" class="left7"></span><span id="row52" class="right7"></span>
       			<span id="row53" class="left6"></span><span id="row54" class="right6"></span>
       			<span id="row55" class="left7"></span><span id="row56" class="right7"></span>
       			<span id="row57" class="left6"></span><span id="row58" class="right6"></span>
       			<span id="row59" class="left7"></span><span id="row60" class="right7"></span>
       			<span id="row61" class="left3 closed"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="rightcolumn">
       			<span id="row62" class="top5"></span><span id="row63" class="bottom5"></span>
       			<span id="row64" class="top5"></span><span id="row65" class="bottom5"></span>
       			<span id="row66" class="top5"></span><span id="row67" class="bottom5"></span>
       			<span id="row68" class="top5"></span><span id="row69" class="bottom5"></span>
       			<span id="row70" class="top5"></span><span id="row71" class="bottom5"></span>
       			<span id="row72" class="top5"></span><span id="row73" class="bottom5"></span>
       			<span id="row74" class="top5"></span><span id="row75" class="bottom5"></span>
       			<span id="row76" class="top5"></span><span id="row77" class="bottom5"></span>
       			<span id="row78" class="top5"></span><span id="row79" class="bottom5"></span>
       			<span id="row80" class="top5"></span><span id="row81" class="bottom5"></span>
       			<span id="row82" class="top5"></span><span id="row83" class="bottom5"></span>
       			<span id="row84" class="top5"></span><span id="row85" class="bottom5"></span>
       			<span id="row86" class="top5"></span><span id="row87" class="bottom5"></span>
       			<span id="row88" class="top5"></span><span id="row89" class="bottom5"></span>
       			<span id="row90" class="top5"></span>
       		</div>
       	</div>  
</body>
