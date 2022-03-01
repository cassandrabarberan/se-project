<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <link rel="stylesheet" href="../css/navbar.css">

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">

  <style>
    .status-unpaid {
      border-radius: 5px;
      background-color: rgb(212, 81, 76);
      color: white;
      text-align: center;
      padding: 2px;

    }
  </style>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../pages/dashboard.php"><img src="../img/logo.png" alt="company_logo" style="height:65px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../pages/dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/employee1.php">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/enter-payroll-code.php">Payroll</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/loans.php">Loans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/contri.php">Attendance</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reports
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../pages/reps-deduc.php">Deductions</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/reps-salary.php">Salary</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../pages/general.php">General Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/changepass.php">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php">Log Out</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container p-3 my-2 border bg-light ">
    <h3 style="color:rgb(16, 44, 105);">Dashboard</h3>
    <div class="row">
      <div class="col">
        <div class="card bg-light  mt-4">
          <div class="row p-3">
            <div class="col">
              <h4>
                <div class="num" style="font-size: 40px; color:rgb(16, 44, 105)">65</div>
              </h4>
            </div>
            <div class="col" align="right"><i class="fa fa-users fa-3x " style="color:blue;"></i>
            </div>
          </div>
          <div class="card-footer">
            <h5 style="color:rgb(16, 44, 105);">Total Employees</h5>
          </div>
        </div>
      </div>
      <script>
        $(".num").counterUp({
          delay: 10,
          time: 1200
        });
      </script>

      <div class="col">
        <div class="card bg-light mt-4">
          <div class="row p-3">
            <div class="col">
              <h4>
                <div class="num2" style="font-size: 40px; color:rgb(16, 44, 105)">4</div>
              </h4>
            </div>
            <div class="col" align="right"><i class="fa fa-grip-horizontal fa-3x " style="color:yellow;"></i>
            </div>
          </div>
          <div class="card-footer">
            <h5 style="color:rgb(16, 44, 105);">Total Departments</h5>
          </div>
        </div>
      </div>
      <script>
        $(".num2").counterUp({
          delay: 10,
          time: 1200
        });
      </script>

      <div class="col">
        <div class="card bg-light mt-4">
          <div class="row p-3">
            <div class="col">
              <h4>
                <div class="num3" style="font-size: 40px; color:rgb(16, 44, 105)">60</div>
              </h4>
            </div>
            <div class="col" align="right"><i class="fa fa-user fa-3x " style="color:orange;"></i>
            </div>
          </div>
          <div class="card-footer">
            <h5 style="color:rgb(16, 44, 105);">Active Employees</h5>
          </div>
        </div>
      </div>
      <script>
        $(".num3").counterUp({
          delay: 10,
          time: 1200
        });
      </script>

      <div class="col">
        <div class="card bg-light mt-4">
          <div class="row p-3">
            <div class="col">
              <h5>
                <div class="num4" style="font-size: 40px; color:rgb(16, 44, 105)">2</div>
              </h5>
            </div>
            <div class="col" align="right"><i class="fas fa-coins fa-3x " style="color:green;"></i>

            </div>
          </div>
          <div class="card-footer">
            <h5 style="color:rgb(16, 44, 105);">Active Loans</h5>
          </div>
        </div>
      </div>
      <script>
        $(".num4").counterUp({
          delay: 10,
          time: 1200
        });
      </script>

    </div>
    <div class="card mt-5">
      <div class="card-header">
        <div class="row">
          <h4>Payroll</h4>
        </div>
        <div class="row">
          <div class="col-auto">
            <label for="choose_month" class="form-label">
              <h7>Choose Month and Year:</h7>
            </label>
          </div>
          <div class="col-auto">
            <input name="startDate" id="startDate" class="date-picker" />
            <script type="text/javascript">
              $(function() {
                $('.date-picker').datepicker({
                  changeMonth: true,
                  changeYear: true,
                  showButtonPanel: true,
                  dateFormat: 'MM yy',
                  onClose: function(dateText, inst) {
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                  }
                });
              });
            </script>
          </div>
        </div>



      </div>
    </div>
    <table class="table table-hover">
      <thead>
        <th>Payroll ID</th>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Department</th>
        <th>Payroll period</th>
        <th>Payroll date</th>
        <th>Gross Salary</th>
        <th>Net Salary</th>
        <th>Status</th>
      </thead>
      <tr>
        <td>1</td>
        <td>11001</td>
        <td>Dela Cruz, Juan</td>
        <td>Logistics</td>
        <td>5-1-21 to 5-15-21</td>
        <td>5-13-21</td>
        <td>10,000</td>
        <td>8,467</td>
        <td>
          <div class="status-unpaid">Pending</div>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>11102</td>
        <td>Yee, Mary</td>
        <td>Sales</td>
        <td>5-16-21 to 5-31-21</td>
        <td>5-28-21</td>
        <td>9,000</td>
        <td>7,585</td>
        <td>
          <div class="status-unpaid">Pending</div>
        </td>

      </tr>
      <tr>
        <td>3</td>
        <td>11071</td>
        <td>Cruz, Albert</td>
        <td>Accounting</td>
        <td>6-1-21 to 6-15-21</td>
        <td>6-13-21</td>
        <td>12,000</td>
        <td>10,832</td>
        <td>
          <div class="status-unpaid">Pending</div>
        </td>
      </tr>
    </table>
  </div>





  </div>
  </div>







  </div>
</body>

</html>