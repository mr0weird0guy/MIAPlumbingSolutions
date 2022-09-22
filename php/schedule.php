<?php
include "connection.php";

$fname = mysqli_real_escape_string($conn,$_POST['name1']);
$lname = mysqli_real_escape_string($conn,$_POST['name2']);
$address1 = mysqli_real_escape_string($conn,$_POST['Address1']);
$address2 = mysqli_real_escape_string($conn,$_POST['Address2']);
$address3 = mysqli_real_escape_string($conn,$_POST['Address3']);
$address4 = mysqli_real_escape_string($conn,$_POST['Address4']);
$address5 = mysqli_real_escape_string($conn,$_POST['Address5']);
$email = mysqli_real_escape_string($conn,filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL));
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$issue = mysqli_real_escape_string($conn,$_POST['issue']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
$time = mysqli_real_escape_string($conn,$_POST['time']);

$query = "INSERT INTO schedule(firstname, lastname, Address1, Address2, Address3, Address4, Address5, email, phone, issue, sdate, stime)
VALUES ('$fname','$lname','$address1','$address2','$address3','$address4','$address5','$email','$phone','$issue','$date','$time')";

if (!mysqli_query($conn, $query)){
  die(mysqli_error($conn));
}

header("Location: ../schedule.htm");
?>