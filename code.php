<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['delete_patient']);

    $query = "DELETE FROM patients WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['patient_id']);
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $gender = $_POST['gender'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $province = $_POST['province'];
    $pcode = mysqli_real_escape_string($con,$_POST['pcode']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $currentmed = mysqli_real_escape_string($con,$_POST['currentmed']);
    $allergies = mysqli_real_escape_string($con,$_POST['allergies']);
    $refdoctor = mysqli_real_escape_string($con,$_POST['refdoctor']);

    $query = "UPDATE patients SET fname='$fname',lname='$lname',gender='$gender',dob='$dob',address='$address',city='$city' ,province='$province' ,pcode='$pcode',phone='$phone',email='$email',currentmed='$currentmed',allergies='$allergies',refdoctor='$refdoctor' WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_patient']))
{
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $gender = $_POST['gender'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $province = $_POST['province'];
    $pcode = mysqli_real_escape_string($con,$_POST['pcode']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $currentmed = mysqli_real_escape_string($con,$_POST['currentmed']);
    $allergies = mysqli_real_escape_string($con,$_POST['allergies']);
    $refdoctor = mysqli_real_escape_string($con,$_POST['refdoctor']);

    $query = "INSERT INTO patients (fname,lname,gender,dob,address,city,province,pcode,phone,email,currentmed,allergies,refdoctor) VALUES ('$fname','$lname','$gender','$dob','$address','$city','$province','$pcode','$phone','$email','$currentmed','$allergies','$refdoctor' )";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Patient Created Successfully";
        header("Location: patient-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Created";
        header("Location: patient-create.php");
        exit(0);
    }
}


?>