<div class='py-5 my-5'>

    <?php


    echo "<pre>";
    //  echo print_r();
    echo "</pre>";
    ?>

    <?php
    if ($this->session->flashdata('error') != '') {
        echo $this->session->flashdata('error');
    }
    ?>


    <div class="form-group">
        <label>Captcha</label>
        <br>
        <?php echo $captcha_image; ?>
    </div>
    <div class="form-group">
        <label>Enter Captcha Text</label>
        <input type="text" name="captcha" class="form-control" required>
    </div>