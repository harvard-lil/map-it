$(document).ready(function() {
  $('#check').submit(function() {
    var barcode = $("#barcode").val();
    $.getJSON(www + "api/locate/barcode", {barcode: barcode}, function(data) {
      $("#results").html("<p>" + data.library + " " + data.floor + " " + data.range + "</p>");
    });
    return false;
  });
});