<div id="layoutSidenav_content" class="pt-5">

    <?php
    $url = $this->uri->uri_string();

    // echo "<pre>";
    // echo print_r($dealer);
    // echo "</pre>";


    ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Enquiries</h1>
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?php echo $url; ?></li>

                    </ol>
                </div>
                <!-- <div class="col text-center">
                    <a type="button" class="btn btn-primary float-md-end" href="<?php echo site_url(); ?>admin/AddEditDealer">Add</a>
                </div> -->
            </div>

            <div class="card mb-4">

                <div class="card-body">
                    <table id="Enquerydatatables" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                            <tr>
                                <th>S No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Mesage</th>

                                <th>Edit</th>
                            </tr>

                            </tr>
                        </thead>

                        <tbody>



                            <?php
                            foreach ($dealer as $value) {
                                echo " <tr>";
                                echo  "<td>" .  $value["id"]  . "</td>";
                                echo  "<td>" .  $value["name"]  . "</td>";
                                echo  "<td>" .  $value["email"]  . "</td>";
                                echo  "<td>" .  $value["contact"]  . "</td>";
                                echo  "<td>" .  $value["message"]  . "</td>";

                                echo ' <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a id="Edit" class="dropdown-item ButtonId"  href="' . site_url() . 'admin/AddEditEnquery/' . $value["id"] . '">Edit</a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" id="Delete" onclick="DeleteEnquery(this)"  dataId=' . $value["id"] . ' >Delete</button>
                                        </li>
                                    </ul>
                                </div>
                            </td>';
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<script type="text/javascript">
    var table = $('#Enquerydatatables').DataTable({
        scrollY: '50vh',
        scrollCollapse: false,
        responsive: true,
        columnDefs: [{
                responsivePriority: 1,
                targets: 0
            },
            {
                responsivePriority: 13,
                targets: -1
            }
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

    })

    function DeleteEnquery(e) {
        console.log(e.attributes.dataid.value, "ee");

        var Id = e.attributes.dataid.value;

        $.ajax({
            type: "POST",
            url: '<?php echo site_url(); ?>BackendControllers/DashboardController/DeleteEnquery',

            dataType: "json",
            data: {
                ID: Id
            },
            encode: true,
            success: function(data) {
                console.log(data);

                //.  $('#Dealerdatatables').DataTable().ajax.reload();
                setTimeout(() => {
                    // table.DataTable().rows().draw();
                    location.reload();
                }, 500);

            }
        });

        //var table = $('#Dealerdatatables').dataTable();


        //$('#datatablesSimple').DataTable().ajax.reload(null, false)

    }
</script>