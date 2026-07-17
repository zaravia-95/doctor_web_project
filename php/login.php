<?php
include("connection.php");

if(isset($_POST['btnlogin']))
{
    echo $email = $_POST['email'];
    echo $pass = SHA1($_POST['password']);
    $query = mysqli_query($con,"select * from users where email='$email' AND password='$pass'");
    $row = mysqli_fetch_array($query);

    if($row["role"]=="Patient")
    {
        /* Patient Record Fetch */
        $patient = mysqli_query($con,"select * from patients where user_id='$row[id]'");
        $fetchpatient = mysqli_fetch_array($patient);
        $fullname = $fetchpatient["first_name"] ." ". $fetchpatient["last_name"];

        /* After getting info of patient */
        session_start();
        $_SESSION["name"] = $fullname;
        $_SESSION["email"] = $email;
        $_SESSION["patientid"] = $fetchpatient['id'];

        header("Location:../index.php?msg=login");
    }
    elseif($row["role"]=="Doctor")
    {
        /* Doctor Record Fetch */
        $doctor = mysqli_query($con,"select * from doctors where user_id='$row[id]'");
        $fetchdoctor = mysqli_fetch_array($doctor);
        $fullname = $fetchdoctor["first_name"] ." ". $fetchdoctor["last_name"];

        /* After getting info of Doctor will be routed to Doctor's Dashboard */
        session_start();
        $_SESSION["name"] = $fullname;
        $_SESSION["email"] = $email;
        $_SESSION["doctorid"] = $fetchdoctor['id'];

        header("Location:../doctor/dashboard.php?msg=login");
    }
    else
    {
        header("Location:../index.php?msg=failed");
    }

}
?>