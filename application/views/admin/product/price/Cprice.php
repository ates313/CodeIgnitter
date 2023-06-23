<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>




<form action="<?php echo base_url('c_price_act') ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-primary py-2 rounded">Welcome Price Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="cutt"><b>H</b></label>
            <input type="text" name="cutt" class="form-control" id="cutt"
                placeholder="Excample: Saç Kəsimi">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="prc"><b>Price</b></label>
            <input type="text" name="prc" class="form-control" id="prc" placeholder="Excample: 5 AZN">
        </div>
    </div>

    <button class="form-control bg-gradient-primary text-light" type="submit">Submit</button>

</form>




<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>