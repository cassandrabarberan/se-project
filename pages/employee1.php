<?php
$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, "dbpayroll");

$query = "SELECT * FROM employee";
$run_query = mysqli_query($connect, $query)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title>


  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <link rel="stylesheet" href="../css/navbar.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/navbar.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>





  <style>
    .status-active {
      border-radius: 5px;
      background-color: lightgreen;
      color: white;
      text-align: center;
      padding: 2px;

    }

    .status-inactive {
      border-radius: 5px;
      background-color: rgb(212, 81, 76);
      color: white;
      text-align: center;
      padding: 2px;

    }
  </style>





</head>

<body>
  <?php require_once "../pages/header.php"; ?>

  <div class="container p-3 my-3 border" style="background-color: white;">
    <div class="row">
      <div class="col">
        <h3>Employee</h3>
      </div>


      <div class="col" align="right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#emp_add">
          Add New Employee
        </button>

      </div>

    </div>


    <div class="card">
      <div class="card-header ">
        <div class="row">
          <div class="col">
            <form method="POST" action="">
              <div class="d-flex">
                <input class="form-control h-25" type="search" name="valueToSearch" placeholder="Search Employee"> <br><br>
                <button class="btn btn-outline-primary h-25 me-1" type="submit" name="search"> <i class="far fa-search"></i> </button>
              </div>
            </form>
          </div>

          <div class="col">
            <select class="form-select form-select" aria-label=".form-select example">
              <option selected>Select Department</option>
              <option value="1">Sale Department</option>
              <option value="2">Accounting Department</option>
              <option value="3">Corporate Department</option>
              <option value="2">Logistic Department</option>
              <option value="2">All</option>
            </select>
          </div>
          <div class="col text-right">
            <button class="btn btn-outline-success" type="submit">Export All</button>
          </div>
        </div>
      </div>





      <?php include('../pages/search_employee.php'); ?>

      <?php

      if (isset($_SESSION['message'])) {
      ?>
        <div class="alert alert-info text-center" style="margin-top:10px;">
          <?php echo $_SESSION['message']; ?>
        </div>
      <?php

        unset($_SESSION['message']);
      }
      ?>

      <?php include('../pages/add_emp.php'); ?>


      <!-- JS Bundle -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>

</html>