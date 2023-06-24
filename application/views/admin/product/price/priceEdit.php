<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<form action="<?php echo base_url('price_edit_act/').$price_get_list_rw["price_id"]; ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-success py-2 rounded">Welcome Price Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="priceHeading"><b>Text H</b></label>
            <input value="<?php echo $price_get_list_rw["price_Heading"]; ?>" type="text" name="priceHeading" class="form-control" id="priceHeading"
                placeholder="Edit Text H..">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="pricePrice"><b>Text S</b></label>
            <input value="<?php echo $price_get_list_rw["price_price"]; ?>" type="text" name="pricePrice" class="form-control" id="pricePrice" 
                placeholder="Edit Text S..">
        </div>
    </div>

    <button class="form-control bg-gradient-success text-light" type="submit">Submit</button>

</form>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>