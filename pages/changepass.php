<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    
    <link rel="stylesheet" href="../css/changepass.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">

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

        
            
                <div class="container p-3 my-2 border bg-light w-25 mt-5">
                    <div class="card-body text-center">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <img src="../img/logo.png">
                                <h3 class="mb-0">Change Password</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="inputPasswordOld">Current Password</label>
                                        <input type="password" class="form-control" id="inputPasswordOld" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNew">New Password</label>
                                        <input type="password" class="form-control" id="inputPasswordNew" required="">
                                        <span class="form-text small text-muted">
                                                The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                            </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNewVerify">Verify</label>
                                        <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                        <span class="form-text small text-muted">
                                                To confirm, type the new password again.
                                            </span>
                                    </div>
                                    <div class="form-group">
                                        <a type="submit" class="btn btn-success btn-lg float-right" href="/pages/dashboard.html">Save</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /form card change password -->
                    </div>
                  </div>
                </div>
            

        

        



       
</body>
</html>