<?php $this->load->view('admin/includes/PanelStyle')?>
<?php $this->load->view('admin/includes/NavbarStyle');?>
<?php $this->load->view('admin/includes/LogoutModal');?>


<form action="<?php echo base_url('time_edit_act/').$time_get_list_rw['time_id'] ?>"  method="post" enctype="multipart/form-data">
    <p class="text-center text-white bg-gradient-dark py-2 rounded">Welcome Time Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="timeWeek"><b>Week Select</b></label>
            <select name="timeWeek" class="form-control" id="timeWeek">
                <option value="">-SELECT-</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Monday"){echo "SELECTED";} ?>  value="Monday">Monday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Tuesday"){echo "SELECTED";} ?>  value="Tuesday">Tuesday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Wednesday"){echo "SELECTED";} ?> value="Wednesday">Wednesday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Thursday"){echo "SELECTED";} ?> value="Thursday">Thursday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Friday"){echo "SELECTED";} ?> value="Friday">Friday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Saturday"){echo "SELECTED";} ?> value="Saturday">Saturday</option>
                <option <?php if($time_get_list_rw['time_Week'] == "Sunday"){echo "SELECTED";} ?> value="Sunday">Sunday</option>
            </select>
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="timeTime"><b>Week Select</b></label>
            <select name="timeTime" class="form-control" id="timeTime">
                <option value="">-SELECT-</option>
                
                <option <?php if($time_get_list_rw['time_Time'] == "9:00-19:00"){echo "SELECTED";} ?> value="9:00-19:00">9:00-19:00</option>
                <option <?php if($time_get_list_rw['time_Time'] == "10:00-20:00"){echo "SELECTED";} ?> value="10:00-20:00">10:00-20:00</option>
                <option <?php if($time_get_list_rw['time_Time'] == "11:00-21:00"){echo "SELECTED";} ?> value="11:00-21:00">11:00-21:00</option>
                <option <?php if($time_get_list_rw['time_Time'] == "12:00-22:00"){echo "SELECTED";} ?> value="12:00-22:00">12:00-22:00</option>
            </select>
        </div>
    </div>

    <button class="form-control bg-gradient-dark text-light" type="submit">Submit</button>

</form>




<?php $this->load->view('admin/includes/LogoutModal'); ?>
<?php $this->load->view('admin/includes/FooterStyle'); ?>