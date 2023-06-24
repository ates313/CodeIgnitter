<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>


<form action="<?php echo base_url('c_about_act') ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-success py-2 rounded">Welcome About Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-success" for="aboutHeading"><b>Text H</b></label>
            <input type="text" name="aboutHeading" class="form-control" id="aboutHeading"
                placeholder="Text Heading">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-success" for="aboutAbout"><b>About</b></label>
            <input type="text" name="aboutAbout" class="form-control" id="aboutAbout" placeholder="Text about">
        </div>
    </div>

    <button class="form-control bg-gradient-success text-light" type="submit">Submit</button>

</form>


<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>


