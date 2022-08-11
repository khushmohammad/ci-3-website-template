<?php

$headingtag = "h2";
$headingtagClass = "text-dark pt-5";
$headingtext = "Our Granulated PROM Fertilizer";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);

$this->load->view('FrontEnd/Template/PageHeading', $data);


$Pagedata = array(
    'heading' => "Why Brite Bio PROM fertilizer should be used ?",
    "content" => 'We provide efficient methods for managing nutrients that promote the health of the soil, plant growth, and crop output. Our products have a number of advantages, such as longer feeding, readily available nutrients, and simplicity of use. Use products containing rock phosphate on your lawn, garden, and greenhouse.
<br>
    Brite Bio’s inputs are approved as organic fertilizer from Rajasthan State Government. Our products are registered and certified as organic inputs.'
);
$this->load->view('FrontEnd/Template/SinglePage', $Pagedata);

$this->load->view('FrontEnd/Template/RequestConsultation');
