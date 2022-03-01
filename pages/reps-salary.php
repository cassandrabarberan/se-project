<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Reports</title>

    <link rel='stylesheet' href='../css/navbar.css'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



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


</head>

<body>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php"><img src="/img/logo.png" alt="company_logo" style="height:65px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../pages/dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="employee1.php">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="enter-payroll-code.php">Payroll</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="loans.php">Loans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contri.php">Attendance</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reports
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="reps-deduc.php">Deductions</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="reps-salary.php">Salary</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="general.php">General Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="changepass.php">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php">Log Out</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        <div class="container p-3 my-3 border" style="background-color: white;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-import-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-import" type="button" role="tab" aria-controls="pills-basic-details"
                        aria-selected="true">Salary Report Payroll</button>
                </li>

            </ul>




            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-import" role="tabpanel"
                    aria-labelledby="pills-import-tab">

                    <div class="card">
                        <div class="card-header">
                            <form class="d-flex">
                                <input class="form-control me-2 col-sm-4" type="search" placeholder="Search Employee">
    
                                <select id="department" class="form-select form-select-sm-3 h-25">
                                    <option selected>Select Department</option>
                                    <option>Accounting Department</option>
                                    <option>Corporate Department</option>
                                    <option>Logistic Department</option>
                                    <option>Sales Department</option>
                                    <option>All Department</option>
                                </select>
      
                                        <input id="datepicker1" placeholder="Payroll Period" />
                                        <script>
                                            $('#datepicker1').datepicker({
                                                uiLibrary: 'bootstrap4'
                                            });
                                        </script>
                                <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                                    
    
                            </form>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class=" btn btn-outline-success m-3 w-25">EXPORT REPORT</button>
                                <button type="button" class=" btn btn-outline-primary m-3 w-25">PRINT</button>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Employee ID</th>
                                    <th>Employee Name</th>
                                    <th>Basic Rate</th>
                                    <th>No.of Days</th>
                                    <th>Allowance</th>
                                    <th>Leave w/ Pay</th>
                                    <th>Holiday</th>
                                    <th>Overtime</th>
                                    <th>Absences</th>
                                    <th>Late/Undertime</th>
                                    <th>gross pay</th>
                                    <th>SSS Contribution</th>
                                    <th>PHIC Contribution</th>
                                    <th>HDMF Contribution</th>
                                    <th>EF Contribution</th>
                                    <th>SSS Loan</th>
                                    <th>PHIC Loan</th>
                                    <th>HDMF Loan</th>
                                    <th>EF Loan</th>
                                    <th>Rice Allowance</th>
                                    <th>Employee's DR</th>
                                    <th>DR to Other Company</th>
                                    <th>Due From</th>
                                    <th>Total Deductions</th>
                                    <th>Net Salary</th>
                                    <th>Actions</th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>11001</td>
                                        <td>Dela Cruz, Juan</td>
                                        <td>426</td>
                                        <td>13</td>
                                        <td>600</td>
                                        <td>426</td>
                                        <td>267.50</td>
                                        <td>105.78</td>
                                        <td>0</td>
                                        <td>83</td>
                                        <td>6,854.28</td>
                                        <td>427.50</td>
                                        <td>150</td>
                                        <td>100</td>
                                        <td>250</td>
                                        <td>0</td>
                                        <td>349.20</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <th>0</th>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1,276.70</td>
                                        <td>5,577.58</td>


                                        <td>
                                            <a class="btn-sm btn-info text-light" href="/pages/pay1.html">See Details</a>
                                        </td>
                                    <tr>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>
                                            <a class="btn-sm btn-info text-light" href="/pages/pay2.html">See Details</a>
                                        </td>






                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="pills-payroll" role="tabpanel" aria-labelledby="pills-payroll-tab">

                </div>
            </div>



    </body>

</html>