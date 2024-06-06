// DataTable 
$(document).ready(function () {
    $('#example').DataTable({
        rowReorder: true,
        pagingType: 'simple_numbers',
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        }
        // "searching": false,
    } );
    });

