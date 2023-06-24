<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="<?php echo base_url('Cprice'); ?>" class="btn btn-primary btn-icon-split">
            <span class="text">Create</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive table-striped table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Text H</th>
                        <th>Text Price</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $pID = 0;
                    
                    foreach ($price_get_list as $price_get_item) { 
                         $pID++; ?>
                    
                        <tr>
                            <td><?php echo $pID; ?></td>
                            <td><?php echo $price_get_item["price_Heading"]; ?></td>
                            <td><?php echo $price_get_item["price_price"]; ?></td>
                            <td width="109">
                                <a href="<?php echo base_url('priceEdit/').$price_get_item["price_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="text-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the service?'); " href="<?php echo base_url('priceDelete/') . $price_get_item["price_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="text-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>