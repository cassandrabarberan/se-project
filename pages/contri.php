<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>

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
  
        <!-- Modal -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="emp_dr" class="col col-form-label">Department:</label>
                        <div class="col">
                            <input type="textbox" class="form-control-plaintext" id="emp_dr" value="Logistics Department">
                        </div>
                    </div>
                
                
                    <div class="row mb-2">
                        <label for="emp_dr_other" class="col col-form-label">No. of Leave:</label>
                        <div class="col">
                            <input type="textbox" class="form-control " id="emp_dr_other" value="4">
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

  <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="emp_dr" class="col col-form-label">Department:</label>
                        <div class="col">
                            <input type="textbox" class="form-control-plaintext" id="emp_dr" value="Corporate Department">
                        </div>
                    </div>
                
                
                    <div class="row mb-2">
                        <label for="emp_dr_other" class="col col-form-label">No. of Leave:</label>
                        <div class="col">
                            <input type="textbox" class="form-control " id="emp_dr_other" value="4">
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
  <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Overtime Pay</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="row mb-1">
              <div class="row mb-2">
                
                  <div class="col">
                    <input type="text" class="form-control " id="inputPassword3">
                  </div>
                  <div class="col">
                    <select id="department" class="form-select col-sm " id="department">
                        <option selected>...</option>
                        <option>Night Shift</option>
                        <option>Regular</option>
                        <option>Restday</option>
                      </select>
                  </div>
              </div>
              <div class="row mb-2">
                
                  <div class="col">
                    <input type="text" class="form-control " id="inputPassword3">
                  </div>
                  <div class="col">
                    <select id="department" class="form-select col-sm " id="department">
                        <option selected>...</option>
                        <option>Night Shift</option>
                        <option>Regular</option>
                        <option>Restday</option>
                      </select>
                  </div>
              </div>
              <div class="row mb-2">
               
                  <div class="col">
                    <input type="text" class="form-control " id="inputPassword3">
                  </div>
                  <div class="col">
                    <select id="department" class="form-select col-sm " id="department">
                        <option selected>...</option>
                        <option>Night Shift</option>
                        <option>Regular</option>
                        <option>Restday</option>
                      </select>
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
  <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="emp_dr" class="col col-form-label">Department:</label>
                        <div class="col">
                            <input type="textbox" class="form-control-plaintext" id="emp_dr" value="Logistics Department">
                        </div>
                    </div>
                
                
                    <div class="row mb-2">
                        <label for="emp_dr_other" class="col col-form-label">No. of Leave:</label>
                        <div class="col">
                            <input type="textbox" class="form-control " id="emp_dr_other" value="4">
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
        <h3>Attendance</h3>
      </div>

    </div>


    <div class="card">
      <div class="card-header ">
        <div class="row">
          <div class="col">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search Name" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search Name</button>
            </form>
          </div>
          <div class="col">
            <select class="form-select form-select" aria-label=".form-select example">
              <option selected>Select Department</option>
              <option value="1">Sale Department</option>
              <option value="2">Accounting Department</option>
              <option value="3">Corporate Department</option>
              <option value="2">Logistic Department</option>
            </select>
          </div>
          <div class="col">
            <form class="d-flex">
                <input type="text" name="datefilter" value="" class="form-control " placeholder="Payroll Period"/>

                <script type="text/javascript">
                $(function() {
                
                  $('input[name="datefilter"]').daterangepicker({
                      autoUpdateInput: false,
                      locale: {
                          cancelLabel: 'Clear'
                      }
                  });
                
                  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                  });
                
                  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                      $(this).val('');
                  });
                
                });
                </script>
            </form>
          </div>
          
        </div>


      </div>
      </div>
      <div class="container p-3 my-3 border" style="background-color: white;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-leave-tab" data-bs-toggle="pill" data-bs-target="#pills-leave"
                    type="button" role="tab" aria-controls="pills-leave" aria-selected="true">Leave with Pay</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-overtime-tab" data-bs-toggle="pill" data-bs-target="#pills-overtime"
                    type="button" role="tab" aria-controls="pills-overtime" aria-selected="false">Overtime Pay</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-holiday-tab" data-bs-toggle="pill" data-bs-target="#pills-holiday"
                    type="button" role="tab" aria-controls="pills-holiday" aria-selected="false">Holiday Pay</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-leave" role="tabpanel" aria-labelledby="pills-leave-tab">
                <form class="form">
                    <div class="card-body">
                        <table class="table">
                          <thead>
                            <tr>
                                
                                <th scope="col">#</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Employee Name`</th>
                                <th scope="col">Department</th>
                                <th scope="col">No. of Leave</th>
                                <th scope="col"></th>
                                
                
                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                            <th scope="row">1</th>
                            <td>11001</td>
                            <td>Juan Dela Cruz</td>
                            <td>Logistics Department</td>
                            <td>4</td>
                            <td align="center">
                                <a class="btn-sm btn-success text-light gj-cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal11">Add</a>
                            </td>
                            
                            </tr>
                            <tr>

                                <th scope="row">1</th>
                                <td>11002</td>
                                <td>Mary Yee</td>
                                <td>Corporate Department</td>
                                <td>2</td>
                                <td align="center">
                                    <a class="btn-sm btn-success text-light gj-cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal12">Add</a>
                                </td>
                                
                                </tr>
                            
                
                          </tbody>
                        </table>
                      </div>
                    

                </form>
            </div>

            <div class="tab-pane fade" id="pills-overtime" role="tabpanel" aria-labelledby="pills-overtime-tab">

                <form>
                    <div class="card-body">
                        <table class="table">
                          <thead>
                            <tr>
                                
                                <th scope="col">#</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Employee Name`</th>
                                <th scope="col">Department</th>
                                <th scope="col">Overtime</th>
                                <th scope="col"></th>
                                
                
                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                            <th scope="row">1</th>
                            <td>11001</td>
                            <td>Juan Dela Cruz</td>
                            <td>Logistics Department</td>
                            <td>4</td>
                            <td align="center">
                                <a class="btn-sm btn-success text-light gj-cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal13">Add</a>
                            </td>
                            
                            </tr>
                            <tr>

                                <th scope="row">1</th>
                                <td>11002</td>
                                <td>Mary Yee</td>
                                <td>Corporate Department</td>
                                <td>3</td>
                                <td align="center">
                                    <a class="btn-sm btn-success text-light gj-cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal13">Add</a>
                                </td>
                                
                                </tr>
                            
                
                          </tbody>
                        </table>
                      </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-holiday" role="tabpanel" aria-labelledby="pills-holiday-tab">

                <form>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                    
    
                                                        <th scope="col">Holiday Pay</th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                    
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  
                                <td>
                                    <input id="datepicker1" class="col-sm-20 " />
                                        <script>
                                        $('#datepicker1').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    <select id="department" class="form-select col-sm-19 " id="department">
                                        <option selected>Choose...</option>
                                        <option>Special</option>
                                        <option>Legal</option>
                                        <option>Double-Legal</option>
                                      </select>
                                </td>
                                <td>
                                    <input id="datepicker2" class="col-sm-20 " />
                                        <script>
                                        $('#datepicker2').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    <select id="department" class="form-select col-sm-19 " id="department">
                                        <option selected>Choose...</option>
                                        <option>Special</option>
                                        <option>Legal</option>
                                        <option>Double-Legal</option>
                                      </select>
                                </td>
                                <td>
                                    <input id="datepicker3" class="col-sm-20 " />
                                        <script>
                                        $('#datepicker3').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    <select id="department" class="form-select col-sm-19 " id="department">
                                        <option selected>Choose...</option>
                                        <option>Special</option>
                                        <option>Legal</option>
                                        <option>Double-Legal</option>
                                      </select>
                                </td>
                                <td>
                                    <input id="datepicker4" class="col-sm-20 " />
                                        <script>
                                        $('#datepicker4').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                        
                                    <select id="department" class="form-select col-sm-19 " id="department">
                                        <option selected>Choose...</option>
                                        <option>Special</option>
                                        <option>Legal</option>
                                        <option>Double-Legal</option>
                                      </select>
                                </td>
                                <td>
                                    <input id="datepicker5" class="col-sm-20 "/>
                                        <script>
                                        $('#datepicker5').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    <select id="department" class="form-select col-sm-19 " id="department">
                                        <option selected>Choose...</option>
                                        <option>Special</option>
                                        <option>Legal</option>
                                        <option>Double-Legal</option>
                                      </select>
                                </td>
                                </tr>
                                
                    
                              </tbody>
                        </table>
                      </div>
                </form>
            </div>
        </div>
</div>
    </body>
    <div class="col mb-3" align="right"><a class="btn btn-success" href="#" role="button">Save</a>

</html>