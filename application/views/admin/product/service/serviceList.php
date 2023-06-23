<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="<?php echo base_url('Cservice'); ?>" class="btn btn-primary btn-icon-split">
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
                        <th>Text P</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $adID = 0;
                    
                    foreach ($service_get_list as $services_get_item) { 
                         $adID++; ?>
                    
                        <tr>
                            <td><?php echo $adID; ?></td>
                            <td><?php echo $services_get_item["service_Heading"]; ?></td>
                            <td><?php echo $services_get_item["service_Paragraph"]; ?></td>
                            <td width="154">
                                <a href="#" style="text-decoration:none;">
                                    <button type="button" class="text-primary btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                <a href="#" style="text-decoration:none;">
                                    <button type="button" class="text-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="" href="#" style="text-decoration:none;">
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