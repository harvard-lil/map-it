$(document).ready(function(){
  var multipleRows = new Array();
  if(row.indexOf(":") !== -1) {
    multipleRows = row.split(":");
  }
  else {
    multipleRows[0] = row;
  }
  $.each(multipleRows, function( key, value ) {
		rowID = '#row' + value;
		$(rowID).delay(800).animate({'backgroundColor' : '#FF4105'},
			function() {
    			$(this).css('border', '1px solid #FF4105');
  		});
  	});
});