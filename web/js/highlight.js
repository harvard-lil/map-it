$(document).ready(function(){
  var multipleRows = new Array();
  var $paneTarget = $('body');
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

  	//$paneTarget.stop().scrollTo( '#row' + multipleRows[0], 800, {offset: {top:height, left:0} } //);
  	$paneTarget.stop().scrollTo( '#row' + multipleRows[0], 800, {offset: {top:-100, left:0}});
});