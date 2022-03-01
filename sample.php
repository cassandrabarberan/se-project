<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/navbar.css">


</head>

<body>
    <div class="container p-3 my-3 border" style="background-color: white;">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="col-sm">
                    <div class="row mb-1">
                        <label for="fname" class="col-sm-4 col-form-label">First Name</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="fname">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="mname" class="col-sm-4 col-form-label">Middle Name</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="mname">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="lname" class="col-sm-4 col-form-label">Last Name</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="lname">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="age" class="col-sm-4 col-form-label">Age</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="age">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="date_of_b" class="col-sm-4 col-form-label">Birthdate</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="date_of_b">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="sex" class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm">
                            <select class="form-select" aria-label="Default select example" id="sex">
                                <option selected>Select Gender</option>
                                <option value="gender_m">Male</option>
                                <option value="gender_f">Female</option>

                            </select>
                        </div>
                    </div>


                </div>
                <div class="col-sm">
                    <div class="row mb-1">
                        <label for="emp_address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="emp_address">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="emp_mobile" class="col-sm-4 col-form-label">Mobile Number</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="emp_mobile">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="emp_nationality" class="col-sm-4 col-form-label">Nationality</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="emp_nationality">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="emp_status" class="col-sm-4 col-form-label">Employee Status</label>
                        <div class="col-sm">
                            <input type="textbox" class="form-control form-control-sm" id="emp_status">
                        </div>
                    </div>




                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
        <button type="submit" name="" class="btn btn-primary">Save changes</button>
    </div>

    



</body>

</html>







    <!-- Modal -->
    <div class="modal fade" id="edit_emp_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../pages/edit_employee.php <?php echo $row['emp_id']; ?> " method="post">
                    <div class="title">
                                <h3>Personal Information</h3>
                            </div>
                            <div class="row" align="left">


                                <div class="col-sm">
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Add Image</label>
                                        <div class="col-sm">
                                            <label for="firstimg">

                                                <i class="fas fa-cloud-upload-alt" style="font-size: 24px;
                                                 border: 1px solid black;
                                                 padding:40px;
                                                 margin:3px; cursor:pointer"></i>
                                            </label>
                                            <input type="file" name="" id="firstimg" style="display: none;
                                                 visibility: none;" onchange="getImage(this.value);">

                                            <div id="display-image"></div>
                                        </div>
                                    </div>


                                </div>



                            </div>
                            <script>
                                function getImage(imagename) {
                                    var newimg = imagename.replace(/^.*\\/, "");
                                    $('#display-image').html(newimg)
                                }
                            </script>



                            <div class="row mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo $row['employee_ID']; ?>">
                                    <label for="floatingInput">Employee ID</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['last_name']; ?>">
                                    <label for="floatingInput">Last Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['first_name']; ?>">
                                    <label for="floatingInput">First Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $row['middle_name']; ?>">
                                    <label for="floatingInput">Middle Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="date_of_b" name="date_of_b" value="<?php echo $row['date_of_birth']; ?>">
                                    <label for="floatingInput">Birthdate</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="sex" name="sex" aria-label="Floating label select example" value="<?php echo $row['gender']; ?>">
                                        <option <?php if ($row['Gender'] == "None") {
                                                    echo "selected";
                                                } ?>>None</option>
                                        <option value='Female' <?php if ($row['gender'] == "Female") {
                                                                    echo "selected";
                                                                } ?>>Female</option>
                                        <option value='Male' <?php if ($row['gender'] == "Male") {
                                                                    echo "selected";
                                                                } ?>>Male</option>
                                    </select>
                                    <label for="floatingSelect">Gender</label>
                                </div>





                            </div>

                            <div class="col-sm">
                                <div class="row mb-1">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="emp_addres" name="emp_addres" value="<?php echo $row['address']; ?>">
                                        <label for="floatingInput">Address</label>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" value="<?php echo $row['mobile_no.']; ?>">
                                        <label for="floatingInput">Mobile Number</label>
                                    </div>

                                </div>

                                <div class="row mb-1">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="emp_nationality" name="emp_nationality" value="<?php echo $row['nationality']; ?>">
                                        <label for="floatingInput">Address</label>
                                    </div>

                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="emp_status" name="emp_status" aria-label="Floating label select example" value="<?php echo $row['gender']; ?>">
                                        <option <?php if ($row['employee_status'] == "None") {
                                                    echo "selected";
                                                } ?>>None</option>
                                        <option value='Casual' <?php if ($row['employee_status'] == "Casual") {
                                                                    echo "selected";
                                                                } ?>>Casual</option>
                                        <option value='Regular' <?php if ($row['employee_status'] == "Regular") {
                                                                    echo "selected";
                                                                } ?>>Regular</option>
                                    </select>
                                    <label for="floatingSelect">Employee Status</label>
                                </div>




                            </div>

                        </div>




                    </div>

                    <div class="tab-pane fade" id="pills-work" role="tabpanel" aria-labelledby="pills-work-details">

                        <div class="title">
                            <h3>Employee Work Details</h3>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="row mb-1">
                                    <label for="work_id" class="col-sm-4 col-form-label">ID #</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="work_id">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="b_rate" class="col-sm-4 col-form-label">Basic Rate</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="b_rate">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="n_of_leave" class="col-sm-4 col-form-label">No. Of Leave</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="n_of_leave">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="dept" class="col-sm-4 col-form-label">Department</label>
                                    <div class="col-sm ">
                                        <select class="form-select" aria-label="Default select example" id="dept">
                                            <option selected>Select Department</option>
                                            <option value="1">Logistics</option>
                                            <option value="2">Sales</option>
                                            <option value="3">Accounting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="pos" class="col-sm-4 col-form-label">Position</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="pos">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="emp_hist_pos" class="col-sm-4 col-form-label">Employee History Position</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="emp_hist_pos">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="row mb-1">
                                    <label for="sss_no" class="col-sm-4 col-form-label">SSS No.</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="sss_no">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="ph_no" class="col-sm-4 col-form-label">Philhealth No.</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="ph_no">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="tin_no" class="col-sm-4 col-form-label">Tin No.</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control form-control-sm" id="tin_no">
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label for="date_hired" class="col-sm-4 col-form-label">Date Hired</label>
                                    <div class="col-sm" id="date_hired">
                                        <input id="datepicker1" />
                                        <script>
                                            $('#datepicker1').datepicker({
                                                uiLibrary: 'bootstrap4'
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="date_resigned" class="col-sm-4 col-form-label">Date Resigned</label>
                                    <div class="col-sm" id="date_resigned">
                                        <input id="datepicker2" />
                                        <script>
                                            $('#datepicker2').datepicker({
                                                uiLibrary: 'bootstrap4'
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label for="employ_stat" class="col-sm-4 col-form-label">Employment Status</label>
                                    <div class="col-sm">
                                        <select class="form-select" aria-label="Default select example" id="employ_stat">
                                            <option selected>Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>



    -------------------------------------------------------------




    //bind employee
			$sql->bindParam(':employee_ID', $_POST['emp_id']);
            $sql->bindParam(':employee_code', $_POST['emp_code']);
			$sql->bindParam(':first_name', $_POST['fname']);
            $sql->bindParam(':middle_name', $_POST['mname']);
            $sql->bindParam(':last_name', $_POST['lname']);
			$sql->bindParam(':age', $_POST['age']);
            $sql->bindParam(':date_of_birth', $_POST['date_of_b']);
			$sql->bindParam(':gender', $_POST['sex']);
			$sql->bindParam(':address', $_POST['emp_address']);
			$sql->bindParam(':mobile_no.', $_POST['emp_mobile']);
            $sql->bindParam(':nationality', $_POST['emp_nationality']);
            $sql->bindParam(':employee_status', $_POST['emp_status']);

            //bind employee workdetails
            $sql->bindParam(':ID_no', $_POST['work_id']);
            $sql->bindParam(':basic_rate', $_POST['b_rate']);
			$sql->bindParam(':no._of_leave', $_POST['n_of_leave']);
            $sql->bindParam(':department', $_POST['dept']);
            $sql->bindParam(':position', $_POST['pos']);
			$sql->bindParam(':employee_history_position', $_POST['emp_hist_pos']);
            $sql->bindParam(':sss_no', $_POST['sss_num']);
			$sql->bindParam(':philhealth_no', $_POST['ph_num']);
			$sql->bindParam(':tin_no', $_POST['tin_num']);
			$sql->bindParam(':date_hired', $_POST['date_hired']);
            $sql->bindParam(':date_resigned', $_POST['date_resigned']);
            $sql->bindParam(':employment_status', $_POST['employ_stat']);
            $sql->bindParam(':employee_code', $_POST['emp_code']);



            //bind employee other details
            $sql->bindParam(':ID', $_POST['emp_id']);
            $sql->bindParam(':marital_status', $_POST['marital_stat']);
			$sql->bindParam(':no_of_children', $_POST['n_of_children']);
            $sql->bindParam(':spouse_name', $_POST['spouse']);
            $sql->bindParam(':dependant', $_POST['dependant']);
			$sql->bindParam(':spouse_occupation', $_POST['spouse_occ']);
            $sql->bindParam(':emergency_contact_no', $_POST['emergency_contact_num']);
			$sql->bindParam(':emergency_contact_name', $_POST['emergency_contact_name']);
			$sql->bindParam(':emergency_contact_address', $_POST['emergency_contact_add']);
            $sql->bindParam(':employee_code', $_POST['emp_code']);
            
__________________________________________
BACKUP FOR ADD EMPLOYEE




<?php
session_start();
include('../include/database.php');

if (isset($_POST['add'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		//make use of prepared statement to prevent sql injection
		$sql = $db->prepare("INSERT INTO `employee` (`employee_ID`, `employee_code`, `first_name`, `middle_name`, `last_name`, `age`, `date_of_birth`, `gender`, `address`, `mobile_no.`, `nationality`, `employee_status`)
             VALUES ('$employee_ID','$employee_code','$first_name','$middle_name','$last_name','$age','$date_of_birth','$gender','$address','$mobile_no.','$nationality','$employee_status')");

		("INSERT INTO `employee_workdetails`(`ID_no`, `basic_rate`, `no._of_leave`, `department`, `position`, `employee_history_position`, `sss_no`, `philhealth_no`, `tin_no`, `date_hired`, `date_resigned`, `employment_status`, `employee_code`)
            VALUES ('$ID_no','$basic_rate','$no._of_leave','$department','$position','$employee_history_position','$sss_no','$philhealth_no','$tin_no','$date_hired','$date_resigned','$employment_status','$employee_code')");

		("INSERT INTO `employee_otherdetails`(`ID`, `marital_status`, `no_of_children`, `spouse_name`, `dependant`, `spouse_occupation`, `emergency_contact_no`, `emergency_contact_name`, `emergency_contact_address`, `employee_code`)
             VALUES ('$ID','$marital_status','$no_of_children','$spouse_name','$dependant','$spouse_occupation','$emergency_contact_no','$emergency_contact_name','$emergency_contact_address','$employee_code')");

		//bind employee
		$sql->bindParam('$employee_ID', $_POST['emp_id']);
		$sql->bindParam('$employee_code', $_POST['emp_code']);
		$sql->bindParam('$first_name', $_POST['fname']);
		$sql->bindParam('$middle_name', $_POST['mname']);
		$sql->bindParam('$last_name', $_POST['lname']);
		$sql->bindParam('$age', $_POST['age']);
		$sql->bindParam('$date_of_birth', $_POST['date_of_b']);
		$sql->bindParam('$gender', $_POST['sex']);
		$sql->bindParam('$address', $_POST['emp_address']);
		$sql->bindParam('$mobile_no.', $_POST['emp_mobile']);
		$sql->bindParam('$nationality', $_POST['emp_nationality']);
		$sql->bindParam('$employee_status', $_POST['emp_status']);

		//bind employee workdetails
		$sql->bindParam('$ID_no', $_POST['work_id']);
		$sql->bindParam('$basic_rate', $_POST['b_rate']);
		$sql->bindParam('$no._of_leave', $_POST['n_of_leave']);
		$sql->bindParam('$department', $_POST['dept']);
		$sql->bindParam('$position', $_POST['pos']);
		$sql->bindParam('$employee_history_position', $_POST['emp_hist_pos']);
		$sql->bindParam('$sss_no', $_POST['sss_num']);
		$sql->bindParam('$philhealth_no', $_POST['ph_num']);
		$sql->bindParam('$tin_no', $_POST['tin_num']);
		$sql->bindParam('$date_hired', $_POST['date_hired']);
		$sql->bindParam('$date_resigned', $_POST['date_resigned']);
		$sql->bindParam('$employment_status', $_POST['employ_stat']);
		$sql->bindParam('$employee_code', $_POST['emp_code']);



		//bind employee other details
		$sql->bindParam('$ID', $_POST['emp_id']);
		$sql->bindParam('$marital_status', $_POST['marital_stat']);
		$sql->bindParam('$no_of_children', $_POST['n_of_children']);
		$sql->bindParam('$spouse_name', $_POST['spouse']);
		$sql->bindParam('$dependant', $_POST['dependant']);
		$sql->bindParam('$spouse_occupation', $_POST['spouse_occ']);
		$sql->bindParam('$emergency_contact_no', $_POST['emergency_contact_num']);
		$sql->bindParam('$emergency_contact_name', $_POST['emergency_contact_name']);
		$sql->bindParam('$emergency_contact_address', $_POST['emergency_contact_add']);
		$sql->bindParam('$employee_code', $_POST['emp_code']);



		//if-else statement in executing our prepared statement
		$_SESSION['message'] = ($sql->execute()) ? 'Farmers added successfully' : 'Something went wrong. Cannot add .';
	} catch (PDOException $e) {
		$_SESSION['message'] = $e->getMessage();
	}

	//close connection
	$database->close();
} else {
	$_SESSION['message'] = 'Fill up add form first';
}

header('location$ ../pages/employee1.php');

?>


-----------------------------------------------------------------------

<div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">
                <div class="tab-pane fade show active" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">

                    <div class="row">
                        <div class="col">
                            <h3>Contributions</h3>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">SSS</label>
                                <div class="col-sm">
                                    <input type="textbox" class="form-control form-control w-50" id="inputPassword3" value="427.50">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Philhealth</label>
                                <div class="col-sm">
                                    <input type="textbox" class="form-control form-control w-50" id="inputPassword3" value="150">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Employee's Fund</label>
                                <div class="col-sm">
                                    <input type="textbox" class="form-control form-control w-50" id="inputPassword3" value="250">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">HDMF(Pag-ibig) </label>
                                <div class="col-sm">
                                    <input type="textbox" class="form-control form-control w-50" id="inputPassword3" value="100">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>Loans</h3>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">SSS</label>
                                <div class="col-sm">
                                    <input class="form-control w-50" id="disabledInput" type="text" placeholder="--" disabled value="567">
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Employee's Fund</label>
                                <div class="col-sm">
                                    <input class="form-control w-50" id="disabledInput" type="text" placeholder="--" disabled value="785.08 ">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">HDMF(Pag-ibig)</label>
                                <div class="col-sm">
                                    <input class="form-control w-50" id="disabledInput" type="text" placeholder="--" disabled value="649.20">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <h4>Total Deductions</h4>
                    <div class="row mb-1">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Total Deductions</label>
                        <div class="col-sm">
                            <input class="form-control w-50" id="disabledInput" type="text" placeholder="--" disabled value="2,928.78">
                        </div>
                    </div>


                </div>
            </div>

            <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-details">
                <div class="title">
                    <h3>Employee Other Details</h3>

                </div>

                <div class="row mb-3">
                    <div class="col-sm">

                        <div class="row mb-1">
                            <label for="marital_stat" class="col-sm-4 col-form-label">Marital Status</label>
                            <div class="col-sm">
                                <select class="form-select" aria-label="Default select example" id="marital_stat">
                                    <option selected>Select Status</option>
                                    <option value="1">Single</option>
                                    <option value="2">Married</option>
                                    <option value="3">Widowed</option>
                                    <option value="4">Separated</option>
                                    <option value="5">Divorced</option>

                                </select>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="n_of_children" class="col-sm-4 col-form-label">No. of Children</label>
                            <div class="col-sm">
                                <input type="number" id="quantity" name="quantity" min="1" max="50" class="form-control form-control-sm" id="n_of_children">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="inputPassword3">
                            </div>
                        </div>
                        <br><br>
                        <h6>Incase of Emergency</h6>
                        <div class="row mb-1">
                            <label for="emergency_contact_name" class="col-sm-4 col-form-label">Emergency Contact
                                Person</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="emergency_contact_name">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="emergency_contact_num" class="col-sm-4 col-form-label">Emergency Contact #</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="emergency_contact_num">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="emergency_contact_add" class="col-sm-4 col-form-label">Emergency Contact Address</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="emergency_contact_add">
                            </div>
                        </div>

                    </div>


                    <div class="col">


                        <div class="row mb-1">
                            <label for="spouse" class="col-sm-4 col-form-label">Spouse Name</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="spouse">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="spouse_occ" class="col-sm-4 col-form-label">Spouse Occupation</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="spouse_occ">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="dependant" class="col-sm-4 col-form-label">Dependant</label>
                            <div class="col-sm">
                                <input type="textbox" class="form-control form-control-sm" id="dependant">
                            </div>
                        </div>
                    </div>


                </div>


            </div>
