<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('contact_edit_act/').$contact_get_list_rw["contact_id"]; ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-warning py-2 rounded">Welcome Contact Edit Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="contactNumber"><b>Number</b></label>
            <input value="<?php echo $contact_get_list_rw["contact_Number"]; ?>" type="text" name="contactNumber" class="form-control" id="contactNumber"
                placeholder="Edit Text H..">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="contactEmail"><b>Email</b></label>
            <input value="<?php echo $contact_get_list_rw["contact_Email"]; ?>" type="text" name="contactEmail" class="form-control" id="contactEmail" 
                placeholder="Edit Text S..">
        </div>
    </div>

    <button class="form-control bg-gradient-warning text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>