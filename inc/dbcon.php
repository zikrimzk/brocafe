<?php

$servername="localhost";
$dbusr="root";
$dbpass="";
$dbname="satriacafe";

$conn= mysqli_connect($servername, $dbusr, $dbpass, $dbname);

if($conn -> connect_error)
{
    die("Oh no , cannot connect to database...Try again !". $conn -> connect_error );
}




