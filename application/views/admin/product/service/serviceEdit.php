<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('services_edit_act/').$services_get_list_rw["service_id"]; ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-success py-2 rounded">Welcome Service Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="serviceHeading"><b>Text H</b></label>
            <input value="<?php echo $services_get_list_rw["service_Heading"]; ?>" type="text" name="serviceHeading" class="form-control" id="serviceHeading"
                placeholder="Edit Text H..">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="serviceParagraph"><b>Text S</b></label>
            <input value="<?php echo $services_get_list_rw["service_Paragraph"]; ?>" type="text" name="serviceParagraph" class="form-control" id="serviceParagraph" 
                placeholder="Edit Text S..">
        </div>
    </div>

    <button class="form-control bg-gradient-success text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>