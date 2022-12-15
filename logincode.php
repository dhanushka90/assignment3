<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    //database connection

    $con = mysqli_connect("localhost","root","","assignment3");
    if($con->connect_error){
        die("failed to connect: ".$con->connect_error);
    }else {
        $stmt = $con->prepare("select * from login where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows >0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password) {
                header("location: index.php");
            } else{
                echo "<h2>Invalid Username or Password</h2>";
            }
        }else{
            echo "<h2><center>Invalid Username or Password</center></h2>";
            
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>

</head>

<body>
  
    <div class="py-5">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                <h5>Login</h5>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control"/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="text" id="password"  name="password" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>