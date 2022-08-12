<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Stacked form</h2>
        <form action="<?php echo site_url();  ?>FrontEndControllers/Pages/testViewEmail " method="POST">
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="from" name="from">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="to" name="to">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="cc" name="cc">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="subject" name="subject">
            </div>

            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="message" name="message">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="extra to" name="extra">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" value="extra to 1" name="extra1">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>