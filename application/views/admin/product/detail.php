<?php $this->load->view('admin/product/includes/LeftMenu');?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/ContentStyle'); ?>


<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Page<a href="<?php echo base_url('c_list'); ?>"><button style="float:right;" title="Back" type="button" class="btn btn-danger"><-</button></a></h6>
        </div>
        <div class="card-body">

            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <td>
                        <?php echo $singe_data['s_FirstName_az']?>
                    </td>
                </tr>
                <tr>
                    <th>Surname</th>
                    <td>
                        <?php echo $singe_data['s_LastName_az']?>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        <?php echo $singe_data['s_user_description_az']?>
                    </td>
                </tr>
                <tr>
                    <th>Name EN</th>
                    <td>
                        <?php echo $singe_data['s_FirstName_en']?>
                    </td>
                </tr>
                <tr>
                    <th>Surname En</th>
                    <td>
                        <?php echo $singe_data['s_LastName_en']?>
                    </td>
                </tr>
                <tr>
                    <th>Description En</th>
                    <td>
                        <?php echo $singe_data['s_user_description_en']?>
                    </td>
                </tr>
                <tr>
                    <th>Name Ru</th>
                    <td>
                        <?php echo $singe_data['s_FirstName_ru']?>
                    </td>
                </tr>
                <tr>
                    <th>Suname Ru</th>
                    <td>
                        <?php echo $singe_data['s_LastName_ru']?>
                    </td>
                </tr>
                <tr>
                    <th>Description Ru</th>
                    <td>
                        <?php echo $singe_data['s_user_description_ru']?>
                    </td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>
                        <?php echo $singe_data['s_Position']?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?php echo $singe_data['s_Email']?>
                    </td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>
                        <?php echo $singe_data['s_Mobile']?>
                    </td>
                </tr>
                <tr>
                    <th>Facebook</th>
                    <td>
                        <?php echo $singe_data['s_Facebook']?>
                    </td>
                </tr>
                <tr>
                    <th>Telegram</th>
                    <td>
                        <?php echo $singe_data['s_Telegram']?>
                    </td>
                </tr>
                <tr>
                    <th>Youtube</th>
                    <td>
                        <?php echo $singe_data['s_Youtube']?>
                    </td>
                </tr>
                <tr>
                    <th>Experience</th>
                    <td>
                        <?php echo $singe_data['s_experience']?>
                    </td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>
                        <?php echo $singe_data['s_Instagram']?>
                    </td>
                </tr>
                <tr>
                    <th>Profile</th>
                    <?php if($singe_data['s_image']){ ?>
                        <td><img width="100" src="<?php echo base_url('upload/'.$singe_data['s_image']) ?>" alt=""></td>
                   <?php }else{?>
                        <td><img width="100" src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg" alt=""></td>
                  <?php } ?>
            </table>
        </div>
    </div>



    <?php $this->load->view('admin/includes/FooterStyle'); ?>

    <script src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script
        src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('/public/admin/assets/'); ?>js/demo/datatables-demo.js"></script>