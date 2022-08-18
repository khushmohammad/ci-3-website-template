<?php
// echo "<pre>";

// echo print_r($dealer);
// echo "</pre>";

$CertificateDate = date("d-m-Y");
$id = empty($dealer['id']) ? "" : $dealer['id'];

$CertificateNumber = "AP/" . date("Y-d") . "/" . sprintf("%04d", $id);
$Dealer_Name = empty($dealer['Dealer_Name']) ? "" : $dealer['Dealer_Name'];
$id = empty($dealer['id']) ? "" : $dealer['id'];
$Address = empty($dealer['Address']) ? "" : $dealer['Address'] . ",";
$City = empty($dealer['City']) ? "" : $dealer['City'] . ",";
$District = empty($dealer['District']) ? "" : $dealer['District'] . ",";
$State = empty($dealer['State']) ? "" : $dealer['State'] . ",";
$Phone_Number = empty($dealer['Phone_Number']) ? "" : $dealer['Phone_Number'];
$Email = empty($dealer['Email']) ? "" : $dealer['Email'];
$License_No = empty($dealer['License_No']) ? "" : $dealer['License_No'];
$Issue_Date = empty($dealer['Issue_Date']) ? "" : $dealer['Issue_Date'];
$Expiry_Date = empty($dealer['Expiry_Date']) ? "" : $dealer['Expiry_Date'];
$License_Issue_by = empty($dealer['License_Issue_by']) ? "" : $dealer['License_Issue_by'];
$Pincode = empty($dealer['Pincode']) ? "" : $dealer['Pincode'];


// echo "<pre>";

// echo print_r($State);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body {
            background: url("http://132.1.0.117/org/public/frontend/assets/img/Avenue/FORM-O.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

        }
    </style> -->
    <style>
        @page {
            margin: 0px;
            padding: 0;

        }

        body {
            margin: 0px;
            padding: 0;
        }

        #watermark {
            /* position: fixed;
            top: 0px;
            left: -35px; */
            width: 792px;
            height: 1100px;
            opacity: 1;
        }

        #CertificateNumber,
        #CertificateDate,
        #Dealer_NameAndAddress,
        #License_No,
        #Issue_Date,
        #Expiry_Date,
        #License_Issue_by {
            position: fixed;
            opacity: 1;
        }

        #CertificateNumber {
            top: 355px;
            left: 85px;
        }

        #CertificateDate {
            top: 355px;
            left: 645px;
        }

        #Dealer_NameAndAddress {
            top: 435px;
            left: 490px;
        }

        #License_No {
            top: 625px;
            left: 490px;
        }

        #Issue_Date {
            top: 650px;
            left: 490px;
        }

        #Expiry_Date {
            top: 674px;
            left: 490px;
        }

        #License_Issue_by {
            top: 696px;
            left: 490px;
        }
    </style>
</head>

<body>
    <div id="watermark">
        <img src="<?php echo site_url('public'); ?>/frontend/assets/img/Avenue/FORM-O.jpg" height="100%" width="100%">
    </div>
    <div id="CertificateNumber">
        <b> <?php echo $CertificateNumber; ?></b>
    </div>
    <div id="CertificateDate">
        <b><?php echo $CertificateDate; ?></b>
    </div>

    <div id="Dealer_NameAndAddress">
        <div><b> <?php echo strtoupper($Dealer_Name); ?></b> </div>
        <div><?php echo $Address; ?> <?php echo $City; ?> </div>
        <div><?php echo $District; ?> <?php echo $State; ?> <?php echo $Pincode; ?> </div>
       
    </div>




    <div id="License_No">
        <?php echo $License_No; ?>
    </div>
    <div id="Issue_Date">
        <?php echo $Issue_Date; ?>
    </div>
    <div id="Expiry_Date">
        <?php echo $Expiry_Date; ?>
    </div>

    <div id="License_Issue_by">
        <?php echo $License_Issue_by; ?>
    </div>














</body>

</html>