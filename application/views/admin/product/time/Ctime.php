<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>


<form action="<?php echo base_url('c_time_act') ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-dark py-2 rounded">Welcome Time Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="timeWeek"><b>Week Select</b></label>
            <select name="timeWeek" class="form-control" id="timeWeek">
                <option value="">-SELECT-</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="timeTime"><b>Week Select</b></label>
            <select name="timeTime" class="form-control" id="timeTime">
                <option value="">-SELECT-</option>
                
                <option value="9:00-19:00">9:00-19:00</option>
                <option value="10:00-20:00">10:00-20:00</option>
                <option value="11:00-21:00">11:00-21:00</option>
                <option value="12:00-22:00">12:00-22:00</option>
            </select>
        </div>
    </div>

    <button class="form-control bg-gradient-dark text-light" type="submit">Submit</button>

</form>




<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>