<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="<?php echo base_url('Ctime'); ?>" class="btn bg-gradient-dark btn-icon-split">
            <span class="text text-light">Creat Time</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive table-striped table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-dark">#</th>
                        <th class="text-dark">Week</th>
                        <th class="text-dark">Text time</th>
                        <th class="text-dark">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cID = 0;
                    
                    foreach ($time_get_list as $time_get_item) { 
                         $cID++; ?>
                    
                        <tr>
                            <td class="text-dark"><?php echo $cID; ?></td>
                            <td><?php echo $time_get_item["time_Week"]; ?></td>
                            <td><?php echo $time_get_item["time_Time"]; ?></td>
                            <td width="109">
                                <a href="<?php echo base_url('timeEdit/').$time_get_item["time_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="text-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the service?'); " href="<?php echo base_url('timeDelete/').$time_get_item["time_id"]; ?>" style="text-decoration:none;">
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