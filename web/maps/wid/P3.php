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

#mapP3 {
	background: url('/map-it/images/wid-P3.jpg') no-repeat;
	width:720px;
	height: 835px;
}

#leftcolumn {
	padding:20px 15px 10px 32px;
	width:200px;
	float:left;
}

#leftcolumn span {
	background-color: #eee;
}

#rightcolumn {
	padding:180px 15px 10px 40px;
	width:235px;
	float:left;
}

#rightcolumn span {
	background-color: #eee;
}

.highlight {
	background-color: #990000 !important;
	border: 1px solid #990000;
}

.top {
	margin-bottom:60px;
}

.closed {
	border: 1px solid #6a8012;
}

.bottom2 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 24px;
	margin-left:5px;
	background-color:teal;
	margin-bottom:3px;
}

.top3 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 36px;
	margin-left:54px;
}

.bottom3 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	width: 36px;
	margin-left:54px;
	margin-bottom: 3.2px;
}

.top5 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 60px;
	margin-left:84px;
}

.bottom5 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 2.7px;
	width: 60px;
	margin-left:84px;
}

.top7 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 78px;
}

.bottom7 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 2.8px;
	width: 78px;
}

.top10 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 120px;
}

.bottom10 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 3.2px;
	width: 120px;
}

.top11 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 132px;
	margin-left:78px;
}

.bottom11 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: .9px;
	width: 132px;
	margin-left:78px;
}

.top12 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 144px;
}

.bottom12 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: .9px;
	width: 144px;
}

.top18 {
	display:inline-block;
	border: 1px solid #6a8012;
	height: 5px;
	width: 212px;
}

.bottom18 {
	display:inline-block;
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 5px;
	margin-bottom: 2.8px;
	width: 212px;
}

.reg {
	margin-bottom:2.7px;
}

.gap {
	margin-bottom:3.7px;
}

.doublegap {
	margin-bottom:7px;
}

.right {
	margin-left:66px;
}

.less {
	margin-left:32px;
}

.left {
	margin-left:1px;
}
</style>
</head>
<body>
        <div id="mapP3">
        	<div id="leftcolumn">
       			<span id="row66" class="bottom12"></span>
       			<span id="row67" class="top12"></span><span id="row191" class="bottom12"></span>
       			<span id="row69" class="top12"></span><span id="row189" class="bottom12"></span>
       			<span id="row71" class="top12"></span><span id="row187" class="bottom12"></span>
       			<span id="row73" class="top12"></span><span id="row185" class="bottom12"></span>
       			<span id="row75" class="top12"></span><span id="row183" class="bottom12"></span>
       			<span id="row77" class="top12"></span><span id="row181" class="bottom12"></span>
       			<span id="row79" class="top12"></span><span id="row179" class="bottom12"></span>
       			<span id="row81" class="top12"></span><span id="row177" class="bottom12"></span>
       			<span id="row83" class="top12"></span><span id="row175" class="bottom12"></span>
       			<span id="row85" class="top12"></span><span id="row173" class="bottom12"></span>
       			<span id="row172" class="top12"></span><span id="row171" class="bottom12"></span>
       			<span id="row89" class="top12"></span><span id="row169" class="bottom12"></span>
       			<span id="row65" class="top12"></span><span id="row167" class="bottom12"></span>
       			<span id="row67" class="top12"></span><span id="row165" class="bottom12"></span>
       			<span id="row69" class="top12"></span><span id="row163" class="bottom12"></span>
       			<span id="row71" class="top12"></span><span id="row161" class="bottom12"></span>
       			<span id="row73" class="top12"></span><span id="row159" class="bottom12"></span>
       			<span id="row75" class="top12"></span><span id="row157" class="bottom12"></span>
       			<span id="row77" class="top12"></span><span id="row155" class="bottom12"></span>
       			<span id="row79" class="top12"></span><span id="row153" class="bottom12"></span>
       			<span id="row81" class="top12"></span><span id="row151" class="bottom12"></span>
       			<span id="row83" class="top12"></span><span id="row149" class="bottom12"></span>
       			<span id="row85" class="top12"></span><span id="row147" class="bottom12"></span>
       			<span id="row146" class="top12"></span><span id="row145" class="bottom12"></span>
       			<span id="row89" class="top12"></span><span id="row143" class="bottom12"></span>
       			<span id="row67" class="top12"></span><span id="row141" class="bottom12"></span>
       			<span id="row69" class="top12"></span><span id="row139" class="bottom12"></span>
       			<span id="row71" class="top12"></span><span id="row137" class="bottom12"></span>
       			<span id="row73" class="top12"></span><span id="row135" class="bottom12"></span>
       			<span id="row75" class="top12"></span><span id="row133" class="bottom12"></span>
       			<span id="row77" class="top12"></span><span id="row131" class="bottom12"></span>
       			<span id="row79" class="top12"></span><span id="row129" class="bottom12"></span>
       			<span id="row81" class="top12"></span><span id="row127" class="bottom12"></span>
       			<span id="row83" class="top12"></span><span id="row125" class="bottom12"></span>
       			<span id="row85" class="top12"></span><span id="row123" class="bottom12"></span>
       			<span id="row122" class="top12"></span><span id="row121" class="bottom12"></span>
       			<span id="row89" class="top12"></span><span id="row119" class="bottom12"></span>
       			<span id="row65" class="top12"></span><span id="row117" class="bottom12"></span>
       			<span id="row67" class="top12"></span><span id="row115" class="bottom12"></span>
       			<span id="row69" class="top12"></span><span id="row113" class="bottom12"></span>
       			<span id="row71" class="top12"></span><span id="row111" class="bottom12"></span>
       			<span id="row73" class="top12"></span><span id="row109" class="bottom12"></span>
       			<span id="row75" class="top12"></span><span id="row107" class="bottom12"></span>
       			<span id="row77" class="top12"></span><span id="row105" class="bottom12"></span>
       			<span id="row104" class="top12"></span><span id="row103" class="bottom12"></span>
       			<span id="row102" class="top12"></span><span id="row101" class="bottom12"></span>
       			<span id="row100" class="top12"></span><span id="row99" class="bottom12"></span>
       			<span id="row98" class="top12"></span><span id="row97" class="bottom12 reg"></span>
       			<span id="row96" class="top12"></span><span id="row95" class="bottom12 reg"></span>
       			<span id="row94" class="top12"></span><span id="row93" class="bottom12 reg"></span>
       			<span id="row92" class="top7 right"></span><span id="row91" class="bottom7 right"></span>
       			<span id="row90" class="top7 right"></span><span id="row89" class="bottom7 right"></span>	
       			<span id="row88" class="top5"></span><span id="row87" class="bottom5"></span>	
       		</div>
       		<div class="clear"></div>
       		<div id="rightcolumn">
       			<span id="row63" class="top18"></span><span id="row65" class="bottom18"></span>
       			<span id="row65" class="top18"></span><span id="row66" class="bottom18"></span>
       			<span id="row65" class="top10"></span><span id="row66" class="bottom10"></span>
       			<span id="row67" class="top10"></span><span id="row68" class="bottom10"></span>
       			<span id="row69" class="top10"></span><span id="row70" class="bottom10"></span>
       			<span id="row71" class="top10"></span><span id="row72" class="bottom10"></span>
       			<span id="row73" class="top10"></span><span id="row73" class="top3"></span><span id="row74" class="bottom10"></span><span id="row73" class="bottom3"></span>
       			<span id="row75" class="top12"></span><span id="row73" class="top3 less"></span><span id="row76" class="bottom12 gap"></span><span id="row73" class="bottom3 less"></span>
       			<span id="row77" class="top12"></span><span id="row78" class="bottom12 gap"></span>
       			<span id="row79" class="top12"></span><span id="row80" class="bottom12 gap"></span>
       			<span id="row81" class="top12"></span><span id="row82" class="bottom12 gap"></span>
       			<span id="row83" class="top12"></span><span id="row73" class="top3 less"></span><span id="row84" class="bottom12 doublegap"></span><span id="row84" class="bottom2"></span><span id="row73" class="bottom3 left doublegap"></span>
       			<span id="row49" class="top18"></span><span id="row48" class="bottom18 gap"></span>
       			<span id="row47" class="top18"></span><span id="row46" class="bottom18 gap"></span>
       			<span id="row45" class="top18"></span><span id="row44" class="bottom18 gap"></span>
       			<span id="row43" class="top18"></span><span id="row42" class="bottom18 gap"></span>
       			<span id="row41" class="top18"></span><span id="row40" class="bottom18 gap"></span>
       			<span id="row39" class="top18"></span><span id="row38" class="bottom18 gap"></span>
       			<span id="row37" class="top18"></span><span id="row36" class="bottom18 gap"></span>
       			<span id="row35" class="top18"></span><span id="row34" class="bottom18 gap"></span>
       			<span id="row33" class="top18"></span><span id="row32" class="bottom18 gap"></span>
       			<span id="row31" class="top18"></span><span id="row30" class="bottom18 gap"></span>
       			<span id="row29" class="top18"></span><span id="row28" class="bottom18 gap"></span>
       			<span id="row27" class="top18"></span><span id="row26" class="bottom18 gap"></span>
       			<span id="row25" class="top18"></span><span id="row24" class="bottom18 gap"></span>
       			<span id="row23" class="top18"></span><span id="row22" class="bottom18 gap"></span>
       			<span id="row21" class="top18"></span><span id="row20" class="bottom18 gap"></span>
       			<span id="row19" class="top18"></span><span id="row18" class="bottom18 gap"></span>
       			<span id="row17" class="top18"></span><span id="row16" class="bottom18 gap"></span>
       			<span id="row15" class="top18"></span><span id="row14" class="bottom18 gap"></span>
       			<span id="row13" class="top18"></span><span id="row12" class="bottom18 gap"></span>
       			<span id="row11" class="top18"></span><span id="row10" class="bottom18 gap"></span>
       			<span id="row9" class="top18"></span><span id="row8" class="bottom18"></span>
       			<span id="row7" class="top11"></span><span id="row6" class="bottom11 gap"></span>
       			<span id="row5" class="top11"></span><span id="row4" class="bottom11 gap"></span>
       			<span id="row3" class="top11"></span><span id="row2" class="bottom11 gap"></span>
       		</div>
       	</div>  
</body>
