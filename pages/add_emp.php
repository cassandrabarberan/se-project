<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">






<!-- Modal -->
<div class="modal fade" id="emp_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-pills mb-3" id="add-emp" role="tablist" data-bs-target="#pills-emp">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-basic-details" data-bs-toggle="pill" data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic" aron ="true">Basic Details</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-work-details" data-bs-toggle="pill" data-bs-target="#pills-work" type="button" role="tab" aria-controls="pills-work" aron ="false">Work Details</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-service" aron ="false">Contributions
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-other-details" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aron ="false">Other Details</button>
          </li>
        </ul>
        <form action="../pages/add_employee.php" method="post">


          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-details">



              <div class="title">
                <h3>Personal Information</h3>
              </div>





              <div class="row mb-3">
                <div class="col-sm">
                  <div class="row mb-1">
                    <label for="fname" class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="fname" name="fname">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="mname" class="col-sm-4 col-form-label">Middle Name</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="mname" name="mname">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="lname" class="col-sm-4 col-form-label">Last Name</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="lname" name="lname">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="age" class="col-sm-4 col-form-label">Age</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="age" name="age">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="birth_date" class="col-sm-4 col-form-label">Birthdate</label>
                    <div class="col-sm">
                      <div class="form-group mb-3">
                        <input type="date" name="date_of_b" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="sex" class="col-sm-4 col-form-label">Gender</label>
                    <div class="col-sm">
                      <select class="form-select" aria-label="Default select example" id="sex" name="sex">
                      <option value="" selected hidden> Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                      </select>
                    </div>
                  </div>


                </div>
                <div class="col-sm">
                  <div class="row mb-1">
                    <label for="emp_address" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emp_address" name="emp_address">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emp_mobile" class="col-sm-4 col-form-label">Mobile Number</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emp_mobile" name="emp_mobile">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emp_nationality" class="col-sm-4 col-form-label">Nationality</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emp_nationality" name="emp_nationality">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emp_status" class="col-sm-4 col-form-label">Employee Status</label>
                    <div class="col-sm">
                      <select class="form-select" aria-label="Default select example" id="emp_status" name="emp_status">
                        <option value="" selected hidden> Select Status</option>
                        <option value="Casual">Casual</option>
                        <option value="Regular">Regular</option>

                      </select>
                    </div>
                    
                  </div>





                </div>

              </div>




            </div>

            <div class="tab-pane fade" id="pills-work" role="tabpanel" aria-labelledby="pills-work-details">

              <div class="row mb-3">

                <div class="col-sm">
                  <div class="title">
                    <h3>Employee Work Details</h3>
                  </div>

                  <div class="row mb-3">
                    <div class="col-sm">
                      
                      <div class="row mb-1">
                        <label for="b_rate" class="col-sm-4 col-form-label">Basic Rate</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="b_rate" name="b_rate">
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="n_of_leave" class="col-sm-4 col-form-label">No. Of Leave</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="n_of_leave" name="n_of_leave">
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="dept" class="col-sm-4 col-form-label">Department</label>
                        <div class="col-sm ">
                          <select class="form-select" aria-label="Default select example" id="dept" name="dept">
                            <option >Select Department</option>
                            <option value="Logistics">Logistics</option>
                            <option value="Sales">Sales</option>
                            <option value="Accounting">Accounting</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="pos" class="col-sm-4 col-form-label">Position</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="pos" name="pos">
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="emp_hist_pos" class="col-sm-4 col-form-label">Employee History Position</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="emp_hist_pos" name="emp_hist_pos">
                        </div>
                      </div>

                    </div>

                    <div class="col-sm">
                      <div class="row mb-1">
                        <label for="sss_no" class="col-sm-4 col-form-label">SSS No.</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="sss_no" name="sss_num">
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="ph_no" class="col-sm-4 col-form-label">Philhealth No.</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="ph_no" name="ph_num">
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="tin_no" class="col-sm-4 col-form-label">Tin No.</label>
                        <div class="col-sm">
                          <input type="textbox" class="form-control form-control-sm" id="tin_no" name="tin_num">
                        </div>
                      </div>

                      <div class="row mb-1">
                        <label for="date_hired" class="col-sm-4 col-form-label">Date Hired</label>
                        <div class="col-sm">
                        <div class="form-group mb-3">
                        <input type="date" name="date_hired" class="form-control" />
                      </div>
                        </div>
                      </div>
                      <div class="row mb-1">
                        <label for="date_resigned" class="col-sm-4 col-form-label">Date Resigned</label>
                        <div class="col-sm">

                        <div class="form-group mb-3">
                        <input type="date" name="date_resigned" class="form-control" />
                      </div>
                        </div>
                      </div>

                      <div class="row mb-1">
                        <label for="employ_stat" class="col-sm-4 col-form-label">Employment Status</label>
                        <div class="col-sm">
                          <select class="form-select" aria-label="Default select example" id="employ_stat" name="employ_stat">
                            <option >Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>

                          </select>
                        </div>
                      </div>


                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">
              <div class="tab-pane fade show active" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">

                <div class="row">
                  <div class="col">
                    <h3>Contributions</h3>
                    <div class="row mb-1">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">SSS</label>
                      <div class="col-sm">
                        <input type="textbox" class="form-control form-control w-50" id="sss_contribution" name="sss_contribution">
                      </div>
                    </div>
                    <div class="row mb-1">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Philhealth</label>
                      <div class="col-sm">
                        <input type="textbox" class="form-control form-control w-50" id="phic_contribution" name="phic_contribution">
                      </div>
                    </div>
                    <div class="row mb-1">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Employee's Fund</label>
                      <div class="col-sm">
                        <input type="textbox" class="form-control form-control w-50" id="ef_contribution" name="ef_contribution">
                      </div>
                    </div>
                    <div class="row mb-1">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">HDMF(Pag-ibig) </label>
                      <div class="col-sm">
                        <input type="textbox" class="form-control form-control w-50" id="hdmf_contribution" name="hdmf_contribution">
                      </div>
                    </div>



                  </div>
                  
                </div>
                <br><br>
                


              </div>
            </div>

            <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-details">
              <div class="title">
                <h3>Employee Other Details</h3>

              </div>

              <div class="row mb-3">



                <div class="col-sm">

                  <div class="row mb-1">
                    <label for="marital_stat" class="col-sm-4 col-form-label">Marital Status</label>
                    <div class="col-sm">
                      <select class="form-select" aria-label="Default select example" id="marital_stat" name="marital_stat">
                        <option >Select Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>

                      </select>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <label for="n_of_children" class="col-sm-4 col-form-label ">No. of Children</label>
                    <div class="col-sm">
                      <input type="number" min="0" max="50" class="form-control form-control-sm" id="n_of_children" name="n_of_children">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse (if applicable)</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="spouse_name" name="spouse_name">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse Occupation (if applicable)</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="spouse_occ" name="spouse_occ">
                    </div>
                  </div>

                  <br><br>

                  <div class="row mb-1">
                    <label for="dependant" class="col-sm-4 col-form-label">Dependant</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="dependant" name="dependant">
                    </div>
                  </div>
                  

                </div>


                <div class="col">

                
                  <div class="row mb-1">
                    <label for="emergency_contact_name" class="col-sm-4 col-form-label">Emergency Contact Person</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emergency_contact_name" name="emergency_contact_name">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emergency_contact_num" class="col-sm-4 col-form-label">Emergency Contact No.</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emergency_contact_num" name="emergency_contact_num">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="emergency_contact_add" class="col-sm-4 col-form-label">Emergency Contact Address</label>
                    <div class="col-sm">
                      <input type="textbox" class="form-control form-control-sm" id="emergency_contact_add" name="emergency_contact_add">
                    </div>
                  </div>
                  

                 
                </div>




              </div>




            </div>


            <div class="pills-footer" align="right">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="ADD" class="btn btn-primary">Save changes</button>
              
            </div>


          </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>