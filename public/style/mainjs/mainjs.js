/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var colFilter = data[2].split('/');
        var minAux = $('#min').val().split('/');
        var maxAux = $('#max').val().split('/');

        var min = Date.parse(minAux[2]+'-'+minAux[1]+'-'+minAux[0]);
        var max = Date.parse(maxAux[2]+'-'+maxAux[1]+'-'+maxAux[0]);
        var age = Date.parse( colFilter[2]+'-'+colFilter[1]+'-'+colFilter[0] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);

$(document).ready(function() {
    $('#example').DataTable();
} );

$(document).ready(function() {
    $('#example1').DataTable();
} );

$(document).ready(function() {
    $('#example2').DataTable();
} );


$(document).ready(function() {
    var table = $('#dtable').DataTable();

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').change( function() {
        table.draw();
    } );


    // filter foot
    $('#min, #max').datepicker({ dateFormat: 'dd/mm/yy' });
    // Setup - add a text input to each footer cell
    $('#dtable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#dtable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                 that.search( this.value ).draw();
            }
        } );
    } );






   


    //upload
    var $mblupload = $('#mblupload'); 

    $mblupload.fileupload({      
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#mblprogress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function (e, data) {
        }
    });

    //upload
    var $hblupload = $('#hblupload'); 

    $hblupload.fileupload({      
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#hblprogress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function (e, data) {
             $('#upload-success').removeClass('hide').hide().slideDown('fast');
        }
    });




    //upload
    var $termoupload = $('#termoupload'); 

    $termoupload.fileupload({      
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#termoprogress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function (e, data) {
        }
    });

});