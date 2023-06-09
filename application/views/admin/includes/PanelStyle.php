<?php 
if(!isset($_SESSION['admin_id'])){
    $this->session->set_flashdata('er','Username ve ya password yaz!');
    redirect(base_url('a_login'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/public/admin/assets/'); ?>vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/public/admin/assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('a_dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Staff</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('c_create'); ?>">Create</a>
                        <a class="collapse-item" href="<?php echo base_url('c_list'); ?>">List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYwo"
                    aria-expanded="true" aria-controls="collapseYwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Service</span>
                </a>
                <div id="collapseYwo" class="collapse" aria-labelledby="headingwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('Cservice'); ?>">Creat</a>
                        <a class="collapse-item" href="<?php echo base_url('serviceList'); ?>">List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseXwo"
                    aria-expanded="true" aria-controls="collapseXwo">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Price</span>
                </a>
                <div id="collapseXwo" class="collapse" aria-labelledby="headinXwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('Cprice'); ?>">Creat</a>
                        <a class="collapse-item" href="<?php echo base_url('priceList'); ?>">List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAwo"
                    aria-expanded="true" aria-controls="collapseXwo">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>About</span>
                </a>
                <div id="collapseAwo" class="collapse" aria-labelledby="headinAwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('Cabout'); ?>">Creat</a>
                        <a class="collapse-item" href="<?php echo base_url('aboutList'); ?>">List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOwo"
                    aria-expanded="true" aria-controls="collapseXwo">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Time</span>
                </a>
                <div id="collapseOwo" class="collapse" aria-labelledby="headinOwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('Ctime'); ?>">Creat</a>
                        <a class="collapse-item" href="<?php echo base_url('timeList'); ?>">List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePwo"
                    aria-expanded="true" aria-controls="collapsePwo">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Contact</span>
                </a>
                <div id="collapsePwo" class="collapse" aria-labelledby="headinOwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('Ccontact'); ?>">Creat</a>
                        <a class="collapse-item" href="<?php echo base_url('contactList'); ?>">List</a>
                    </div>
                </div>
            </li>
           

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

        