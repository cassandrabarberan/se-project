<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<?php

$id = $_GET['id'];
//echo $id;

$conn = mysqli_connect("localhost", "root", "", "dbpayroll");

$sql = "SELECT * FROM employee, employee_workdetails, employee_otherdetails, contributions WHERE employee_ID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

require_once "../pages/header.php";
?>



<!-- Modal -->
<div class="container p-3 my-2 border bg-light">
  <form action="../pages/edit_employee.php?id= <?php echo $row['employee_ID']; ?>" method="POST">
  <div class="card-title text-xl-center">
   <h4> UPDATE DETAILS </h4>
  </div>
    <div class="modal-body">


      <ul class="nav nav-pills mb-3" id="add-emp" role="tablist" data-bs-target="#pills-emp">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-basic-details" data-bs-toggle="pill" data-bs-target="#pills-basicdet" type="button" role="tab" aria-controls="pills-basic" aria-selected="true">Basic Details</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-work-details" data-bs-toggle="pill" data-bs-target="#pills-workdet" type="button" role="tab" aria-controls="pills-work" aria-selected="false">Work Details</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-servicedet" type="button" role="tab" aria-controls="pills-service" aria-selected="false">Contributions
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-other-details" data-bs-toggle="pill" data-bs-target="#pills-otherdet" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Other Details</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-basicdet" role="tabpanel" aria-labelledby="pills-basic-tab">

          <div class="title">
            <h3>Personal Information</h3>
          </div>

          <div class="row mb-3">
            <div class="col">
              <div class="row mb-1">
                <label for="fname" class="col-4 col-form-label">First Name</label>
                <div class="col">
                  <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['first_name']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="mname" class="col-4 col-form-label">Middle Name</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="mname" name="mname" value="<?php echo $row['middle_name']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="lname" class="col-4 col-form-label">Last Name</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="lname" name="lname" value="<?php echo $row['last_name']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="age" class="col-4 col-form-label">Age</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="age" name="age" value="<?php echo $row['age']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="birth_date" class="col-4 col-form-label">Birthdate</label>
                <div class="col">
                  <div class="form-group mb-3">
                    <input type="date" name="date_of_b" class="form-control" value="<?php echo $row['date_of_birth']; ?>">
                  </div>
                </div>
              </div>
              <div class="row mb-1">
                <label for="sex" class="col-4 col-form-label">Gender</label>
                <div class="col">

                  <select class="form-select" id="gender" name="gender" aria-label="Floating label select example" value="<?php echo $row['gender']; ?>">
                    <option <?php if ($row['gender'] == "None") {
                              echo "selected";
                            } ?>>None</option>
                    <option value='Female' <?php if ($row['gender'] == "Female") {
                                              echo "selected";
                                            } ?>>Female</option>
                    <option value='Male' <?php if ($row['gender'] == "Male") {
                                            echo "selected";
                                          } ?>>Male</option>
                  </select>
                </div>
              </div>


            </div>
            <div class="col">
              <div class="row mb-1">
                <label for="emp_address" class="col-4 col-form-label">Address</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="emp_address" name="emp_address" value="<?php echo $row['address']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="emp_mobile" class="col-4 col-form-label">Mobile Number</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="emp_mobile" name="emp_mobile" value="<?php echo $row['mobile_no']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="emp_nationality" class="col-4 col-form-label">Nationality</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" id="emp_nationality" name="emp_nationality" value="<?php echo $row['nationality']; ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="emp_status" class="col-4 col-form-label">Employee Status</label>
                <div class="col">
                <select class="form-select" id="emp_status" name="emp_status" aria-label="Floating label select example" value="<?php echo $row['employee_status']; ?>">
                <option <?php if ($row['employee_status'] == "None") {echo "selected";} ?>>None</option>
                <option value='Casual' <?php if ($row['employee_status'] == "Casual") {echo "selected";} ?>>Casual</option>
                <option value='Regular' <?php if ($row['employee_status'] == "Regular") {echo "selected";} ?>>Regular</option>
              </select>
                </div>

              </div>





            </div>

          </div>
        </div>
        <div class="tab-pane fade" id="pills-workdet" role="tabpanel" aria-labelledby="pills-work-tab">
          <div class="row mb-3">

            <div class="col">
              <div class="title">
                <h3>Employee Work Details</h3>
              </div>

              <div class="row mb-3">
                <div class="col">

                  <div class="row mb-1">
                    <label for="b_rate" class="col-4 col-form-label">Basic Rate</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="b_rate" name="b_rate" value="<?php echo $row['basic_rate']; ?>">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="n_of_leave" class="col-4 col-form-label">No. Of Leave</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="n_of_leave" name="n_of_leave" value="<?php echo $row['no_of_leave']; ?>">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="dept" class="col-4 col-form-label">Department</label>
                    <div class="col ">
                    <select class="form-select" id="dept" name="dept" aria-label="Floating label select example" value="<?php echo $row['department']; ?>">
                <option <?php if ($row['department'] == "None") {echo "selected";} ?>>None</option>
                <option value='Logistics' <?php if ($row['department'] == "Logistics") {echo "selected";} ?>>Logisitics</option>
                <option value='Accounting' <?php if ($row['department'] == "Accounting") {echo "selected";} ?>>Accounting</option>
                <option value='Sales' <?php if ($row['department'] == "Sales") {echo "selected";} ?>>Sales</option>
              </select>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="pos" class="col-4 col-form-label">Position</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="pos" name="pos" value="<?php echo $row['position']; ?>">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emp_hist_pos" class="col-4 col-form-label">Employee History Position</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="emp_hist_pos" name="emp_hist_pos" value="<?php echo $row['employee_history_position']; ?>">
                    </div>
                  </div>

                </div>

                <div class="col">
                  <div class="row mb-1">
                    <label for="sss_no" class="col-4 col-form-label">SSS No.</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="sss_no" name="sss_num" value="<?php echo $row['sss_no']; ?>">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="ph_no" class="col-4 col-form-label">Philhealth No.</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="ph_no" name="ph_num" value="<?php echo $row['philhealth_no']; ?>">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="tin_no" class="col-4 col-form-label">Tin No.</label>
                    <div class="col">
                      <input type="textbox" class="form-control form-control" id="tin_no" name="tin_num" value="<?php echo $row['tin_no']; ?>">
                    </div>
                  </div>

                  <div class="row mb-1">
                    <label for="date_hired" class="col-4 col-form-label">Date Hired</label>
                    <div class="col">
                      <div class="form-group mb-3">
                        <input type="date" name="date_hired" class="form-control" value="<?php echo $row['date_hired']; ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="date_resigned" class="col-4 col-form-label">Date Resigned</label>
                    <div class="col">

                      <div class="form-group mb-3">
                        <input type="date" name="date_resigned" class="form-control" value="<?php echo $row['date_resigned']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <label for="employ_stat" class="col-4 col-form-label">Employment Status</label>
                    <div class="col">
                    <select class="form-select" id="employ_stat" name="employ_stat" aria-label="Floating label select example" value="<?php echo $row['employment_status']; ?>">
                <option <?php if ($row['employee_status'] == "None") {echo "selected";} ?>>None</option>
                <option value='Active' <?php if ($row['employment_status'] == "Active") {echo "selected";} ?>>Active</option>
                <option value='Inactive' <?php if ($row['employment_status'] == "Inactive") {echo "selected";} ?>>Inactive</option>
              </select>
                    </div>
                  </div>


                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-servicedet" role="tabpanel" aria-labelledby="pills-service-tab">
          <div class="row">
            <div class="col">
              <h3>Contributions</h3>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">SSS</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control w-50" id="sss_contribution" name="sss_contribution" value="<?php echo $row['payroll_loans&contri_sss_contribution'] ?>" >
                </div>
              </div>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">PHIC</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control w-50" id="phic_contribution" name="phic_contribution" value="<?php echo $row['payroll_loans&contri_phic_contribution'] ?> ">
                </div>
              </div>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">Employee's Fund</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control w-50" id="ef_contribution" name="ef_contribution" value="<?php echo $row['payroll_loans&contri_ef_contribution'] ?> ">
                </div>
              </div>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">HDMF(Pag-ibig) </label>
                <div class="col">
                  <input type="textbox" class="form-control form-control w-50" id="hdmf_contribution" name="hdmf_contribution" value="<?php echo $row['payroll_loans&contri_hdmf_contribution'] ?> ">
                </div>
              </div>



            </div>
            
          </div>
          <br><br>
         


        </div>
        <div class="tab-pane fade" id="pills-otherdet" role="tabpanel" aria-labelledby="pills-other-tab">
          <div class="title">
            <h3> Other Details</h3>

          </div>

          <div class="row mb-3">



            <div class="col">

              <div class="row mb-1">
                <label for="marital_stat" class="col-4 col-form-label">Marital Status</label>
                <div class="col">
                <select class="form-select" id="marital_stat" name="marital_stat" aria-label="Floating label select example" value="<?php echo $row['marital_status']; ?>">
                <option <?php if ($row['marital_status'] == "None") {echo "selected";} ?>>None</option>
                <option value='Single' <?php if ($row['marital_status'] == "Single") {echo "selected";} ?>>Single</option>
                <option value='Married' <?php if ($row['marital_status'] == "Married") {echo "selected";} ?>>Married</option>
                <option value='Separated' <?php if ($row['marital_status'] == "Separated") {echo "selected";} ?>>Separated</option>
                <option value='Widowed' <?php if ($row['marital_status'] == "Widowed") {echo "selected";} ?>>Widowed</option>
                <option value='Divorced' <?php if ($row['marital_status'] == "Divorced") {echo "selected";} ?>>Divorced</option>
                
              </select>
                </div>
              </div>

              <div class="row mb-1">
                <label for="n_of_children" class="col-4 col-form-label ">No. of Children</label>
                <div class="col">
                  <input type="number" min="0" max="50" class="form-control form-control" name="n_of_children" value="<?php echo $row['no_of_children'] ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">Spouse Name (if applicable)</label>
                <div class="col">
                  <input type="textbox" id="spouse_name" name="spouse_name" class="form-control form-control" value="<?php echo $row['spouse_name'] ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="inputPassword3" class="col-4 col-form-label">Spouse Occupation (if applicable)</label>
                <div class="col">
                  <input type="textbox" name="spouse_occ" class="form-control form-control" value="<?php echo $row['spouse_occupation'] ?>">
                </div>
              </div>

              <br><br>

              <div class="row mb-1">
                <label for="dependant" class="col-4 col-form-label">Dependant</label>
                <div class="col">
                  <input type="textbox" name="dependant" class="form-control form-control" value="<?php echo $row['dependant'] ?>">
                </div>
              </div>


            </div>


            <div class="col">
              <h6>Incase of Emergency</h6>
              <div class="row mb-1">
                <label for="emergency_contact_name" class="col-4 col-form-label">Emergency Contact Person</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" name="emergency_contact_name" value="<?php echo $row['emergency_contact_name'] ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="emergency_contact_num" class="col-4 col-form-label">Emergency Contact #</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" name="emergency_contact_num" value="<?php echo $row['emergency_contact_no'] ?>">
                </div>
              </div>
              <div class="row mb-1">
                <label for="emergency_contact_add" class="col-4 col-form-label">Emergency Contact Address</label>
                <div class="col">
                  <input type="textbox" class="form-control form-control" name="emergency_contact_add" value="<?php echo $row['emergency_contact_address'] ?>">
                </div>
              </div>



            </div>




          </div>
        </div>


      </div>
      <div class="modal-footer">
        <a href="../pages/employee1.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button></a>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
      </div>



    </div>

  </form>


</div>