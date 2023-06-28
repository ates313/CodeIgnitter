<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>


<form action="<?php echo base_url('c_contact_act') ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center bg-gradient-dark text-light py-2 rounded">Welcome Contact Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="contactNumber"><b>Number Add</b></label>
            <input type="text" name="contactNumber" class="form-control" id="contactNumber"
                placeholder="">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="contactEmail"><b>Email add</b></label>
            <input type="text" name="contactEmail" class="form-control" id="contactEmail" placeholder="">
        </div>
    </div>

    <button class="form-control bg-gradient-dark text-light" type="submit">Submit</button>

</form>


<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>