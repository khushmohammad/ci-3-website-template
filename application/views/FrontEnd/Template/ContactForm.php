<?php


// echo "<pre>";
// echo print_r($_SESSION);

// echo "</pre>";


// if (!empty($_SESSION['error'])) {
//     echo print_r($_SESSION['error']);
//     //echo "khush";
// }


?>
<form id="ContactForm" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="DealerName" class="form-label">Dealer Name</label>
                <input type="text" class="form-control" value="<?php echo set_value('DealerName'); ?>" name="DealerName" id="DealerName" placeholder="Enter Dealer Name">

                <!-- <?php
                        if (!empty($_SESSION['error']['DealerName'])) {
                            echo " <div class='text-danger py-2 input-error'> " . $_SESSION['error']['DealerName'] . "</div> ";
                        }
                        ?> -->
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo set_value('PhoneNumber'); ?>" name="PhoneNumber" id="PhoneNumber" placeholder="Enter Phone Number">

            </div>

        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="LicenseNo" class="form-label">License No</label>
                <input type="text" class="form-control" value="<?php echo set_value('LicenseNo'); ?>" name="LicenseNo" id="LicenseNo" placeholder="Enter License No">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="IssueDate" class="form-label">Issue Date </label>
                <input type="text" class="form-control" value="<?php echo set_value('IssueDate'); ?>" name="IssueDate" id="IssueDate" placeholder="Enter Issue Date">
            </div>

            <!-- <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                                <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div> -->
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="ExpiryDateId" class="form-label">Expiry Date </label>
                <input type="text" class="form-control" value="<?php echo set_value('ExpiryDate'); ?>" name="ExpiryDate" id="ExpiryDateId" placeholder="Enter Expiry Date">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="LicenseIssueBy" class="form-label">License Issue By</label>
                <input type="text" class="form-control" value="<?php echo set_value('LicenseIssueBy'); ?>" name="LicenseIssueBy" id="LicenseIssueBy" placeholder="Enter License Issue By">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" value="<?php echo set_value('Email'); ?>" name="Email" id="Email" placeholder="abc@email.com">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" value="<?php echo set_value('Address'); ?>" name="Address" id="Address" placeholder="Enter Address">
            </div>
        </div>


        <div class="col-xs-12 col-lg-6">
            <div class="">
                <label for="Pincode" class="form-label">Pincode</label>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="311407" name="Pincode" id="Pincode" placeholder="Enter Pincode">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary input-group-text" id="basic-addon2" onclick="get_details()">Get City</button>
                </div>
            </div>


        </div>
        <div class="col-md-6">
            <!-- <div class="mb-3">
                <label for="City" class="form-label">City</label>
                <input type="text" class="form-control"  name="City" id="City" placeholder="Enter City" readonly>
            </div> -->
            <div class="mb-3">
                <label for="City" class="form-label">City/Village</label>
                <select class="form-select" name="City" aria-label="Default select example" id="City">
                    <option selected>Select City/Village</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="State" class="form-label">State</label>
                <input type="text" class="form-control" value="<?php echo set_value('State'); ?>" name="State" id="State" placeholder="Enter State" readonly>
            </div>
            <!-- <label for="State" class="form-label">State</label>
            <select class="form-select" name="State" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select> -->
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="District" class="form-label">District</label>
                <input type="text" class="form-control" value="<?php echo set_value('District'); ?>" name="District" id="District" placeholder="Enter District" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Captcha</label>
                    <br>
                    <?php echo $captcha_image; ?>
                </div>
                <div class="mb-3">
                    <label for="City" class="form-label">Captcha</label>
                    <input type="text" name="captcha" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div id="formSuccess" class="alert  alert-success  d-none my-4" role="alert">
            </div>
            <button type="submit" class="btn bg-danger text-light">Send</button>
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

        $( "#IssueDate" ).datepicker({ maxDate: 0 } );
        $( "#IssueDate" ).datepicker( "option", "dateFormat","dd-mm-yy");
        $( "#ExpiryDateId" ).datepicker({ minDate: 0 } );
        $( "#ExpiryDateId" ).datepicker( "option", "dateFormat","dd-mm-yy");
        //  console.log();
        $("#ContactForm").submit(function(e) {

            e.preventDefault();


            //var DealerName = JSON.stringify($("input[name='DealerName']").val());

            $.ajax({
                type: "POST",
                url: '<?php echo site_url(); ?>FrontEndControllers/Pages/SubmitContactForm',
                dataType: "json",
                data: $("#ContactForm").serialize(),
                success: function(data) {
                    // console.log(data);
                    if ($.isEmptyObject(data.error)) {
                        $(".print-error-msg").css('display', 'none');
                        $("#formSuccess").removeClass('d-none').html(data.success);
                        setTimeout(() => {
                            $("#formSuccess").addClass('d-none');
                        }, 3000);
                        $('#ContactForm')[0].reset();

                    } else {
                        $('#exampleModal').modal('show');
                        $(".print-error-msg").css('display', 'block');
                        $(".print-error-msg").html(data.error);
                        //  $("#ContactForm :input").css("border-color", "red")

                    }

                },
                error: function(xhr, status, error) {
                    console.error(xhr, status, error);
                }
            });


        });
    });

    function get_details() {

        var pincode = jQuery('#Pincode').val();
        if (pincode == '') {

            $('#District').val('');
            $('#State').val('');
            $('#City').empty().append(
                $('<option></option>').val("").html("Select City/Village")
            );
        } else {
            $.ajax({
                url: '<?php echo site_url(); ?>FrontEndControllers/Pages/getAddress',
                type: 'post',
                data: 'pincode=' + pincode,
                success: function(data) {
                    if (data == 'no') {
                        alert('Wrong Pincode');
                        $('#District').val('');
                        $('#State').val('');
                        $('#City').empty().append(
                            $('<option></option>').val("").html("Select City/Village")
                        );
                    } else {
                        $('#City').empty().append(
                            $('<option></option>').val("").html("Select City/Village")
                        );
                        var getData = $.parseJSON(data);
                        var finalObj = {};
                        for (var i = 0; i < getData.VillageList.length; ++i) {
                            finalObj[i] = getData.VillageList[i];
                        }
                        var mySelect = $('#City');
                        $.each(finalObj, function(val, text) {

                            console.log(text.Name, text.Name);
                            mySelect.append(
                                $('<option></option>').val(text.Name).html(text.Name)
                            );
                        });

                        // $('#City').val(getData.City);
                        //$('#City').val(getData.VillageList);
                        $('#State').val(getData.State);
                        $('#District').val(getData.District);
                    }
                }
            });
        }
    }
</script>