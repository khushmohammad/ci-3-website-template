<div class="py-5 my-5 container px-4">

    <?php
    $url = $this->uri->uri_string();



    ?>
    <?php
    $this->load->view('FrontEnd/Template/ContactForm');
    ?>
    <!-- <div class="row">
        <div class="col-sm-12">

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
                            <input type="text" class="form-control" value="<?php echo $Phone_Number; ?>" name="PhoneNumber" id="PhoneNumber" placeholder="Enter Phone Number">

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="Email" class="form-control" value="<?php echo $Email; ?>" name="Email" id="Email" placeholder="abc@email.com">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="LicenseNo" class="form-label">License No</label>
                            <input type="text" class="form-control" value="<?php echo $License_No; ?>" name="LicenseNo" id="LicenseNo" placeholder="Enter License No">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="IssueDate" class="form-label">Issue Date </label>
                            <input type="text" class="form-control" value="<?php echo $Issue_Date; ?>" name="IssueDate" id="IssueDate" placeholder="Enter Issue Date">
                        </div>

                       
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ExpiryDateId" class="form-label">Expiry Date </label>
                            <input type="text" class="form-control" value="<?php echo $Expiry_Date; ?>" name="ExpiryDate" id="ExpiryDateId" placeholder="Enter Expiry Date">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="LicenseIssueBy" class="form-label">License Issue Authority</label>
                            <input type="text" class="form-control" value="<?php echo $License_Issue_by; ?>" name="LicenseIssueBy" id="LicenseIssueBy" placeholder="EnterLicense Issue By">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" value="<?php echo $Address; ?>" name="Address" id="Address" placeholder="Enter Address">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="Pincode" class="form-label">Pincode</label>
                            <input type="text" class="form-control" value="<?php echo $Pincode; ?>" name="Pincode" id="Pincode" placeholder="Enter Pincode">
                        </div>

                    </div>
                    <div class="col-md-6">
                     
                        <label for="State" class="form-label">State</label>
                        <select class="form-select" name="State" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="District" class="form-label">District</label>
                            <input type="text" class="form-control" value="<?php echo $District; ?>" name="District" id="District" placeholders="Enter District">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" <?php echo $City; ?> name="City" id="City" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-12">


                        <div class="alert alert-danger print-error-msg my-2" style="display:none"></div>
                        <div id="formSuccess" class="alert  d-none my-4" role="alert">

                        </div>

                        <button type="submit" class="btn bg-danger text-light">Send</button>
                    </div>

                </div>
            </form>
        </div>
    </div> -->
</div>