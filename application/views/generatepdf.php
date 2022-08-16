<?php
$date = date("d-m-Y")


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

        #userInfo {
            position: fixed;
            top: 355px;
            left: 109px;
            opacity: 1;
        }
    </style>
</head>

<body>


    <div id="watermark">
        <img src="<?php echo site_url('public'); ?>/frontend/assets/img/Avenue/FORM-O-NEW.jpg" height="100%" width="100%">
    </div>

    <div id="userInfo">
        khush
    </div>





</body>

</html>