<div id="layoutSidenav_content" class="pt-5">

    <?php
    $url = $this->uri->uri_string();

    // echo "<pre>";
    // echo print_r($dealer);
    // echo "</pre>";


    ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">DealerView List</h1>
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?php echo $url; ?></li>

                    </ol>
                </div>
                <div class="col text-center">
                    <a type="button" class="btn btn-primary float-md-end" href="<?php echo site_url(); ?>admin/AddEditDealer">Add</a>
                </div>
            </div>

            <div class="card mb-4">

                <div class="card-body">
                    <table id="Dealerdatatables" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                            <tr>
                                <th>S No</th>
                                <th>Dealer Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>License No</th>
                                <th>Issue Date</th>
                                <th>Expiry Date</th>
                                <th>License Issue by</th>
                                <th>Pincode</th>
                                <th>Edit</th>
                            </tr>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S No</th>
                                <th>Dealer Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>License No</th>
                                <th>Issue Date</th>
                                <th>Expiry Date</th>
                                <th>License Issue by</th>
                                <th>Pincode</th>
                                <th>Edit</th>
                            </tr>
                        </tfoot>
                        <tbody>



                            <?php
                            foreach ($dealer as $value) {
                                echo " <tr>";
                                echo  "<td>" .  $value["id"]  . "</td>";
                                echo  "<td>" .  $value["Dealer_Name"]  . "</td>";
                                echo  "<td>" .  $value["Address"]  . "</td>";
                                echo  "<td>" .  $value["City"]  . "</td>";
                                echo  "<td>" .  $value["District"]  . "</td>";
                                echo  "<td>" .  $value["State"]  . "</td>";
                                echo  "<td>" .  $value["Phone_Number"]  . "</td>";
                                echo  "<td>" .  $value["Email"]  . "</td>";
                                echo  "<td>" .  $value["License_No"]  . "</td>";
                                echo  "<td>" .  $value["Issue_Date"]  . "</td>";
                                echo  "<td>" .  $value["Expiry_Date"]  . "</td>";
                                echo  "<td>" .  $value["License_Issue_by"]  . "</td>";
                                echo  "<td>" .  $value["Pincode"]  . "</td>";

                                echo ' <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a id="Edit" class="dropdown-item ButtonId"  href="' . site_url() . 'admin/AddEditDealer/' . $value["id"] . '">Edit</a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" id="Delete" onclick="DeleteDealer(this)"  dataId=' . $value["id"] . ' >Delete</button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" id="Delete" onclick="SendFormDtoDealer(this)"  dataId=' . $value["id"] . ' >Send Form-D</button>
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
<!-- modal for crud -->
<div class="modal fade" id="User_ViewAddEditModal" tabindex="-1" aria-labelledby="User_ViewAddEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="User_ViewAddEditModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <section class="form-group">
                            <label>Name</label>
                            <input type="text" name="U_USERNAME" placeholder="Name" class="form-control form-control-sm">
                        </section>
                        <section class="form-group">
                            <label class="control-label">Gender</label>
                            <select name="U_GENDER" id="U_GENDER" class="selectpicker form-control form-control-sm" data-style="btn-white btn-sm" data-live-search="true">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </section>
                        <section class="form-group">
                            <label>country</label>
                            <input type="text" name="U_COUNTRY" placeholder="country" class="form-control form-control-sm">
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="form-group">
                            <label>address</label>
                            <input type="text" name="U_ADDRESS" placeholder="address" class="form-control form-control-sm">
                        </section>
                        <section class="contact form-group">
                            <label>contact</label>
                            <input type="text" name="U_CONTACT" id="U_CONTACT" placeholder="contact" class="form-control form-control-sm">
                        </section>
                        <section class="form-group">
                            <label>email</label>
                            <input type="text" name="U_EMAIL " placeholder="email" class="form-control form-control-sm">
                        </section>
                        <section class="form-group">
                            <label>password</label>
                            <input type="text" name=" U_PASSWORD" placeholder="password" class="form-control form-control-sm">
                        </section>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var table = $('#Dealerdatatables').DataTable({
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

    function DeleteDealer(e) {
        console.log(e.attributes.dataid.value, "ee");

        var Id = e.attributes.dataid.value;

        $.ajax({
            type: "POST",
            url: '<?php echo site_url(); ?>BackendControllers/DashboardController/DeleteDealer',

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

    function SendFormDtoDealer(e) {
        console.log(e.attributes.dataid.value, "ee");

        var Id = e.attributes.dataid.value;

        $.ajax({
            type: "POST",
            url: '<?php echo site_url(); ?>BackendControllers/DashboardController/SendFormDtoDealer',

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