$(document).ready(function() {
  var library = $("#selected-library option:selected").text();
  var oTable = $('#example').dataTable( {
    "fnInitComplete": function ( oSettings ) {
      $('#selected-library').after($('div.DTTT_container')[0]);
    },
    "sDom": 'T<"clear">lfr<"clear">ptip',
    "oTableTools": {
      "aButtons": [
        {
          "sExtends": "csv",
          "mColumns": [1, 2, 3, 4]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1, 2, 3, 4],
          "sPdfMessage": library
        },
        {
          "sExtends": "print",
          "mColumns": [1, 2, 3, 4]
        }
      ]
    },
    "sPaginationType": "full_numbers",
    "bProcessing": true,
    "iDisplayLength": 25,
    "aoColumnDefs": [{ "sClass": "id", "bSearchable": false, "aTargets": [ 0 ] }, { "sClass": "collection", "aTargets": [ 1 ] }, { "sClass": "floor", "aTargets": [ 2 ] }, { "sClass": "row", "aTargets": [ 3 ] }, { "sClass": "callno", "aTargets": [ 4 ] }, { "bVisible": false, "aTargets": [ 0 ] }],
    "aaSorting": [[2, "asc"], [3, "asc"]],
    "aoColumns": [null, null, null, { "sType": "natural" }, null, {"sTitle": "Delete", "fnRender": function(obj) {
      sReturn = "<a href='' class='delete-row'>X</a>";
      return sReturn;
    }}],
    "sAjaxSource": "http://librarylab.law.harvard.edu/map-it/api/admin/display/cab",
    "fnDrawCallback": function () {
      $('#example tbody td.callno').editable(function(value, settings) { 
        var position = oTable.fnGetPosition(this);
        id = oTable.fnGetData(position[0])[0];
        library = $("#selected-library option:selected").val();
        $.post("http://librarylab.law.harvard.edu/map-it/api/admin/update/callno", { library: library, id: id, callno: value, key: key });
        return(value);
      }, { 
        select    : true
      });
      
      $('#example tbody td.row').editable(function(value, settings) { 
        var position = oTable.fnGetPosition(this);
        id = oTable.fnGetData(position[0])[0];
        library = $("#selected-library option:selected").val();
        $.post("http://librarylab.law.harvard.edu/map-it/api/admin/update/row", { library: library, id: id, row: value, key: key });
        return(value);
      }, { 
        select    : true
      });
      
      $('#example tbody td.collection').editable(function(value, settings) { 
        var position = oTable.fnGetPosition(this);
        id = oTable.fnGetData(position[0])[0];
        library = $("#selected-library option:selected").val();
        $.post("http://librarylab.law.harvard.edu/map-it/api/admin/update/collection", { library: library, id: id, collection: value, key: key });
        return(value);
      }, { 
        select    : true
      });
      
      $('#example tbody td.floor').editable(function(value, settings) { 
        var position = oTable.fnGetPosition(this);
        id = oTable.fnGetData(position[0])[0];
        library = $("#selected-library option:selected").val();
        $.post("http://librarylab.law.harvard.edu/map-it/api/admin/update/floor", { library: library, id: id, floor: value, key: key });
        return(value);
      }, { 
        select    : true
      });
      
    }
  });
				
  $("#selected-library").change(function () {
    library = $(this).val();
    drawTable(library);
  });
        
  $('#add-row').submit(function (){
    params = $(this).serialize();
    library = $("#selected-library option:selected").val();
    params = params + '&library=' + library + '&key=' + key;
    $.post("http://librarylab.law.harvard.edu/map-it/api/admin/create/", params, function(data) {
      drawTable(library);
      //$(this)[0].reset();
    });
    return false;
  });
        
  $('tbody').on("click", "a.delete-row", function(e){
    var position = oTable.fnGetPosition($(this).parent()[0]);
    id = oTable.fnGetData(position[0])[0];
    var row = $(this).closest('tr');
    var nRow = row[0];
    library = $("#selected-library option:selected").val();
    $.post("http://librarylab.law.harvard.edu/map-it/api/admin/delete", { id: id, library: library, key : key }, function(data) {
      //drawTable(library);
      oTable.fnDeleteRow(nRow);
    });
    e.preventDefault();
  });
        
  function drawTable(library){
    oTable.fnReloadAjax("http://librarylab.law.harvard.edu/map-it/api/admin/display/" + library);
  }
});
			
$.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
{
    if ( typeof sNewSource != 'undefined' && sNewSource != null ) {
        oSettings.sAjaxSource = sNewSource;
    }
 
    // Server-side processing should just call fnDraw
    if ( oSettings.oFeatures.bServerSide ) {
        this.fnDraw();
        return;
    }
 
    this.oApi._fnProcessingDisplay( oSettings, true );
    var that = this;
    var iStart = oSettings._iDisplayStart;
    var aData = [];
  
    this.oApi._fnServerParams( oSettings, aData );
      
    oSettings.fnServerData.call( oSettings.oInstance, oSettings.sAjaxSource, aData, function(json) {
        /* Clear the old information from the table */
        that.oApi._fnClearTable( oSettings );
          
        /* Got the data - add it to the table */
        var aData =  (oSettings.sAjaxDataProp !== "") ?
            that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;
          
        for ( var i=0 ; i<aData.length ; i++ )
        {
            that.oApi._fnAddData( oSettings, aData[i] );
        }
          
        oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
          
        if ( typeof bStandingRedraw != 'undefined' && bStandingRedraw === true )
        {
            oSettings._iDisplayStart = iStart;
            that.fnDraw( false );
        }
        else
        {
            that.fnDraw();
        }
          
        that.oApi._fnProcessingDisplay( oSettings, false );
          
        /* Callback user function - for event handlers etc */
        if ( typeof fnCallback == 'function' && fnCallback != null )
        {
            fnCallback( oSettings );
        }
    }, oSettings );
};

(function() {
 
/*
 * Natural Sort algorithm for Javascript - Version 0.7 - Released under MIT license
 * Author: Jim Palmer (based on chunking idea from Dave Koelle)
 * Contributors: Mike Grier (mgrier.com), Clint Priest, Kyle Adams, guillermo
 * See: http://js-naturalsort.googlecode.com/svn/trunk/naturalSort.js
 */
function naturalSort (a, b) {
    var re = /(^-?[0-9]+(\.?[0-9]*)[df]?e?[0-9]?$|^0x[0-9a-f]+$|[0-9]+)/gi,
        sre = /(^[ ]*|[ ]*$)/g,
        dre = /(^([\w ]+,?[\w ]+)?[\w ]+,?[\w ]+\d+:\d+(:\d+)?[\w ]?|^\d{1,4}[\/\-]\d{1,4}[\/\-]\d{1,4}|^\w+, \w+ \d+, \d{4})/,
        hre = /^0x[0-9a-f]+$/i,
        ore = /^0/,
        // convert all to strings and trim()
        x = a.toString().replace(sre, '') || '',
        y = b.toString().replace(sre, '') || '',
        // chunk/tokenize
        xN = x.replace(re, '\0$1\0').replace(/\0$/,'').replace(/^\0/,'').split('\0'),
        yN = y.replace(re, '\0$1\0').replace(/\0$/,'').replace(/^\0/,'').split('\0'),
        // numeric, hex or date detection
        xD = parseInt(x.match(hre)) || (xN.length != 1 && x.match(dre) && Date.parse(x)),
        yD = parseInt(y.match(hre)) || xD && y.match(dre) && Date.parse(y) || null;
    // first try and sort Hex codes or Dates
    if (yD)
        if ( xD < yD ) return -1;
        else if ( xD > yD )  return 1;
    // natural sorting through split numeric strings and default strings
    for(var cLoc=0, numS=Math.max(xN.length, yN.length); cLoc < numS; cLoc++) {
        // find floats not starting with '0', string or 0 if not defined (Clint Priest)
        var oFxNcL = !(xN[cLoc] || '').match(ore) && parseFloat(xN[cLoc]) || xN[cLoc] || 0;
        var oFyNcL = !(yN[cLoc] || '').match(ore) && parseFloat(yN[cLoc]) || yN[cLoc] || 0;
        // handle numeric vs string comparison - number < string - (Kyle Adams)
        if (isNaN(oFxNcL) !== isNaN(oFyNcL)) return (isNaN(oFxNcL)) ? 1 : -1;
        // rely on string comparison if different types - i.e. '02' < 2 != '02' < '2'
        else if (typeof oFxNcL !== typeof oFyNcL) {
            oFxNcL += '';
            oFyNcL += '';
        }
        if (oFxNcL < oFyNcL) return -1;
        if (oFxNcL > oFyNcL) return 1;
    }
    return 0;
}
 
jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "natural-asc": function ( a, b ) {
        return naturalSort(a,b);
    },
 
    "natural-desc": function ( a, b ) {
        return naturalSort(a,b) * -1;
    }
} );
 
}());