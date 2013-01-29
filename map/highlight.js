$(document).ready(function(){
		row = '#row' + row;
		$(row).delay(800).animate({'backgroundColor' : '#FF4105'},
			function() {
    			$(this).css('border', '1px solid #FF4105');
  		});
});