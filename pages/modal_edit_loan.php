<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<?php

$id = $_GET['id'];
//echo $id;

$conn = mysqli_connect("localhost", "root", "", "dbpayroll");

$sql = "SELECT * FROM loan_view WHERE employee_ID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

require_once "../pages/header.php";
?>


<!-- Modal -->
<div class="modal fade" id="loan_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../pages/edit_loan.php?id= <?php echo $row['employee_ID']; ?>" method="POST">
            <div class="row mb-1">
              <div class="col">
                <div class="row mb-2">
                  <label for="emp_name" class="col col-form-label">Last Name</label>
                  <div class="col">
                  <input type="textbox" class="form-control" id="fname" name="fname" value="<?php echo $row['last_name']; ?>">
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="emp_name" class="col col-form-label">First Name</label>
                  <div class="col">
                    <input type="textbox" class="form-control " id="emp_name">
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="type_of_salary" class="col col-form-label">Type of Loan</label>
                  <div class="col">
                    <select id="text" class="form-select " id="type_of_salary">
                      <option selected>Choose...</option>
                      <option>Monthly</option>
                      <option>Weekly</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="basic_rate" class="col col-form-label">Loan Number</label>
                  <div class="col">
                    <input type="textbox" class="form-control " id="basic_rate">
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="basic_rate" class="col col-form-label">Loan Date</label>
                  <div class="col">
                    <input id="datepicker1" width="276" />
                    <script>
                      $('#datepicker1').datepicker({
                        uiLibrary: 'bootstrap4'
                      });
                    </script>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row mb-2">
                  <label for="department" class="col col-form-label">Department</label>
                  <div class="col">
                    <select id="department" class="form-select " id="department">
                      <option selected>Choose...</option>
                      <option>Accounting Department</option>
                      <option>Corporate Department</option>
                      <option>Logistic Department</option>
                      <option>Sales Department</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="basic_rate" class="col col-form-label">From</label>
                  <div class="col">
                    <input id="datepicker2" width="276" />
                    <script>
                      $('#datepicker2').datepicker({
                        uiLibrary: 'bootstrap4'
                      });
                    </script>
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="basic_rate" class="col col-form-label">To</label>
                  <div class="col">
                    <input id="datepicker3" width="276" />
                    <script>
                      $('#datepicker3').datepicker({
                        uiLibrary: 'bootstrap4'
                      });
                    </script>
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="num_of_days" class="col col-form-label">Amount</label>
                  <div class="col">
                    <input type="textbox" class="form-control " id="num_of_days">
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a type="button" href="/pages/loans.html" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
  </div>