<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url("http://132.1.0.117/org/public/frontend/assets/img/Avenue/FORM-O.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

        }
    </style>
</head>

<body>

    <section id="PageHeading">
        <div class="page-heading py-5">
            <div class="container py-sm-5 pt-5">
                <div class="row align-items-center py-sm-5">
                    <div class="col-md-12 px-3 text-md-start text-center">

                        <h1 style="color: red;" class='text-danger pt-5'>
                            <?php
                            echo $user['user'];
                            ?> </h1>
                    </div>
                </div>
            </div>
        </div>

    </section>







</body>

</html>