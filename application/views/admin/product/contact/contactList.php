<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>



<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="<?php echo base_url('Ccontact'); ?>" class="btn btn-dark btn-icon-split">
            <span class="text">Create Contact</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive table-striped table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-dark">#</th>
                        <th class="text-dark">Number</th>
                        <th class="text-dark">Email</th>
                        <th class="text-dark">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $gID = 0;
                
                    foreach ($contact_get_list as $contact_get_item) { 
                         $gID++; ?>
                    
                        <tr>
                            <td class="text-success"><?php echo $gID; ?></td>
                            <td><?php echo $contact_get_item["contact_Number"]; ?></td>
                            <td><?php echo $contact_get_item["contact_Email"]; ?></td>
                            <td width="109">
                                <a href="<?php echo base_url('contactEdit/') . $contact_get_item["contact_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="text-dark btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the service?'); " href="<?php echo base_url('contactDelete/') . $contact_get_item["contact_id"]; ?>" style="text-decoration:none;">
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