$(document).ready(function() {
  $('#check').submit(function() {
    var barcode = $("#barcode").val();
    $.getJSON("http://librarylab.law.harvard.edu/map-it/api/locate/barcode", {barcode: barcode}, function(data) {
      $("#results").html("<p>" + data.library + " " + data.floor + " " + data.range + "</p>");
    });
    return false;
  });
});