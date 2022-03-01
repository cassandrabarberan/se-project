<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php require_once "../pages/header.php" ?>

    <!-- ----------------------------------------------------------------------------------- -->
    <?php
    $id = $_GET['id'];
    //echo $id;

    $conn = mysqli_connect("localhost", "root", "", "dbpayroll");

    $sql = "SELECT * FROM employee,employee_workdetails, employee_otherdetails, contributions WHERE employee_ID = $id ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>
    <div class="container p-3 my-2 border bg-light">
        <div class="col" align="right"><a class="btn-close btn-lg " aria-label="Close" href="../pages/employee1.php"></a></div>


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Basic Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Work Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="false">Contributions and Loans</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Other Details</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



                <form class="form">
                    <div class="title">
                        <h3>View Personal Information</h3>
                    </div>
                    <img src="../img/icon.png" class="rounded float-start" alt="emp_img" width="100" height="100">


                    <div class="row mb-3">
                        <div class="col-sm">
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Name:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Age:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['age'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Birthdate:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['date_of_birth'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Gender:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['gender'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Department:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['department'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Address:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['address'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Mobile #:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['mobile_no'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Nationality:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['nationality'] ?>">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="" class="col-sm-4 col-form-label">Employee Status:</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['employee_status'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="" class="col-sm-4 col-form-label">Position:</label>
                        <div class="col-sm">
                            <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['position'] ?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="" class="col-sm-4 col-form-label">Date Hired:</label>
                        <div class="col-sm">
                            <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['date_hired'] ?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="" class="col-sm-4 col-form-label">Employment Status:</label>
                        <div class="col-sm">
                            <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['employment_status'] ?>">
                        </div>
                    </div>

                </form>



            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="title">
                    <h3>Employee Work Details</h3>
                </div>
                <div class="row mb-3">
                    <div class="col-sm">
                        <div class="row mb-1">
                            <label for="id_num" class="col-sm-4 col-form-label">ID #:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="id_num" value="<?php echo $row['employee_ID'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Basic Rate:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['basic_rate'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Leave with Pay:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['no_of_leave'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Department:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['department'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Position:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['employee_history_position'] ?>">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Date Hired:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['date_hired'] ?>">
                            </div>
                        </div>



                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Date Resigned:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['date_resigned'] ?>">
                            </div>
                        </div>


                    </div>
                    <div class="col-sm">
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">SSS No.</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['sss_no'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Philhealth No.</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['philhealth_no'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Tin No.</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['tin_no'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Employment Status:</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['employment_status'] ?>">
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                <div class="row">
                    <div class="col">
                        <h3>Contributions</h3>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">SSS</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_sss_contribution'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Philhealth</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_phic_contribution'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Employee's Fund</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_ef_contribution'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">HDMF(Pag-ibig)</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_hdmf_contribution'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h3>Loans</h3>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">SSS</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_sss_loan'] ?>">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Employee's Fund</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_ef_loan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">HDMF(Pag-ibig)</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['payroll_loans&contri_hdmf_loan'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <h4>Total Deductions</h4>
                <div class="row mb-1">
                    <label for="" class="col-sm-4 col-form-label">Total Deductions</label>
                    <div class="col-sm">
                        <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['total_deductions'] ?>">
                    </div>
                </div>
            </div>





            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="title">
                    <h3> Other Details</h3>

                </div>

                <div class="row mb-3">



                    <div class="col-sm">

                        <div class="row mb-1">
                            <label for="marital_stat" class="col-sm-4 col-form-label">Marital Status</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['marital_status'] ?>">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="n_of_children" class="col-sm-4 col-form-label ">No. of Children</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['no_of_children'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Spouse Name (if applicable)</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['spouse_name'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="" class="col-sm-4 col-form-label">Spouse Occupation (if applicable)</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['spouse_occupation'] ?>">
                            </div>
                        </div>

                        <br><br>

                        <div class="row mb-1">
                            <label for="dependant" class="col-sm-4 col-form-label">Dependant</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['dependant'] ?>">
                            </div>
                        </div>
                       

                    </div>


                    <div class="col">
                    <h6>Incase of Emergency</h6>
                        <div class="row mb-1">
                            <label for="emergency_contact_name" class="col-sm-4 col-form-label">Emergency Contact Person</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['emergency_contact_name'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="emergency_contact_num" class="col-sm-4 col-form-label">Emergency Contact #</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['emergency_contact_no'] ?>">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="emergency_contact_add" class="col-sm-4 col-form-label">Emergency Contact Address</label>
                            <div class="col-sm">
                                <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $row['emergency_contact_address'] ?>">
                            </div>
                        </div>


                        
                    </div>




                </div>



            </div>
        </div>
    </div>

</body>

</html>