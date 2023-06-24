<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('about_edit_act/').$about_get_list_rw["about_id"]; ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-success py-2 rounded">Welcome About Edit Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-success" for="aboutHeading"><b>Text H</b></label>
            <input value="<?php echo $about_get_list_rw["about_Heading"]; ?>" type="text" name="aboutHeading" class="form-control" id="aboutHeading"
                placeholder="Edit Text H..">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-success" for="aboutAbout"><b>Text S</b></label>
            <input value="<?php echo $about_get_list_rw["about_about"]; ?>" type="text" name="aboutAbout" class="form-control" id="aboutAbout   " 
                placeholder="Edit Text S..">
        </div>
    </div>

    <button class="form-control bg-gradient-success text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>