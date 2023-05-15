<?php $this->load->view('admin/product/includes/LeftMenu')?>
<?php $this->load->view('admin/includes/NavbarStyle')?>
<?php $this->load->view('admin/includes/ContentStyle') ?>

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
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>   
    </div>
</div>



<?php $this->load->view('admin/includes/FooterStyle'); ?>

    <script src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('/public/admin/assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('/public/admin/assets/'); ?>js/demo/datatables-demo.js"></script>
