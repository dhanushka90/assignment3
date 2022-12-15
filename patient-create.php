
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Patient 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>First name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Type Patient's First Name" required>
                        </div>
                        <div class="mb-3">
                            <label>Last name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Type patient's Last Name" required>
                        </div>
                            
                            <div class="mb-3">
                                <label>Gender</label>
                                    <div>
                                        <label for ="male" class="form-check-inline">
                                        <input type="radio" name="gender" value="m" id="male"/>Male</label>
                                        <label for ="female" class="form-check-inline">
                                        <input type="radio" name="gender" value="f"  id="female"/>Female</label>
                                        <label for ="other" class="form-check-inline">
                                        <input type="radio" name="gender" value="o"  id="other"/>Other</label>
                                    </div>
                            </div>
                            <div class="mb-3">
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Type Patient's Address" required>
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Type Patient's City" required>
                        </div>
                            <div class="mb-3">
                            <label>Province</label>
                            <select name="province" class="form-control">
                                <option selected>-- Select Province --</option>
                                <option value="AB">Alberta</option>
                                <option value="BC">British Columbia</option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NL">Newfoundland and Labrador</option>
                                <option value="NT">Northwest Territories</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="NU">Nunavut</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="QC">Quebec</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="YT">Yukon</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Postal code</label>
                            <input type="text" name="pcode" class="form-control" placeholder="XXX XXX" required>
                        </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Type Patient's Phone Number" required minlength="10" maxlength="10">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Type Patient's Email">
                            </div>
                            <div class="mb-3">
                            <label>List of current medications</label>
                            <input type="text" name="currentmed" class="form-control" placeholder="Type Patient's Current Medications">
                        </div>
                        <div class="mb-3">
                            <label>List of allergies</label>
                            <input type="text" name="allergies" class="form-control" placeholder="Type list of Allergies">
                        </div>
                        <div class="mb-3">
                            <label>Referring doctor</label>
                            <input type="text" name="refdoctor" class="form-control" placeholder="Type Referring Doctor">
                        </div>
                            <div class="mb-3">
                                <button type="submit" name="save_patient" class="btn btn-primary">Save Patient</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>