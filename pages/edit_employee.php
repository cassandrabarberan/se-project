<?php

	session_start();
	include_once('../include/database.php');

	if(isset($_POST['update'])){

		$pdoConnect = new Connection();
		$conn = $pdoConnect->open();
		
		$id = $_GET['id'];
		$first_name = $_POST['fname'];
		$middle_name = $_POST['mname'];
		$last_name = $_POST['lname'];
		$age = $_POST['age'];
		$date_of_birth = date('Y-m-d', strtotime($_POST['date_of_b']));
		$gender = $_POST['gender'];
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

		$ef_contribution = $_POST['ef_contribution'];
		$sss_contribution = $_POST['sss_contribution'];
		$hdmf_contribution = $_POST['hdmf_contribution'];
		$phic_contribution = $_POST['phic_contribution']; 

		$conn->beginTransaction();

				$query ="UPDATE employee SET first_name= :fname,middle_name= :mname ,last_name= :lname,age= :age,date_of_birth=:date_of_b,gender= :gender,
				address=:emp_address,mobile_no= :emp_mobile,nationality= :emp_nationality,employee_status= :emp_status WHERE employee_ID = $id  ";

				$pdoResult = $conn->prepare($query);

				$pdoExec = $pdoResult->execute(array(":fname"=>$first_name, ":mname"=>$middle_name,
				":lname"=>$last_name, ":age"=>$age, ":date_of_b"=>$date_of_birth, ":gender"=>$gender,
				":emp_address"=>$address,":emp_mobile"=>$mobile_no,":emp_nationality"=>$nationality,
				":emp_status"=>$employee_status)
				);
			
				
			if ($pdoExec) {
				echo "<script>alert('Data has been updated')</script>";

				$query2 = "UPDATE employee_workdetails SET basic_rate=:b_rate,no_of_leave=:n_of_leave,
				department=:dept,position=:pos,employee_history_position=:emp_hist_pos, sss_no=:sss_num,
				philhealth_no=:ph_num,tin_no=:tin_num,date_hired=:date_hired,date_resigned=:date_resigned,
				employment_status=:employ_stat WHERE ID_no = $id ";

				$pdoResult = $conn->prepare($query2);

				$pdoExec2 = $pdoResult->execute(array(":b_rate"=>$basic_rate,
				":n_of_leave"=>$n_of_leave, ":dept"=>$department,
				":pos"=>$position, ":emp_hist_pos"=>$employee_history_position,
				":sss_num"=>$sss_no, ":ph_num"=>$philhealth_no,
				":tin_num"=>$tin_no,":date_hired"=>$date_hired,
				":date_resigned"=>$date_resigned,":employ_stat"=>$employment_status)
			);


				
			}
			if ($pdoExec2) {

				$query3 = "UPDATE employee_otherdetails SET marital_status=:marital_stat,no_of_children=:n_of_children,
				spouse_name=:spouse_name ,dependant=:dependant,spouse_occupation=:spouse_occ,emergency_contact_no=:emergency_contact_num,
				emergency_contact_name=:emergency_contact_name,emergency_contact_address=:emergency_contact_add WHERE ID = $id";

					$pdoResult = $conn->prepare($query3);

					$pdoExec3 = $pdoResult->execute(array(":marital_stat"=>$marital_status,":n_of_children"=>$no_of_children,
					":spouse_name"=>$spouse_name,":dependant"=>$dependant,":spouse_occ"=>$spouse_occupation,
					 ":emergency_contact_num"=>$emergency_contact_no,"emergency_contact_name"=>$emergency_contact_name,
					 ":emergency_contact_add"=>$emergency_contact_address)
				);
			}
			if ($pdoExec3){
				$query4 = "UPDATE loans_and_contribution SET ";
			}
			
		if($pdoExec && $pdoExec2 && $pdoExec3){
			$conn->commit();
		}
		else{
			$conn->rollback();
		}

		header("location: ../pages/employee1.php");
			

		//close connection
		$pdoConnect->close();
	}
	
	 
	

?>