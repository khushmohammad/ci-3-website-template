
$(document).ready(function () {
    $('#datatablesSimple').DataTable({
        scrollY: '50vh',
        scrollCollapse: false,
        responsive: true,
        columnDefs: [
            { responsivePriority:1, targets: 0 },
            { responsivePriority: 13, targets: -1 }
        ]
        // responsive: {
        //     details: {
        //         display: $.fn.dataTable.Responsive.display.modal( {
        //             header: function ( row ) {
        //                 var data = row.data();
        //                 return 'Details for '+data[0]+' '+data[1];
        //             }
        //         } ),
        //         renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
        //             tableClass: 'table'
        //         } )
        //     }
        // }
      
    });

});