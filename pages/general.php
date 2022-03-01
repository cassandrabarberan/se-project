<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Settings</title>


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



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="row mb-1">
              <div class="row mb-2">
                <label for="emp_dr" class="col col-form-label">Employee ID:</label>
                <div class="col">
                  <input type="textbox" class="form-control-plaintext" id="emp_dr" value="11001">
                </div>
              </div>


              <div class="row mb-2">
                <label for="emp_dr_other" class="col col-form-label">Employee Name:</label>
                <div class="col">
                  <input type="textbox" class="form-control-plaintext " id="emp_dr_other" value="Juan Dela Cruz">
                </div>
              </div>
              <div class="row mb-2">
                <label for="emp_dr" class="col col-form-label">Employee DR:</label>
                <div class="col">
                  <input type="textbox" class="form-control" id="emp_dr" value="209.45">
                </div>
              </div>


              <div class="row mb-2">
                <label for="emp_dr_other" class="col col-form-label">DR to the other company:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="emp_dr_other" value="0">
                </div>
              </div>

            </div>
            <div class="row mb-1">

              <div class="row mb-2">
                <label for="leave_with_pay" class="col col-form-label">Due From:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="leave_with_pay" value="200">
                </div>
              </div>
              <div class="row mb-2">
                <label for="absences" class="col col-form-label">Rice Allowance:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="absences" value="700">
                </div>
              </div>
              <div class="row mb-2">
                <label for="late/undertime" class="col col-form-label">Absences:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="late/undertime" value="2">
                </div>
              </div>


            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="row mb-1">
              <div class="row mb-2">
                <label for="emp_dr" class="col col-form-label">Employee ID:</label>
                <div class="col">
                  <input type="textbox" class="form-control-plaintext" id="emp_dr" value="11002">
                </div>
              </div>


              <div class="row mb-2">
                <label for="emp_dr_other" class="col col-form-label">Employee Name:</label>
                <div class="col">
                  <input type="textbox" class="form-control-plaintext " id="emp_dr_other" value="Mary Yee">
                </div>
              </div>
              <div class="row mb-2">
                <label for="emp_dr" class="col col-form-label">Employee DR:</label>
                <div class="col">
                  <input type="textbox" class="form-control" id="emp_dr" value="328.50">
                </div>
              </div>


              <div class="row mb-2">
                <label for="emp_dr_other" class="col col-form-label">DR to the other company:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="emp_dr_other" value="0">
                </div>
              </div>

            </div>
            <div class="row mb-1">

              <div class="row mb-2">
                <label for="leave_with_pay" class="col col-form-label">Due From:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="leave_with_pay" value="140">
                </div>
              </div>
              <div class="row mb-2">
                <label for="absences" class="col col-form-label">Rice Allowance:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="absences" value="700">
                </div>
              </div>
              <div class="row mb-2">
                <label for="late/undertime" class="col col-form-label">Absences:</label>
                <div class="col">
                  <input type="textbox" class="form-control " id="late/undertime" value="1">
                </div>
              </div>


            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-3 my-3 border" style="background-color: white;">
    <div class="row">
      <div class="col">
        <h3>Other Deduction</h3>
      </div>
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



            <input type="text" name="datefilter" value="" class="form-control " placeholder="Payroll Period" />

            <script type="text/javascript">
              $(function () {

                $('input[name="datefilter"]').daterangepicker({
                  autoUpdateInput: false,
                  locale: {
                    cancelLabel: 'Clear'
                  }
                });

                $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
                  $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                });

                $('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
                  $(this).val('');
                });

              });
            </script>
            <button class="btn btn-outline-primary ml-2" type="submit">Go</button>
          </form>

        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Employee_ID</th>
              <th scope="col">Employee Name</th>
              <th scope="col">Employee Dr</th>
              <th scope="col">DR to other Company</th>
              <th scope="col">Due From</th>
              <th scope="col">Rice Allowance</th>
              <th scope="col">Absences</th>
              <th></th>


            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>11001</td>
              <td>Juan Dela Cruz</td>
              <td>209.45</td>
              <td>0</td>
              <td>200</td>
              <td>700</td>
              <td>2</td>
              <td align="right">
                <a class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>



              </td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td>11002</td>
              <td>Mary Yee</td>
              <td>328.50</td>
              <td>0</td>
              <td>140</td>
              <td>700</td>
              <td>1</td>
              <td align="right">
                <a class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</a>



              </td>

            </tr>


          </tbody>
        </table>
        <div class="col" align="center">
          <a class="btn btn-success text-light" >SAVE</a>
        </div>
      </div>
    </div>




  </div>


</body>

</html>