$(document).ready(function() {
  $('#batch-form').submit(function() {
    $('.loading').fadeIn();
    $('#results textarea').html('');
    var barcodes = $("#barcodes").val().split("\n");
    //var barcodee_array = barcodes.split(' ');
    $.ajax({        
       type: "POST",
       url: www + "api/locate/batch-barcode",
       data: {barcodes: barcodes},
       success: function(data) {
            var text = data.replace(/<br>/gi,"\n");
            $('#results textarea').html(text); 
            $('.loading').fadeOut();
       }
    }); 
    
    return false;
  });
    $('#batch-form-callno').submit(function() {
    $('.loading-callno').fadeIn();
    $('#results-callno textarea').html('');
    var items = $("#items").val().split("\n");
    $.ajax({        
       type: "POST",
       url: www + "api/locate/batch-call-number",
       data: {items: items},
       success: function(data) {
            var text = data.replace(/<br>/gi,"\n");
            $('#results-callno textarea').html(text); 
            $('.loading-callno').fadeOut();
       }
    }); 
    
    return false;
  });
});