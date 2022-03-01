<?php
if (isset($_POST['search_loan'])) {
  $valueToSearch = $_POST['valueToSearchloan'];
  $query = "SELECT * FROM emp_view1 WHERE CONCAT(employee_ID, last_name, first_name, department, employment_status )
    LIKE '%" . $valueToSearch . "%' ";



  $search_result = filterTable($query);
} else {
  $query = "SELECT * FROM `loan_view`";
  $search_result = filterTable($query);
}

function filterTable($query)
{

  $connect = mysqli_connect("localhost", "root", "", "dbpayroll");
  $filter_result = mysqli_query($connect, $query);
  return $filter_result;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loans</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="../css/navbar.css">

</head>

<body>
  <?php require_once "../pages/header.php" ?>



  

  <div class="container p-3 my-3 border" style="background-color: white;">
    <div class="row">
      <div class="col">
        <h3>Loans</h3>
      </div>
      <div class="col" align="right">
        <!-- Button trigger modal -->

        <button type="button" class="btn btn-outline-info mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          + ADD NEW LOAN
        </button>

      </div>
      <!--MODAL FOR ADDING LOAN-->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Loan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Employee Id</label>
                <div class="col-sm">
                  <input type="textbox" class="form-control " id="basic_rate">
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Employee Name</label>
                <div class="col-sm">
                  <input type="textbox" class="form-control " id="basic_rate">
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Department</label>
                <div class="col-sm">
                  <select id="department" class="form-select " id="department">
                    <option selected>Select Department</option>
                    <option>Accounting Department</option>
                    <option>Corporate Department</option>
                    <option>Logistic Department</option>
                    <option>Sales Department</option>
                  </select>
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Loan Type</label>
                <div class="col-sm">
                  <select id="text" class="form-select " id="type_of_salary">
                    <option selected>Choose...</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                  </select>
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Loan Application Number</label>
                <div class="col-sm">
                  <input type="textbox" class="form-control " id="basic_rate">
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Loan Date</label>
                <div class="col-sm">
                  <input id="datepicker1" />
                  <script>
                    $('#datepicker1').datepicker({
                      uiLibrary: 'bootstrap4'
                    });
                  </script>
                </div>
              </div>
              <div class="row mb-2">


                <div class="input-group ">
                  <label for="basic_rate" class="col-sm-5 col-form-label">Loan Terms</label>
                  <input type="number" class="form-control" id="monthly_due" name="month_due" min="1" max="50">
                  <span class="input-group-text text-secondary-sm ">Month/s</span>
                </div>

              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">From</label>
                <div class="col-sm">
                  <input id="datepicker2" />
                  <script>
                    $('#datepicker2').datepicker({
                      uiLibrary: 'bootstrap4'
                    });
                  </script>
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">To</label>
                <div class="col-sm">
                  <input id="datepicker3" />
                  <script>
                    $('#datepicker3').datepicker({
                      uiLibrary: 'bootstrap4'
                    });
                  </script>
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Total Amount</label>
                <div class="col-sm">
                  <input type="textbox" class="form-control " id="basic_rate">
                </div>
              </div>
              <div class="row mb-2">
                <label for="basic_rate" class="col-sm-5 col-form-label">Monthly Due</label>
                <div class="col-sm">
                  <input type="textbox" class="form-control " id="basic_rate">
                </div>
              </div>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
              <button type="button" name="add_loan" class="btn btn-primary">ADD LOAN</button>
            </div>
          </div>
        </div>
      </div>

      <body>
        <?php require_once "../pages/header.php" ?>


        <div class="card">
          <div class="card-header ">


            <form method="POST" action="">
              <div class="d-flex">
                <input class="form-control h-25" type="search" name="valueToSearchloan" placeholder="Search"> <br><br>
                <button class="btn btn-outline-primary h-25 me-1" type="submit" name="searchloan"> <i class="far fa-search"></i> </button>

                <select id="department" class="form-select form-select h-25" id="department">
                  <option selected>Choose Department</option>
                  <option>Accounting Department</option>
                  <option>Corporate Department</option>
                  <option>Logistic Department</option>
                  <option>Sales Department</option>
                  <option>All</option>
                </select>



                <select id="text" class="form-select form-select h-25" id="type_of_salary">
                  <option selected>Choose Type of Loans</option>
                  <option>SSS Loans</option>
                  <option>HDMF Loan</option>
                  <option>EF Loan</option>
                </select>
              </div>


            </form>


          </div>
        </div>
        <div class="col" align="right"><a class="btn btn-outline-success mt-3" href="" role="button">Export Report</a></div>
        <div class="card-body">
          <?php include('../pages/search_loan.php'); ?>
        </div>
    </div>




  </div>


</body>

</html>