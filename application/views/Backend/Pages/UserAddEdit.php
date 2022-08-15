<div class="py-5 my-5 container px-4">

    <?php
    $url = $this->uri->uri_string();
    ?>
    <?php
    $url = $this->uri->uri_string();

    // echo "<pre>";
    // echo print_r($users);
    // echo "</pre>";

    $U_USERNAME = empty($users['U_USERNAME']) ? "" : $users['U_USERNAME'];
    $U_ID = empty($users['U_ID']) ? "" : $users['U_ID'];
    $U_PASSWORD  = empty($users['U_PASSWORD']) ? "" : $users['U_PASSWORD'];
    $U_CONTACT  = empty($users['U_CONTACT']) ? "" : $users['U_CONTACT'];
    $U_EMAIL  = empty($users['U_EMAIL']) ? "" : $users['U_EMAIL'];
    //die();


    ?>
    <form id="UserFormAddEdit" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="Name" class="form-label">User Name</label>
                    <input type="text" class="form-control" <?php echo $U_ID ? "readonly" : "";  ?> value="<?php echo  $U_USERNAME; ?>" name="U_USERNAME" id="Name" placeholder="Enter Name">
                </div>
            </div>
            <!-- <div class="col-md-6">
            <div class="mb-3">
                <label for="LastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" value="" name="Name" id="LastName" placeholder="Enter Last Name">

            </div>

        </div> -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="U_CONTACT" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" value="<?php echo  $U_CONTACT; ?>" name="U_CONTACT" id="U_CONTACT" placeholder="Enter Phone Number">

                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="U_EMAIL" class="form-label">Email</label>
                    <input type="Email" class="form-control" value="<?php echo  $U_EMAIL; ?>" name="U_EMAIL" id="U_EMAIL" placeholder="abc@email.com">
                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="Password" class="form-label">New Password</label>
                    <input type="text" class="form-control" value="" name="U_PASSWORD" id="Password" placeholder="Enter Password">
                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="text" class="form-control" value="" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password">
                </div>

            </div>

            <div class="col-12">
                <div id="messagePassword" class="mb-4">
                </div>
                <?php
                echo $U_ID != "" ? "<input type='hidden' name='id' id='id' value=" . $U_ID . " required>" : "";
                ?>
                <div id="UserformSuccess" class="alert  alert-success  d-none my-4" role="alert">
                </div>
                <button type="submit" class="btn bg-danger text-light">Send Message</button>
            </div>
        </div>
    </form>




    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Somthing Wrong</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger print-error-msg my-2" style="display:none"></div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#Password, #ConfirmPassword').on('keyup', function() {
                if ($('#Password').val() == $('#ConfirmPassword').val()) {
                    $('#messagePassword').html('Matching').css('color', 'green');
                } else
                    $('#messagePassword').html('Not Matching').css('color', 'red');
            });


            $("#UserFormAddEdit").submit(function(e) {

                e.preventDefault();

                //let Datasysid = $("#id").val();

                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url(); ?>BackendControllers/DashboardController/SubmitUserFormAddEdit/',
                    dataType: "json",
                    data: $("#UserFormAddEdit").serialize(),
                    success: function(data) {
                        // console.log(data);
                        if ($.isEmptyObject(data.error)) {
                            $(".print-error-msg").css('display', 'none');
                            $("#UserformSuccess").removeClass('d-none').html(data.success);
                            window.location.replace("<?php echo site_url(); ?>/admin/users");

                            setTimeout(() => {
                                $("#UserformSuccess").addClass('d-none');

                            }, 3000);
                            //   $('#UserFormAddEdit')[0].reset();


                        } else {
                            $('#exampleModal').modal('show');
                            $(".print-error-msg").css('display', 'block');
                            $(".print-error-msg").html(data.error);
                            //  $("#UserFormAddEdit :input").css("border-color", "red")

                        }

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr, status, error);
                    }
                });

            });
        });
    </script>

</div>