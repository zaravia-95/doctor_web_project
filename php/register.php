<?php
include("connection.php");

if(isset($_POST['btnsignup']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cities = $_POST['cities'];
    $pass = SHA1($_POST['password']);
    $role = $_POST['typejoin'];

    if($role==2)
    {
        $userquery = mysqli_query($con,"insert into users(role,email,password,status) values ('$role','$email','$pass','Active')");

        $getlastid = mysqli_query($con,"select MAX(id) AS id FROM users");
        $row = mysqli_fetch_assoc($getlastid);
        $userid = $row['id'];
        
        $patientquery = mysqli_query($con,"insert into patients(user_id,city_id,first_name,last_name,email) values ('$userid','$cities','$fname','$lname','$email')");

        if($userquery && $patientquery)
        {
            header("Location:../index.php?msg=success");
        }
        else
        {
            echo "problem";
        }
    }
    else
    {
        $userquery = mysqli_query($con,"insert into users(role,email,password,status) values ('$role','$email','$pass','Active')");

        $getlastid = mysqli_query($con,"select MAX(id) AS id FROM users");
        $row = mysqli_fetch_assoc($getlastid);
        $userid = $row['id'];
        
        $doctorquery = mysqli_query($con,"insert into doctors(user_id,city_id,first_name,last_name,email) values ('$userid','$cities','$fname','$lname','$email')");

        if($userquery && $doctorquery)
        {
            header("Location:../index.php?msg=success");
        }
        else
        {
            echo "problem";
        }
    }
}
?>