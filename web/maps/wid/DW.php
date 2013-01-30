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

#mapDW {
	background: url('/map-it/images/wid-DW.jpg') no-repeat;
	width:710px;
	height: 500px;
}

#toprow {
	padding:44px 15px 10px 58px;
}

#toprow span {
	background-color: #eee;
}

#rightcolumn {
	float:left;
	padding:48px 15px 10px 32px;
	width:100px;
}

#rightcolumn span {
	background-color: #eee;
}

#leftcolumn {
	float:left;
	padding:28px 15px 10px 46px;
	width:55px;
}

#leftcolumn span {
	background-color: #eee;
}

.highlight {
	background-color: #990000 !important;
	border: 1px solid #990000;
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

.left9 {
	display:inline-block;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 108px;
	width: 5px;
}

.right9 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 108px;
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

.tall-space {
	margin-bottom:36px;
}

.closed {
	border: 1px solid #6a8012;
}

.open {
	border-left: 0px;
}

.top2 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 24px;
	margin-right:40px;
}

.bottom2 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 5px;
	width: 24px;
	margin-right:40px;
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

.top6 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 72px;
}

.bottom6 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 5px;
	width: 72px;
}
</style>
</head>
<body>
        <div id="mapDW">
        	<div id="toprow">
       			<span id="row37" class="left3"></span><span id="row38" class="right3"></span>
       			<span id="row39" class="left10"></span><span id="row40" class="right10"></span>
       			<span id="row41" class="left10"></span><span id="row42" class="right10"></span>
       			<span id="row43" class="left10"></span><span id="row44" class="right10"></span>
       			<span id="row45" class="left10"></span><span id="row46" class="right10"></span>
       			<span id="row47" class="left10"></span><span id="row48" class="right10"></span>
       			<span id="row49" class="left10"></span><span id="row50" class="right10"></span>
       			<span id="row51" class="left10"></span><span id="row52" class="right10"></span>
       			<span id="row53" class="left10"></span><span id="row54" class="right10"></span>
       			<span id="row55" class="left9"></span><span id="row56" class="right9"></span>
       			<span id="row57" class="left9"></span><span id="row58" class="right9"></span>
       			<span id="row59" class="left9"></span><span id="row60" class="right9"></span>
       			<span id="row61" class="left9"></span><span id="row62" class="right9"></span>
       			<span id="row63" class="left9"></span><span id="row64" class="right9"></span>
       			<span id="row65" class="left9"></span><span id="row66" class="right9"></span>
       			<span id="row67" class="left9"></span><span id="row68" class="right9"></span>
       			<span id="row69" class="left9"></span><span id="row70" class="right9"></span>
       			<span id="row71" class="left9"></span><span id="row72" class="right9"></span>
       			<span id="row73" class="left9"></span><span id="row74" class="right9"></span>
       			<span id="row75" class="left9"></span><span id="row76" class="right9"></span>
       			<span id="row77" class="left9 closed"></span><span id="row78" class="right4 top open"></span>
       			<span id="row79" class="left4 top"></span><span id="row80" class="right4 top"></span>
       			<span id="row81" class="left4 top"></span><span id="row82" class="right4 top"></span>
       			<span id="row83" class="left4 top"></span><span id="row84" class="right4 top"></span>
       			<span id="row85" class="left4 top"></span><span id="row86" class="right4 top"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="leftcolumn">
       			<span id="row36" class="top6"></span><span id="row35" class="bottom6"></span>
       			<span id="row34" class="top6"></span><span id="row33" class="bottom6"></span>
       			<span id="row32" class="top6"></span><span id="row31" class="bottom6"></span>
       			<span id="row30" class="top6"></span><span id="row29" class="bottom6"></span>
       			<span id="row28" class="top6"></span><span id="row27" class="bottom6"></span>
       			<span id="row26" class="top6"></span><span id="row25" class="bottom6"></span>
       			<span id="row24" class="top6"></span><span id="row23" class="bottom6"></span>
       			<span id="row22" class="top6"></span><span id="row21" class="bottom6"></span>
       			<span id="row20" class="top6"></span><span id="row19" class="bottom6"></span>
       			<span id="row18" class="top6"></span><span id="row17" class="bottom6"></span>
       			<span id="row16" class="top6"></span><span id="row15" class="bottom6"></span>
       		</div>
       		<div id="rightcolumn">
       			<span id="row1" class="top5"></span><span id="row2" class="bottom5"></span>
       			<span id="row3" class="top5"></span><span id="row4" class="bottom5"></span>
       			<span id="row5" class="top5"></span><span id="row6" class="bottom5"></span>
       			<span id="row7" class="top5"></span><span id="row8" class="bottom5"></span>
       			<span id="row9" class="top5"></span><span id="row10" class="bottom5"></span>
       			<span id="row11" class="top5"></span><span id="row12" class="bottom5"></span>
       			<span id="row13" class="top2"></span><span id="row14" class="bottom2"></span>
       		</div>
       	</div>  
</body>
