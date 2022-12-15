<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM patients WHERE id='$patient_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $patient = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <p class="form-control">
                                            <?=$patient['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <p class="form-control">
                                            <?=$patient['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <p class="form-control">
                                            <?=$patient['gender'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date of Birth</label>
                                        <p class="form-control">
                                            <?=$patient['dob'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$patient['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <p class="form-control">
                                            <?=$patient['city'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <p class="form-control">
                                            <?=$patient['province'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Postal Code</label>
                                        <p class="form-control">
                                            <?=$patient['pcode'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?=$patient['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$patient['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>List of current medications</label>
                                        <p class="form-control">
                                            <?=$patient['currentmed'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>List of allergies</label>
                                        <p class="form-control">
                                            <?=$patient['allergies'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Referring doctor</label>
                                        <p class="form-control">
                                            <?=$patient['refdoctor'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>