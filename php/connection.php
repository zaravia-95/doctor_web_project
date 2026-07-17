<?php
    $con = mysqli_connect("localhost","root","","doctor_appointment_system");
    if($con==true)
    {
        return $con;
    }
    else
    {
        echo "Error While Connecting Database";
    }
?>