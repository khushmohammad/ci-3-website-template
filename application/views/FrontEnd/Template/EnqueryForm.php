<?php
//$url = $this->uri->uri_string();

// echo "<pre>";
// echo print_r($_SESSION);
// echo "</pre>";

$name = empty($EnqueryData['enquery']['name']) ? "" : $EnqueryData['enquery']['name'];
$id = empty($EnqueryData['enquery']['id']) ? "" : $EnqueryData['enquery']['id'];
$email = empty($EnqueryData['enquery']['email']) ? "" : $EnqueryData['enquery']['email'];
$contact = empty($EnqueryData['enquery']['contact']) ? "" : $EnqueryData['enquery']['contact'];
$message = empty($EnqueryData['enquery']['message']) ? "" : $EnqueryData['enquery']['message'];
//die();


?>
<form id="EnqueryForm" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo  $name; ?>" name="Name" id="Name" placeholder="Enter Name">
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
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo  $contact; ?>" name="PhoneNumber" id="PhoneNumber" placeholder="Enter Phone Number">

            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" value="<?php echo  $email; ?>" name="Email" id="Email" placeholder="abc@email.com">
            </div>

        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label for="Message" class="form-label">Message</label>
                <textarea class="form-control" id="Message" name="Message" rows="3"> <?php echo  $message; ?> </textarea>

            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Captcha</label>
                    <br>
                    <?php echo $enquery_captcha_image; ?>
                </div>
                <div class="mb-3">
                    <label for="City" class="form-label">Captcha</label>
                    <input type="text" name="captcha" class="form-control" required>
                </div>
            </div>
        </div>


        <div class="col-12">
            <?php
            echo $id != "" ? "<input type='hidden' name='id' id='id' value=" . $id . " required>" : "";
            ?>
            <div id="formSuccess" class="alert  alert-success  d-none my-4" role="alert">
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

        $("#EnqueryForm").submit(function(e) {

            e.preventDefault();

            let Datasysid = $("#id").val();
            if (Datasysid != undefined && Datasysid != "") {
                console.log(Datasysid);

                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url(); ?>BackendControllers/DashboardController/UpdateEnquery/',
                    dataType: "json",
                    data: $("#EnqueryForm").serialize(),
                    success: function(data) {
                        // console.log(data);
                        if ($.isEmptyObject(data.error)) {
                            $(".print-error-msg").css('display', 'none');
                            $("#formSuccess").removeClass('d-none').html(data.success);                           
                            setTimeout(() => {
                                $("#formSuccess").addClass('d-none');

                            }, 3000);
                         //   $('#EnqueryForm')[0].reset();
                            

                        } else {
                            $('#exampleModal').modal('show');
                            $(".print-error-msg").css('display', 'block');
                            $(".print-error-msg").html(data.error);
                            //  $("#EnqueryForm :input").css("border-color", "red")

                        }

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr, status, error);
                    }
                });
            } else {



                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url(); ?>FrontEndControllers/Pages/SubmitEnqueryForm',
                    dataType: "json",
                    data: $("#EnqueryForm").serialize(),
                    success: function(data) {

                        if ($.isEmptyObject(data.error)) {
                            $(".print-error-msg").css('display', 'none');
                            $("#formSuccess").removeClass('d-none').html(data.success);
                            setTimeout(() => {
                                $("#formSuccess").addClass('d-none');
                            }, 3000);
                            $('#EnqueryForm')[0].reset();

                        } else {
                            $('#exampleModal').modal('show');
                            $(".print-error-msg").css('display', 'block');
                            $(".print-error-msg").html(data.error);
                            //  $("#EnqueryForm :input").css("border-color", "red")

                        }

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr, status, error);
                    }
                });

            }
        });
    });
</script>