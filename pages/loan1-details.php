<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../css/navbar.css">


</head>
<body>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.html"><img src="../img/logo.png" alt="company_logo" style="height:65px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="employee1.html">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="enter-payroll-code.html">Payroll</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="loans.html">Loans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contri.html">Attendance</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reports
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="reps-deduc.html">Deductions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="reps-salary.html">Salary</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="general.html">General Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="changepass.html">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.html">Log Out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container p-3 my-3 border" style="background-color: white;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-basic-details" aria-selected="true">Loan Details</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form class="form">
                        <div class="row mb-1">
                            <div class="col-sm-6">
                                <div class="row mb-2">
                                    <label for="emp_name" class="col-sm-5 col-form-label">Employee ID:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="11001">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="emp_name" class="col-sm-5 col-form-label">Name of employee:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="Juan Dela Cruz">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="type_of_salary" class="col-sm-5 col-form-label">Type of Loan:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="SSS">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="basic_rate" class="col-sm-5 col-form-label">Loan Application Number:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="basic_rate" value="0031">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="basic_rate" class="col-sm-5 col-form-label">Loan Date:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="basic_rate" value="12-10-21">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="row mb-2">
                                    <label for="department" class="col-sm-5 col-form-label">Department:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="basic_rate" value="Logistic Department">
                                </div>
                                <div class="row mb-2">
                                    <label for="basic_rate" class="col-sm-5 col-form-label">Loan Terms:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="24 Months">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="basic_rate" class="col-sm-5 col-form-label">From:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="01-01-22">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="basic_rate" class="col-sm-5 col-form-label">To:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="emp_name" value="01-01-24">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="num_of_days" class="col-sm-5 col-form-label">Amount:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="num_of_days" value="8,000.00">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="num_of_days" class="col-sm-5 col-form-label">Monthly Due:</label>
                                    <div class="col-sm">
                                        <input type="textbox" class="form-control-plaintext " id="num_of_days" value="450">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>           
                
                
              <div class="col" align="right"><a class="btn btn-success" href="../pages/loans.php" role="button">Back</a></div>
        </div>

    
</body>
</html>