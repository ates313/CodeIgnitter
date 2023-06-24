<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('price_edit_act/').$price_get_list_rw["price_id"]; ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-warning py-2 rounded">Welcome Price Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-warning" class="text-warning" for="priceHeading"><b>Text H</b></label>
            <input value="<?php echo $price_get_list_rw["price_Heading"]; ?>" type="text" name="priceHeading" class="form-control" id="priceHeading"
                placeholder="Edit Text H..">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label class="text-warning" class="text-warning" for="pricePrice"><b>Text S</b></label>
            <input value="<?php echo $price_get_list_rw["price_price"]; ?>" type="text" name="pricePrice" class="form-control" id="pricePrice" 
                placeholder="Edit Text S..">
        </div>
    </div>

    <button class="form-control bg-gradient-warning text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>