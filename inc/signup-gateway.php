<?php

require 'dbcon.php';

if(isset($_POST['submit']))
{
    $name=$_POST['s_name'];
    $email=$_POST['s_email'];
    $phone=$_POST['s_phone'];
    $pass=$_POST['s_password'];
    $pass2=$_POST['s_password2'];

    if($name==""||$email==""||$phone==""||$pass==""||$pass2=="")
    {
        echo '<script>window.alert("Please fill in all the textfield")</script>';
        echo " <meta http-equiv=\"refresh\" content=\"0; URL= ../login.php\">";
    }
    else{
        if($pass !== $pass2)
        {
            echo '<script>window.alert("Passwords don\'t match")</script>';
            echo " <meta http-equiv=\"refresh\" content=\"0; URL= ../index.php\">";
            
        }
        else{
            function UidExists($conn,$email)
            {
                $sql = "SELECT * FROM USER WHERE Uemail= ?;";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("location: ../index.php?error=emailRegistered");
                    exit();
                }
                mysqli_stmt_bind_param($stmt,"s",$email);
                mysqli_stmt_execute($stmt);

                $resultData=mysqli_stmt_get_result($stmt);

                if($row = mysqli_fetch_assoc($resultData))
                {
                    return $row;
                }
                else{
                    $result=false;
                    return $result;
                }
            }
            if(UidExists($conn,$email) !== false){
                echo'<script>window.alert("Your email has been registered, please login !")</script>';
                echo " <meta http-equiv=\"refresh\" content=\"0; URL= ../login.php\">";
            }
            else{
                $sql = "INSERT INTO USER (Uname , Uemail, Uphone, Upassword) VALUES ('$name','$email','$phone','$pass')";
                if($conn->query($sql)===TRUE)
                {
                    echo'<script>window.alert("Your data is sucessfully added !")</script>';
                    echo " <meta http-equiv=\"refresh\" content=\"0; URL= ../login.php\">";    
                }
                else{
                    echo '<script>window.alert("" Error : " . $sql . $conn->error")</script>';
                }

            }

           
        }
    }
    $conn ->close();





}
else{
    header("location: ../login.php");
    exit();
}