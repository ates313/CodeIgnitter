<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="<?php echo base_url('Cabout'); ?>" class="btn btn-success btn-icon-split">
            <span class="text">Create About</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive table-striped table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-success">#</th>
                        <th class="text-success">Text H</th>
                        <th class="text-success">Text About</th>
                        <th class="text-success">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $eID = 0;
                    
                    foreach ($about_get_list as $about_get_item) { 
                         $eID++; ?>
                    
                        <tr>
                            <td class="text-success"><?php echo $eID; ?></td>
                            <td><?php echo $about_get_item["about_Heading"]; ?></td>
                            <td><?php echo $about_get_item["about_about"]; ?></td>
                            <td width="109">
                                <a href="<?php echo base_url('aboutEdit/').$about_get_item["about_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="text-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the service?'); " href="<?php echo base_url('aboutDelete/') . $about_get_item["about_id"]; ?>" style="text-decoration:none;">
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