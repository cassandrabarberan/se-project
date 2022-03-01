<?php
session_start();

if (isset($_POST['ADD'])) {

	$first_name = $_POST['fname'];
	$middle_name = $_POST['mname'];
	$last_name = $_POST['lname'];
	$age = $_POST['age'];
	$date_of_birth = date('Y-m-d', strtotime($_POST['date_of_b']));
	$gender = $_POST['sex'];
	$address = $_POST['emp_address'];
	$mobile_no =  $_POST['emp_mobile'];
	$nationality = $_POST['emp_nationality'];
	$employee_status = $_POST['emp_status'];

	$basic_rate = $_POST['b_rate'];
	$n_of_leave = $_POST['n_of_leave'];
	$department = $_POST['dept'];
	$position = $_POST['pos'];
	$employee_history_position = $_POST['emp_hist_pos'];
	$sss_no = $_POST['sss_num'];
	$philhealth_no = $_POST['ph_num'];
	$tin_no = $_POST['tin_num'];
	$date_hired = date('Y-m-d', strtotime($_POST['date_hired']));
	$date_resigned = date('Y-m-d', strtotime($_POST['date_resigned']));
	$employment_status = $_POST['employ_stat'];
	
	
	$marital_status = $_POST['marital_stat'];
	$no_of_children = $_POST['n_of_children'];
	$spouse_name = $_POST['spouse_name'];
	$dependant = $_POST['dependant'];
	$spouse_occupation = $_POST['spouse_occ'];
	$emergency_contact_no = $_POST['emergency_contact_num'];
	$emergency_contact_name = $_POST['emergency_contact_name'];
	$emergency_contact_address = $_POST['emergency_contact_add'];

/*	$ef_loan = $_POST['ef_loan'];
	$sss_loan = $_POST['sss_loan'];
	$hdmf_loan = $_POST['hdmf_loan']; */

	$ef_contribution = $_POST['ef_contribution'];
	$sss_contribution = $_POST['sss_contribution'];
	$hdmf_contribution = $_POST['hdmf_contribution'];
	$phic_contribution = $_POST['phic_contribution'];

	



	
	
	$conn = mysqli_connect("localhost", "root", "", "dbpayroll");
	mysqli_begin_transaction($conn);
	
	try {

		$sql = "INSERT INTO `employee` ( `first_name`, `middle_name`, `last_name`, `age`, `date_of_birth`, `gender`, `address`, `mobile_no`, `nationality`, `employee_status`)
		VALUES ('$first_name','$middle_name','$last_name','$age','$date_of_birth','$gender','$address','$mobile_no','$nationality','$employee_status')";

		$sql1 = "INSERT INTO `employee_workdetails`( `basic_rate`, `no_of_leave`, `department`, `position`, `employee_history_position`, `sss_no`, `philhealth_no`, `tin_no`, `date_hired`, `date_resigned`, `employment_status`)
		 VALUES ('$basic_rate','$n_of_leave','$department','$position','$employee_history_position','$sss_no','$philhealth_no','$tin_no','$date_hired','$date_resigned','$employment_status')";

		$sql2 = "INSERT INTO `employee_otherdetails` ( `marital_status`, `no_of_children`, `spouse_name`, `dependant`, `spouse_occupation`, `emergency_contact_no`, `emergency_contact_name`, `emergency_contact_address`)
		VALUES ('$marital_status','$no_of_children','$spouse_name','$dependant','$spouse_occupation','$emergency_contact_no','$emergency_contact_name','$emergency_contact_address')";

		$sql3 = "INSERT INTO `contributions`(  `payroll_loans&contri_ef_contribution`, `payroll_loans&contri_sss_contribution`, `payroll_loans&contri_hdmf_contribution`, `payroll_loans&contri_phic_contribution`)
		 VALUES ('$ef_contribution','$sss_contribution','$hdmf_contribution','$phic_contribution')";

		$query2 = mysqli_query($conn,$sql);
		$query3 = mysqli_query($conn,$sql1);
		$query4 = mysqli_query($conn,$sql2);
		$query5 = mysqli_query($conn,$sql3);


		mysqli_commit($conn);
		echo "Data has been submitted";
		
		

		
	} catch (mysqli_sql_exception $exception ) {
		mysqli_rollback($conn);
		throw $exception;
		echo " Error in submitting data.";
		
	}
	header("location: ../pages/employee1.php");


}

