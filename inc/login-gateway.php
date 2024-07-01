<?php
require 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['usrname'] = $_POST['l_email'];
    $_SESSION['password'] = $_POST['l_password'];

    if(empty($_POST['l_email']) || empty($_POST['l_password']))
    {
        echo "<script>alert('Please fill in email and password !!');</script>";
    }
    else{
        
        $sql="SELECT * FROM USER WHERE Uemail= '".$_SESSION['usrname']."' AND Upassword = '".$_SESSION['password']."' ";
        $sqlA = "SELECT * FROM STAFF WHERE Semail ='".$_SESSION['usrname']."' AND Spassword = '".$_SESSION['password']."' AND Semail LIKE '%@admin.com%'";
        $sqlS = "SELECT * FROM STAFF WHERE Semail ='".$_SESSION['usrname']."' AND Spassword = '".$_SESSION['password']."' AND Semail LIKE '%@staff.com%'";


        $result=$conn->query($sql);
        $resultA=$conn->query($sqlA);
        $resultS=$conn->query($sqlS);


        if($result->num_rows>0 ||$resultA->num_rows>0 ||$resultS->num_rows>0)
        {
            if($row=$result->fetch_assoc()){
                echo " <meta http-equiv=\"refresh\" content=\"1; URL= ../userhome.php\">";

            }
            else if($row=$resultA->fetch_assoc()){   
                echo " <meta http-equiv=\"refresh\" content=\"1; URL=../adminHome.php\">";
                
            }   
            else if($row=$resultS->fetch_assoc()){
                echo " <meta http-equiv=\"refresh\" content=\"1; URL=../staffHome.php\">";
            }
        }
        else{
            echo "<script>alert('Email OR password incorrect, Try again!!');</script>";
            echo " <meta http-equiv=\"refresh\" content=\"0; URL=../login.php\">";
        }

    }

    $conn->close();
}
else{
    header("location: ../login.php");
    exit();
}