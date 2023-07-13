<?php

    if(!isset($_SESSION['admin_id'])){
        redirect(base_url('a_login'));
    }

?>



<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle')?>
<?php $this->load->view('admin/includes/LogoutModal')?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Page</h6>
    </div>
    <div class="card-body">
    
    <?php if($this->session->flashdata("err")){ ?>
        <div class="alert alert-danger alert-dismissible">
            <?php echo $this->session->flashdata("err"); ?>
        </div>
    <?php } ?>

    

    

        <form action="<?php echo base_url('c_creat_act') ?>" method="post" enctype="multipart/form-data">

            <br>
            <h3 class="text-center text-white bg-gradient-primary py-2 rounded">Contact Information</h3>
            <br>



            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">AZE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">ENG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">RUS</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name</b></label>
                            <input type="text" name="FirstName_az" class="form-control" id="FirstName"
                                placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name</b></label>
                            <input type="text" name="LastName_az" class="form-control" id="LastName"
                                placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description</b></label>
                            <textarea name="user_description_az" id="description" cols="30" rows="5"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu1">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name EN</b></label>
                            <input type="text" name="FirstName_en" class="form-control" id="FirstName"
                                placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name EN</b></label>
                            <input type="text" name="LastName_en" class="form-control" id="LastName"
                                placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description EN</b></label>
                            <textarea name="user_description_en" id="description" cols="30" rows="5"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu2">
                    <div class="form-group row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name RU</b></label>
                            <input type="text" name="FirstName_ru" class="form-control" id="FirstName"
                                placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <label for="LastName"><b>Last Name RU</b></label>
                            <input type="text" name="LastName_ru" class="form-control" id="LastName"
                                placeholder="Last Name">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description RU</b></label>
                            <textarea name="user_description_ru" id="description" cols="30" rows="5"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="Email"><b>Email</b></label>
                    <input type="text" name="Email" class="form-control" id="Email" placeholder="Email Address">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Mob"><b>Phone Number</b></label>
                    <input type="number" name="Mobile" class="form-control" id="Mob" placeholder="+994 -- --- -- --">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Position"><b>Position</b></label>
                    <select name="Position" class="form-control" id="Position">
                        <option value="">SELECT</option> 
                        <?php foreach($position as $position_item){ ?>
                            <option value="<?php echo $position_item['p_id'] ?>"><?php echo $position_item['p_Name_az'] ?></option>
                       <?php } ?>
                        
                    </select>
                </div>
            </div>
            

            <br>
            <h3 class="text-center text-white bg-gradient-primary py-2 rounded">Social Information</h3>
            <br>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Instagram"><b>Instagram</b></label>
                    <input type="text" name="instagram" class="form-control" id="Instagram"
                        placeholder="Instagram Name">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Facebook"><b>Facebook</b></label>
                    <input type="text" name="Facebook" class="form-control" id="Facebook" placeholder="Facebook Name">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Telegram"><b>Telegram</b></label>
                    <input type="text" name="Telegram" class="form-control" id="Telegram" placeholder="Telegram">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Youtube"><b>Youtube</b></label>
                    <input type="text" name="Youtube" class="form-control" id="Youtube" placeholder="Youtube">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="Experience"><b>Experience</b></label>
                    <input type="text" name="experience" class="form-control" id="Experience"
                        placeholder="Experience">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="acc_photo"><b>File Select</b></label>
                    <input type="file" name="acc_photo" class="form-control" id="acc_photo"
                        placeholder="">
                </div>
            </div>

            <br>


            <button type="submit" class="btn bg-gradient-primary text-light btn-block">Submit</button>

        </form>
    </div>
</div>


<?php $this->load->view('admin/includes/FooterStyle'); ?>