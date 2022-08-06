<div id="layoutSidenav_content" class="pt-5">
    <?php
    $url = $this->uri->uri_string();

    // echo "<pre>";
    // echo print_r($user);
    // echo "</pre>";
    ?>
    
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">DealerView List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active"><?php echo $url; ?></li>
            </ol>

            <div class="card mb-4">

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Edit</th>


                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            foreach ($user as $value) {
                                echo " <tr>";
                                echo  "<td>" .  $value["U_USERNAME"]  . "</td>";
                                echo  "<td>" .  $value["U_EMAIL"]  . "</td>";
                                echo  "<td>" .  $value["U_CONTACT"]  . "</td>";
                                echo  "<td>" .  $value["U_ACTIVE"]  . "</td>";

                                echo ' <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a id="Edit" class="dropdown-item ButtonId" data-bs-toggle="modal" data-bs-target="#User_ViewAddEditModal" href="#">Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Delete</a>
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