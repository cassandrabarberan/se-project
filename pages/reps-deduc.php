<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deduction Report</title>

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
</head>

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
        <div class="row">
            <div class="col"><h3>Reports Deduction</h3></div>
            <div class="card">
                <div class="card-header ">
                  <form class="d-flex">
                    <input class="form-control me-2 w-25 col-4" type="search" placeholder="Search" aria-label="Search">
                            
        
                   
        
                    <select id="department" class="form-select form-select" id="department">
                      <option selected>Choose Department</option>
                      <option>Accounting Department</option>
                      <option>Corporate Department</option>
                      <option>Logistic Department</option>
                      <option>Sales Department</option>
                      <option>All</option>
                    </select>
        
                    
        
                    <select id="text" class="form-select form-select" id="type_of_salary">
                      <option selected>Choose Type of Deduction</option>
                      <option>Contributions</option>
                      <option>Loans</option>
                      <option>Other Deductions</option>
                      <option>All</option>
                    </select>
        
                    <button class="btn btn-outline-primary ml-2" type="submit">Go</button>
        
                  </form>
    
                    </div>
                </div>

            <div class="card-body">
                <div class="row">
                    <div class="col mb-2">
                        <button type="button" class=" btn btn-outline-success m-1 w-25">EXPORT REPORT</button>
                        <button type="button" class=" btn btn-outline-primary m-1 w-25">PRINT</button>
                    </div>
                    <div class="col">

                    </div>
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee_ID</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Payroll Period</th>
                        <th>Type of Deduction</th>
                        <th scope="col">Amount</th>
                        
                        <!--employee id - 1101
employee name - Juan Dela Cruz
department - Logistics
payroll period - 12-1-21 to 12-15-21
total deductions - 2,059.64-->
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>11001</td>
                        <td>Dela Cruz, Juan</td>
                        <td>Logistics </td>
                        <td>12-1-21 to 12-15-21</td>
                        <td>Contribution</td>
                        <td>2,059.64</td>
                        

                      </tr>
                      <tr>
                        <th scope="row">--</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        

                      </tr>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>




    </div>


</body>

</html>