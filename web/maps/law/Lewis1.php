<include href="{{ @header }}" />
<style>
#map1 {
	width:400px;
	height: 550px;
}

.print-map {
  position:relative;
  display:inline;
  z-index:2;
}

.map {
  position:relative;
  z-index:3;
  margin-top:-550px;
}

.clear {
  clear:both;
}

.main {
  padding:34px 15px 10px 8px;
  width:390px;
  position:relative;
  float:left;
}

.hallway {
  padding:47px 15px 10px 85px;
  width:300px;
  position:relative;
  float:left;
}

.column1 {
	padding:15px 15px 10px 8px;
	width:145px;
	float:left;
}

.column2 {
	padding: 15px 0px 10px 45px;
	width:145px;
	float:left;
}

.column3 {
	padding:0px 0px 10px 0px;
	width:78px;
	float:left;
}

.column4 {
	padding:0px 0px 10px 82px;
	width:78px;
	float:left;
}

.near-stairs {
 width:45px;
 float:left;
}

.stairs {
  float:left;
  width:80px;
}

.top2 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 34px;
	margin-top:4px;
}

.stairs .top2 {
  margin-left:38px;
}

.bottom2 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 34px;
	margin-bottom:12px;
}

.top3 {
	border: 1px solid #6a8012;
	height: 6px;
	width: 50px;
	margin-left:8px;
	margin-top:65px;
}

.top4 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 70px;
	margin-left:20px;
	margin-top:4px;
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
	margin-bottom:12px;
}

.top6 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 105px;
	margin-left:30px;
}

.top7 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 115px;
	margin-left:20px;
}

.bottom7 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 115px;
	margin-bottom:12px;
	margin-left:20px;
}

.less-space {
  margin-bottom:5px;
}

.horizontal1 {
  margin-left:0px;
}

.top8 {
	border: 1px solid #6a8012;
	height: 7px;
	width: 135px;
}

.bottom8 {
	border-right: 1px solid #6a8012;
	border-left: 1px solid #6a8012;
	border-bottom: 1px solid #6a8012;
	height: 7px;
	width: 135px;
	margin-bottom:12px;
}

.left3 {
	border: 1px solid #6a8012;
	height: 50px;
	width: 6px;
}

</style>
</head>
<body>
  <div class="container">
    <include href="{{ @headermap }}" />
    <img src="/map-it/images/law/law-ILS1.jpg" alt="Law ILS1" class="print-map" />
        <div id="map1" class="map">
          <div class="main">
            <div class="column1">
              <span id="row11" class="top8"></span><span id="row10" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row8" class="top8"></span><span id="row7" class="bottom8"></span>
              <div class="near-stairs">
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
                <span id="row8" class="top2"></span><span id="row7" class="bottom2"></span>
              </div>
              <div class="stairs">
                <span id="row8" class="top2"></span>
                <span id="row8" class="left3"></span>
                <span id="row8" class="top3"></span>
              </div>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row5" class="top8"></span><span id="row4" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7"></span><span id="row10" class="bottom7 less-space"></span>
              <span id="row2" class="top6"></span>
            </div>
            <div class="column2">
            <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row11" class="top7 horizontal1"></span><span id="row10" class="bottom7 horizontal1"></span>
              <span id="row2" class="top8"></span><span id="row1" class="bottom8"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row21" class="top5"></span><span id="row22" class="bottom5"></span>
              <span id="row15" class="top5"></span><span id="row16" class="bottom5"></span>
              <span id="row15" class="top4"></span>
            </div>
       		</div>
       	</div>  
  </div>
</body>