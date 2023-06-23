<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('c_service_act') ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-primary py-2 rounded">Welcome Service Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="serviceHeading"><b>Text H</b></label>
            <input type="text" name="serviceHeading" class="form-control" id="serviceHeading"
                placeholder="">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="serviceParagraph"><b>Text S</b></label>
            <input type="text" name="serviceParagraph" class="form-control" id="serviceParagraph" placeholder="">
        </div>
    </div>

    <button class="form-control bg-gradient-primary text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>