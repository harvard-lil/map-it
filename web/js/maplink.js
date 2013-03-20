function stacksMap(callno,callnodisplay,barcode){
	
	var lawApiUrl = 'http://librarylab.law.harvard.edu/map-it/api/locate/';
		
	$.ajax({
		url: lawApiUrl + library + '/' + collection + '/' + callno ,		
		dataType: 'jsonp',
		success: function(data) {
			//alert('success: ' + data[0].maplink);    
			//alert('success:' + "_" + collname + "_" + callno;    
			//window.open(data[0].maplink);  
			spanid = 'stacksmapurl' + barcode
			floor = data[0]['floor'];
			range = data[0]['range'];
			floordisplay = floor.replace('E', ' East');
			floordisplay = floordisplay.replace('W', ' West');			
			document.getElementById(spanid).innerHTML='<a target="_blank" href="' + data[0].maplink  + '">' + floordisplay + ' Row ' + range + '</a>' ;
			//document.getElementsByClassName("stacksmapurl").innerHTML='<a target="_blank" href="' + data[0].maplink  + '">' + floordisplay + ' Row ' + range + '</a>' ;
			},
		error: function(data, error, thrown)  {
			alert("error: " + callno + " " + thrown);
			}
	});
};