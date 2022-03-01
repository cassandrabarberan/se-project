<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/navbar.css">

</head>

<body>



    <!-- Modal -->
    <div class="modal fade" id="emp_details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Basic Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Work Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="false">Contributions and Loans</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Other Details</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



                            <form class="form">
                                <div class="title">
                                    <h3>Personal Information</h3>
                                </div>
                                <img src="../img/icon.png" class="rounded float-start" alt="emp_img" width="100" height="100">


                                <div class="row mb-3">
                                    <div class="col-sm">
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Name:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Juan Dela Cruz">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Age:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="24">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Birthdate:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="November 10, 1998">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Gender:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Male">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Department:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Logistics">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Address:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Baliwasan, Zamboanga City">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Mobile #:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="+63-912-345-6789">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nationality:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Filipino">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Employee Status:</label>
                                            <div class="col-sm">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Regular">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Position:</label>
                                    <div class="col-sm">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Operations Manager">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Date Hired:</label>
                                    <div class="col-sm">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="June 1, 2015">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Employment Status:</label>
                                    <div class="col-sm">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Active">
                                    </div>
                                </div>

                            </form>



                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="title">
                                <h3>Employee Work Details</h3>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="row mb-1">
                                        <label for="id_num" class="col-sm-4 col-form-label">ID #:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="id_num" value="11001">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Basic Rate:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="426">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Leave with Pay:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="6">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Department:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Logistics">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Position:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Operations Manager">
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Date Hired:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="June 1, 2015">
                                        </div>
                                    </div>



                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Date Resigned:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="--">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm">
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">SSS No.</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="10-0736655-5">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Philhealth No.</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0102-5131-5642">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Tin No.</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="123-456-789-000">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Employment Status:</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Active">
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                            <div class="row">
                                <div class="col">
                                    <h3>Contributions</h3>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">SSS</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="427.50">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Philhealth</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="150">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Employee's Fund</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="250">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">HDMF(Pag-ibig)</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3>Loans</h3>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">SSS</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="567">
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Employee's Fund</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="785.08">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">HDMF(Pag-ibig)</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="649.20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <h4>Total Deductions</h4>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Total Deductions</label>
                                <div class="col-sm">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2,928.78">
                                </div>
                            </div>
                        </div>





                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="title">
                                <h3>Family Details</h3>

                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h6>Parents</h6>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Mother's Name</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Jessa Dela Cruz">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Mother's Occupation</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Housewife">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Father's Name</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Luisito Dela Cruz">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Father's Occupation</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Unknown">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">No. of Siblings</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="3">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Baliwasan, Zamboanga City">
                                        </div>
                                    </div>
                                    <br><br>
                                    <h6>Incase of Emergency</h6>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Emergency Contact
                                            Person</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Jessa Dela Cruz">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Emergency Contact #</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="+63-912-345-6789">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Relationship</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Mother">
                                        </div>
                                    </div>

                                </div>


                                <div class="col">
                                    <h6>Marital Status</h6>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Marital Status</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Married">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Husband/Wife's Name(if
                                            married)</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Arlene Dela Cruz">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Occupation</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Housewife">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Children</label>
                                        <div class="col">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="3">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Dependant</label>
                                        <div class="col-sm">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="--">
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>







</body>

</html>