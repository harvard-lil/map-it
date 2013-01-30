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

#mapP2 {
	background: url('/map-it/images/wid-P2.jpg') no-repeat;
	width:910px;
	height: 682px;
}

.highlight {
	background-color: #990000 !important;
	border: 1px solid #990000;
}

#topfull {
	padding:36px 300px 0px 52px;
	float:left;
	height:200px;
}

#topfull span {
	background-color: #eee;
}

#bottomfull {
	padding:20px 0px 82px 46px;
	float:left;
}

#bottomfull span {
	background-color: #eee;
}

#rightcolumntop {
	float:left;
	padding:216px 0px 10px 18px;
	width:7px;
}

#rightcolumntop span {
	background-color: #eee;
}

#leftcolumntop {
	float:left;
	padding:216px 0px 10px 0px;
	width:15px;
}

#leftcolumntop span {
	background-color: #eee;
}

.left2 {
	display:inline-block;
	/*background-color: #fff;*/
	border: 1px solid #6a8012;
	height: 24px;
	width: 5px;
	margin-top:36px;
}

.left4 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-bottom:230px;
}

.right4 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-right: 1.6px;
	margin-bottom:230px;
}

.wall4 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 48px;
	width: 5px;
	margin-top:1px;
}

.wall7{
	display:inline-block;
	border: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin:4px 0px;
}

.left5 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 60px;
	width: 5px;
	margin-bottom:230px;
}


.right5 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 60px;
	width: 5px;
	margin-right: 8.2px;
	margin-bottom:230px;
}

.left6 {
	display:inline-block;
	background-color: #fff;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-bottom:230px;
}

.right6 {
	display:inline-block;
	/*background-color: #fff;*/
	border: 1px solid #6a8012;
	height: 72px;
	width: 5px;
	margin-right: 8.2px;
	margin-bottom:230px;
}

.left7 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin-bottom:148px;
}

.right7 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 84px;
	width: 5px;
	margin-right: 8px;
	margin-bottom:148px;
}

.left8 {
	display:inline-block;
	/*background-color: #fff;*/
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	border-top: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-bottom:136px;
}

.right8 {
	display:inline-block;
	background-color: #fff;
	border: 1px solid #6a8012;
	height: 96px;
	width: 5px;
	margin-right: 8px;
	margin-bottom:136px;
}

.left11 {
	display:inline-block;
	/*background-color: #fff;*/
	border: 1px solid #6a8012;
	height: 132px;
	width: 5px;
	margin-top:24px;
}

.right13 {
	display:inline-block;
	border: 1px solid #6a8012;
	background-color:blue;
	height: 156px;
	width: 5px;
	margin-right: 1.7px;
	margin-left:80px;
	margin-bottom:96px;
}

.right22 {
	display:inline-block;
	border: 1px solid #6a8012;
	background-color:blue;
	height: 264px;
	width: 5px;
	margin-right: 1.7px;
	margin-left:27px;
	margin-bottom:128px;
}

.top {
	margin-bottom:12px;
}

.below {
	margin-bottom:-12px;
}

.bottom {
	margin-bottom:12px;
}

.bottom4 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 33px;
	width: 48px;
	margin-left: 4px;
}

.bottom6 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 33px;
	width: 72px;
}

.bottom9 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 33px;
	width: 108px;
	margin-left:4px;
}
</style>
</head>
<body>
        <div id="mapP2">
        	<div id="topfull">
       			<span id="row35" class="left6"></span><span id="row36" class="right6"></span>
       			<span id="row37" class="left6"></span><span id="row38" class="right6"></span>
       			<span id="row39" class="left6"></span><span id="row40" class="right6"></span>
       			<span id="row41" class="left6"></span><span id="row42" class="right6"></span>
       			<span id="row43" class="left6"></span><span id="row44" class="right6"></span>
       			<span id="row45" class="left6"></span><span id="row46" class="right6"></span> 			
       			<span id="row47" class="left6"></span><span id="row48" class="right6"></span>
       			<span id="row49" class="left6"></span><span id="row50" class="right6"></span>
       			<span id="row51" class="left6"></span><span id="row52" class="right6"></span>
       			<span id="row53" class="left5"></span><span id="row54" class="right5"></span>
       			<span id="row55" class="left5"></span><span id="row56" class="right5"></span>
       			<span id="row57" class="left5"></span><span id="row58" class="right5"></span>
       			<span id="row59" class="left5"></span><span id="row60" class="right5"></span>
       			<span id="row61" class="left4"></span><span id="row62" class="right4"></span>
       			<span id="row63" class="left4"></span><span id="row64" class="right4"></span>
       			<span id="row65" class="right13"></span>
       		</div>
       		<div class="clear"></div>
       		<div id="bottomfull">
       			<span id="row34" class="left7"></span><span id="row33" class="right7"></span>
       			<span id="row32" class="left8"></span><span id="row31" class="right8"></span>
       			<span id="row30" class="left8"></span><span id="row29" class="right8"></span> 			
       			<span id="row28" class="left8"></span><span id="row27" class="right8"></span>
       			<span id="row26" class="left8"></span><span id="row25" class="right8"></span>
       			<span id="row24" class="left8"></span><span id="row23" class="right8"></span>
       			<span id="row22" class="left8"></span><span id="row21" class="right8"></span>
       			<span id="row20" class="left8"></span><span id="row19" class="right8"></span>
       			<span id="row18" class="left8"></span><span id="row17" class="right8"></span>
       			<span id="row16" class="left8"></span><span id="row15" class="right8"></span>
       			<span id="row14" class="left8"></span><span id="row13" class="right8"></span>
       			<span id="row12" class="left8"></span><span id="row11" class="right8"></span>
       			<span id="row10" class="left8"></span><span id="row9" class="right8"></span>
       			<span id="row8" class="left8"></span><span id="row7" class="right8"></span>
       			<span id="row6" class="left8"></span><span id="row5" class="right8"></span>
       			<span id="row4" class="left8"></span><span id="row3" class="right8"></span>
       			<span id="row2" class="left8"></span><span id="row1" class="right8"></span>
       			<span id="row66" class="right22"></span>
       			<span id="row67" class="bottom6"></span>
       			<span id="row68" class="bottom9"></span>
       			<span id="row69" class="bottom9"></span>
       			<span id="row70" class="bottom4"></span>
       		</div>
        	<div id="leftcolumntop">
       			<span id="row71" class="left11"></span>
       			<span id="row75" class="left2"></span>
       		</div>
        	<div id="rightcolumntop">
       			<span id="row72" class="wall4"></span>
       			<span id="row73" class="wall7"></span>
       			<span id="row74" class="wall4"></span>
       		</div>
       	</div>  
</body>
