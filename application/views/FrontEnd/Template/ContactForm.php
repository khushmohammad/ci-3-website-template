<?php


// echo "<pre>";
// echo print_r($_SESSION);

// echo "</pre>";


// if (!empty($_SESSION['error'])) {
//     echo print_r($_SESSION['error']);
//     //echo "khush";
// }
// echo "<pre>";
// echo print_r($dealerData["dealer"]);
// echo "</pre>";

$Dealer_Name = empty($dealerData["dealer"]['Dealer_Name']) ? "" : $dealerData["dealer"]['Dealer_Name'];
$id = empty($dealerData["dealer"]['id']) ? "" : $dealerData["dealer"]['id'];
$Address = empty($dealerData["dealer"]['Address']) ? "" : $dealerData["dealer"]['Address'];
$City = empty($dealerData["dealer"]['City']) ? "" : $dealerData["dealer"]['City'];
$District = empty($dealerData["dealer"]['District']) ? "" : $dealerData["dealer"]['District'];
$State = empty($dealerData["dealer"]['State']) ? "" : $dealerData["dealer"]['State'];
$Phone_Number = empty($dealerData["dealer"]['Phone_Number']) ? "" : $dealerData["dealer"]['Phone_Number'];
$Email = empty($dealerData["dealer"]['Email']) ? "" : $dealerData["dealer"]['Email'];
$License_No = empty($dealerData["dealer"]['License_No']) ? "" : $dealerData["dealer"]['License_No'];
$Issue_Date = empty($dealerData["dealer"]['Issue_Date']) ? "" : $dealerData["dealer"]['Issue_Date'];
$Expiry_Date = empty($dealerData["dealer"]['Expiry_Date']) ? "" : $dealerData["dealer"]['Expiry_Date'];
$License_Issue_by = empty($dealerData["dealer"]['License_Issue_by']) ? "" : $dealerData["dealer"]['License_Issue_by'];
$Pincode = empty($dealerData["dealer"]['Pincode']) ? "" : $dealerData["dealer"]['Pincode'];


?>
<form id="ContactForm" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="DealerName" class="form-label">Dealer Name</label>
                <input type="text" class="form-control" value="<?php echo  $Dealer_Name; ?>" name="DealerName" id="DealerName" placeholder="Enter Dealer Name">

            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo  $Phone_Number; ?>" name="PhoneNumber" id="PhoneNumber" placeholder="Enter Phone Number">

            </div>

        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="LicenseNo" class="form-label">License No</label>
                <input type="text" class="form-control" value="<?php echo  $License_No; ?>" name="LicenseNo" id="LicenseNo" placeholder="Enter License No">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="LicenseIssueBy" class="form-label">License Issue By</label>
                <input type="text" class="form-control" value="<?php echo  $License_Issue_by; ?>" name="LicenseIssueBy" id="LicenseIssueBy" placeholder="Enter License Issue By">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="IssueDate" class="form-label">Issue Date </label>
                <input type="text" class="form-control" value="<?php echo  $Issue_Date; ?>" name="IssueDate" id="IssueDate" placeholder="Enter Issue Date">
            </div>


        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="ExpiryDateId" class="form-label">Expiry Date </label>
                <input type="text" class="form-control" value="<?php echo  $Expiry_Date; ?>" name="ExpiryDate" id="ExpiryDateId" placeholder="Enter Expiry Date">
            </div>

        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" value="<?php echo  $Email; ?>" name="Email" id="Email" placeholder="abc@email.com">
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" value="<?php echo  $Address; ?>" name="Address" id="Address" placeholder="Enter Address">
            </div>
        </div>


        <div class="col-xs-12 col-lg-6">
            <div class="">
                <label for="Pincode" class="form-label">Pincode</label>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo  $Pincode; ?>" name="Pincode" id="Pincode" placeholder="Enter Pincode">
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
                    <?php echo  $City != "" ? "<option selected value=" . $City . "> $City </option>" :  "<option selected>Select City/Village</option>"; ?>

                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="State" class="form-label">State</label>
                <input type="text" class="form-control" value="<?php echo  $State; ?>" name="State" id="State" placeholder="Enter State" readonly>
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
                <input type="text" class="form-control" value="<?php echo  $District; ?>" name="District" id="District" placeholder="Enter District" readonly>
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
            <?php
            echo $id != "" ? "<input type='hidden' name='id' id='id' value=" . $id . " required>" : "";
            ?>
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

        $("#IssueDate").datepicker({
            maxDate: 0
        });

        
     
        $("#IssueDate").datepicker("option", "dateFormat", "dd-mm-yy");
        $("#ExpiryDateId").datepicker({
            minDate: 0
        });
        $("#IssueDate").datepicker('setDate', '<?php echo $Issue_Date; ?>');

        $("#ExpiryDateId").datepicker("option", "dateFormat", "dd-mm-yy");
        //  console.log();
        $("#ExpiryDateId").datepicker('setDate', '<?php echo $Expiry_Date; ?>');

        $("#ContactForm").submit(function(e) {

            e.preventDefault();
            let Datasysid = $("#id").val();
            if (Datasysid != undefined && Datasysid != "") {
                console.log(Datasysid);

                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url(); ?>BackendControllers/DashboardController/UpdateContactForm/',
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
                           // $('#ContactForm')[0].reset();

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

            } else {

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

            }



            //var DealerName = JSON.stringify($("input[name='DealerName']").val());



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