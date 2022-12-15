<?php
session_start();
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

    <title>Patient Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="patient_id" value="<?= $patient['id']; ?>">

                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fname" value="<?=$patient['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" value="<?=$patient['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gender</label>
                                            <div>
                                            <label for ="male" class="form-check-inline">
                                            <input type="radio" name="gender" value="m" <?php echo ($patient ['gender']=='m')? "checked":""; ?> id="male"/>Male</label>
                                            <label for ="female" class="form-check-inline">
                                            <input type="radio" name="gender" value="f" <?php echo ($patient ['gender']=='f')? "checked":""; ?> id="female"/>Female</label>
                                            <label for ="other" class="form-check-inline">
                                            <input type="radio" name="gender" value="o" <?php echo ($patient ['gender']=='o')? "checked":""; ?> id="other"/>Other</label>
                                            </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$patient['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="city" value="<?=$patient['city'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                    <label>Province</label>
                                    <select name="province" class="form-control">
                                        <option selected>-- Select Province --</option>
                                        <option value="AB" <?php echo ($patient ['province']=='AB')? "selected":""; ?> >Alberta</option>
                                        <option value="BC" <?php echo ($patient ['province']=='BC')? "selected":""; ?> >British Columbia</option>
                                        <option value="MB" <?php echo ($patient ['province']=='MB')? "selected":""; ?> >Manitoba</option>
                                        <option value="NB" <?php echo ($patient ['province']=='NB')? "selected":""; ?> >New Brunswick</option>
                                        <option value="NL" <?php echo ($patient ['province']=='NL')? "selected":""; ?> >Newfoundland and Labrador</option>
                                        <option value="NT" <?php echo ($patient ['province']=='NT')? "selected":""; ?> >Northwest Territories</option>
                                        <option value="NS" <?php echo ($patient ['province']=='NS')? "selected":""; ?> >Nova Scotia</option>
                                        <option value="NU" <?php echo ($patient ['province']=='NU')? "selected":""; ?> >Nunavut</option>
                                        <option value="ON" <?php echo ($patient ['province']=='ON')? "selected":""; ?> >Ontario</option>
                                        <option value="PE" <?php echo ($patient ['province']=='PE')? "selected":""; ?> >Prince Edward Island</option>
                                        <option value="QC" <?php echo ($patient ['province']=='QC')? "selected":""; ?> >Quebec</option>
                                        <option value="SK" <?php echo ($patient ['province']=='SK')? "selected":""; ?> >Saskatchewan</option>
                                        <option value="YT" <?php echo ($patient ['province']=='YT')? "selected":""; ?> >Yukon</option>
                                    </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>Postal code</label>
                                        <input type="text" name="pcode" value="<?=$patient['pcode'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$patient['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$patient['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>List of current medications</label>
                                        <input type="text" name="currentmed" value="<?=$patient['currentmed'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>List of allergies</label>
                                        <input type="email" name="allergies" value="<?=$patient['allergies'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Referring doctor</label>
                                        <input type="text" name="refdoctor" value="<?=$patient['refdoctor'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_patient" class="btn btn-primary">
                                            Update Patient
                                        </button>
                                    </div>

                                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>