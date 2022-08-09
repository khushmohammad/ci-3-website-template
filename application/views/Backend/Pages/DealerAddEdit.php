<div class="py-5 my-5 container">

    <?php
    $url = $this->uri->uri_string();

    // echo "<pre>";
    // echo print_r($dealer);
    // echo "</pre>";

    $Dealer_Name = empty($dealer['Dealer_Name']) ? "" : $dealer['Dealer_Name'];
    $Address = empty($dealer['Address']) ? "" : $dealer['Address'];
    $City = empty($dealer['City']) ? "" : $dealer['City'];
    $District = empty($dealer['District']) ? "" : $dealer['District'];
    $State = empty($dealer['State']) ? "" : $dealer['State'];
    $Phone_Number = empty($dealer['Phone_Number']) ? "" : $dealer['Phone_Number'];
    $Email = empty($dealer['Email']) ? "" : $dealer['Email'];
    $License_No = empty($dealer['License_No']) ? "" : $dealer['License_No'];
    $Issue_Date = empty($dealer['Issue_Date']) ? "" : $dealer['Issue_Date'];
    $Expiry_Date = empty($dealer['Expiry_Date']) ? "" : $dealer['Expiry_Date'];
    $License_Issue_by = empty($dealer['License_Issue_by']) ? "" : $dealer['License_Issue_by'];
    $Pincode = empty($dealer['Pincode']) ? "" : $dealer['Pincode'];


    ?>
    <div class="row">
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

                        <!-- <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                                <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div> -->
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
                        <!-- <div class="mb-3">
                    <label for="State" class="form-label">State</label>
                    <input type="text" class="form-control" name="State" id="State" value="Enter State">
                </div> -->
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
    </div>
</div>