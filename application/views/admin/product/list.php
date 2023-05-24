<?php $this->load->view('admin/product/includes/LeftMenu');?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/ContentStyle'); ?>






<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List</h6>
        </div>
        <div class="card-body">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Experience</th>
                        <th>Photo</th>
                        <th>Oparation</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $say=0; foreach($get_all_data as $get_all_data_key){ $say++ ?>

                    <tr>
                        <td>
                            <?php echo $say;?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_FirstName_az'];?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_LastName_az'];?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_Position'];?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_Email'];?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_Mobile'];?>
                        </td>
                        <td>
                            <?php echo $get_all_data_key['s_experience'];?>
                        </td>
                        <td>

                            <?php if($get_all_data_key['s_image']){ ?>

                            <?php }else{ ?>
                            <img width="50px"
                                src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg"
                                alt="">
                            <?php } ?>


                            <img width="50" src="<?php echo base_url('upload/'.$get_all_data_key['s_image'] ) ?>"
                                alt="">
                        </td>
                        <td>
                            <a href="<?php echo base_url('c_detail_staff/'.$get_all_data_key['s_creater_id']) ?>" style="text-decoration: none;">
                                <button type="button" title="View" class="btn btn-primary">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('c_edit_staff/'.$get_all_data_key['s_creater_id']) ?>" style="text-decoration: none;">
                                <button type="button" title="Edit" class="btn btn-warning">
                                    <i class="fas fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <a onclick="return confirm('Are You sure want delete this item?')" href="<?php echo base_url('c_delete_staff/'.$get_all_data_key['s_creater_id']) ?>" style="text-decoration: none;">
                                <button type="button" title="Delete" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>

                    <?php };?>

                </tbody>
        </div>
    </div>



    <?php $this->load->view('admin/includes/FooterStyle'); ?>

    <script src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script
        src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('/public/admin/assets/'); ?>js/demo/datatables-demo.js"></script>