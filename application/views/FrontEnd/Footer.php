<?php
$url = $this->uri->uri_string();

// echo "<pre>";
// echo print_r($url);
// echo "</pre>";

?>
<?php echo $url != "contact-us" ?
    '<div id="footer" class="border-top">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-sm-4 widget-menu">
                <div class="list-group text-center">
                    <a href="'.site_url().'" class=" active">
                        Home
                    </a>
                    <a href="'.site_url().'about" class="">About</a>
                    <a href="'.site_url().'contact-us" class="">Contact Us</a>

                </div>

            </div>
            <div class="col-sm-4 footer-logo">
                <div class=" text-center">
                    <img src="http://132.1.0.117/organic/wp-content/uploads/2022/06/Avenue-Logo-232x300.png" class="img-fluid " alt="">
                    <p> <strong>Brite Bio</strong></p>
                </div>
            </div>

            <div class="col-sm-4 widget-menu">

                <div class="list-group text-center text-sm-start">
                    <h3>Our Location</h3>
                    <p class="">
                        

                        Avenue Poultech<br>
Village: Jagpura, Tehsil: Badnor,<br>
Block: Asind, District: Bhilwara,<br>
Pin: 311204, Rajasthan - India 
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>'
    : ""; ?>

<!-- Footer-->
<footer class="bg-light py-3">
    <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">Copyright &copy; <?php echo date("Y"); ?> - organic</div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> -->
<!-- Core theme JS-->
<script src="<?php echo site_url("public/frontend/") ?>js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>