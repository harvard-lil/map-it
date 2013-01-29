<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo "Map for $library $floor $row" ?></title> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="/map-it/map/highlight.js"></script>
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

#map2W {
	background: url('/map-it/images/wid-2W.jpg') no-repeat;
	width:710px;
	height: 482px;
}

.highlight {
	background-color: #990000 !important;
	border: 1px solid #990000;
}

#bottomfull {
	padding:12px 0px 82px 30px;
	float:left;
}

#bottomfull span {
	background-color: #eee;
}

#rightcolumntop {
	padding:30px 0px 10px 610px;
	width:100px;
}

#rightcolumntop span {
	background-color: #eee;
}

.left3 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-bottom:60px;
}

.right3 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 36px;
	width: 5px;
	margin-right: 1.6px;
	margin-bottom:60px;
}

.left4 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-bottom:60px;
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
	/*background-color: #fff;*/
	border: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-right: 1.6px;
}

.left7 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 84px;
	width: 5px;
}

.right7 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin-right: 1.6px;
}

.left8 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 96px;
	width: 5px;
}

.right8 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-right: 1.7px;
}

.top {
	margin-bottom:12px;
}

.above {
	margin-bottom:24px;
}

.bottom {
	margin-bottom:0px;
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

.tall-space {
	margin-bottom: 11px;
}
</style>
</head>
<body>
        <div id="map2W">
        	<div id="rightcolumntop">
       			<span id="row1" class="top5"></span><span id="row2" class="bottom5 tall-space"></span>
       			<span id="row3" class="top5"></span><span id="row4" class="bottom5 tall-space"></span>
       			<span id="row5" class="top5"></span><span id="row6" class="bottom5 tall-space"></span>
       			<span id="row7" class="top5"></span><span id="row8" class="bottom5 tall-space"></span>
       			<span id="row9" class="top5"></span><span id="row10" class="bottom5 tall-space"></span>
       			<span id="row11" class="top5"></span><span id="row12" class="bottom5 tall-space"></span>
       			<span id="row13" class="top5"></span><span id="row14" class="bottom5 tall-space"></span>
       			<span id="row15" class="top5"></span><span id="row16" class="bottom5 tall-space"></span>
       			<span id="row17" class="top5"></span><span id="row18" class="bottom5 tall-space"></span>
       			<span id="row19" class="top5"></span><span id="row20" class="bottom5 tall-space"></span>
       			<span id="row21" class="top5"></span><span id="row22" class="bottom5 tall-space"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="bottomfull">
       			<span id="row95" class="left4 bottom"></span><span id="row94" class="right8"></span>
       			<span id="row93" class="left8"></span><span id="row92" class="right8"></span>
       			<span id="row91" class="left8"></span><span id="row90" class="right8"></span>
       			<span id="row89" class="left8"></span><span id="row88" class="right8"></span>
       			<span id="row87" class="left8"></span><span id="row86" class="right8"></span>
       			<span id="row85" class="left8"></span><span id="row84" class="right8"></span>
       			<span id="row83" class="left8"></span><span id="row82" class="right8"></span>
       			<span id="row81" class="left8"></span><span id="row80" class="right8"></span>
       			<span id="row79" class="left8"></span><span id="row78" class="right8"></span>
       			<span id="row77" class="left8"></span><span id="row76" class="right8"></span>
       			<span id="row75" class="left8"></span><span id="row74" class="right8"></span>
       			<span id="row73" class="left8"></span><span id="row72" class="right8"></span>
       			<span id="row71" class="left8"></span><span id="row70" class="right8"></span>
       			<span id="row69" class="left3 bottom"></span><span id="row68" class="right3 bottom"></span>
       			<span id="row67" class="left3 bottom"></span><span id="row66" class="right3 bottom"></span>
       			<span id="row65" class="left3 bottom"></span><span id="row64" class="right3 bottom"></span>
       			<span id="row63" class="left8"></span><span id="row62" class="right8"></span>
       			<span id="row61" class="left8"></span><span id="row60" class="right8"></span>
       			<span id="row59" class="left8"></span><span id="row58" class="right8"></span>
       			<span id="row57" class="left8"></span><span id="row56" class="right8"></span>
       			<span id="row55" class="left8"></span><span id="row54" class="right8"></span>
       			<span id="row53" class="left8"></span><span id="row52" class="right8"></span>
       			<span id="row51" class="left8"></span><span id="row50" class="right8"></span>
       			<span id="row49" class="left8"></span><span id="row48" class="right8"></span>
       			<span id="row47" class="left8"></span><span id="row46" class="right8"></span>
       			<span id="row45" class="left8"></span><span id="row44" class="right8"></span>
       			<span id="row43" class="left7 top"></span><span id="row42" class="right7 top"></span>
       			<span id="row41" class="left7 top"></span><span id="row40" class="right7 top"></span>
       			<span id="row39" class="left6 above"></span><span id="row38" class="right6 above"></span>
       			<span id="row37" class="left7 top"></span><span id="row36" class="right7 top"></span>
       			<span id="row35" class="left6 above"></span><span id="row34" class="right6 above"></span>
       			<span id="row33" class="left7 top"></span><span id="row32" class="right7 top"></span>
       			<span id="row31" class="left6 above"></span><span id="row30" class="right6 above"></span>
       			<span id="row29" class="left7 top"></span><span id="row28" class="right7 top"></span>
       			<span id="row27" class="left6 above"></span><span id="row26" class="right6 above"></span>
       			<span id="row25" class="left7 top"></span><span id="row24" class="right7 top"></span>
       			<span id="row23" class="left3 closed"></span>
       		</div>
       	</div>  
</body>
