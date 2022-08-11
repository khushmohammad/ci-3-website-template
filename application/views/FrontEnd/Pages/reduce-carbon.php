<?php
$headingtag = "h2";
$headingtagClass = "text-dark pt-5";
$headingtext = "Reduce Carbon Footprint";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);


$this->load->view('FrontEnd/Template/PageHeading', $data);


$Pagedata = array(
    'heading' => "Reduce Carbon Footprint",
    "content" => 'We encourage farmers to adopt our products, which improve crop yield, soil health, and soil carbon sequestration.
    <br>
    Our PROM has the ability to boost yields and soil carbon sequestration in order to activate soil productivity, soil fertility, and ensure long-term soil health, making operation more successful, resilient, and environmentally friendly.
    <br>
    We work closely with agronomists and other soil specialists to test soil for soil organic carbon sequestered as a result of utilizing our products.'
);
$this->load->view('FrontEnd/Template/SinglePage', $Pagedata);

$this->load->view('FrontEnd/Template/RequestConsultation');
