<?php
include 'connection.php';

$fname = mysqli_real_escape_string($conn,$_POST['name1']);
$lname = mysqli_real_escape_string($conn,$_POST['name2']);
$email = mysqli_real_escape_string($conn,filter_input(INPUT_POST,'Email',FILTER_VALIDATE_EMAIL));
$phone = mysqli_real_escape_string($conn,$_POST['phone']);

$ffname = mysqli_real_escape_string($conn,$_POST['name3']);
$flname = mysqli_real_escape_string($conn,$_POST['name4']);
$femail = mysqli_real_escape_string($conn,filter_input(INPUT_POST,'fEmail',FILTER_VALIDATE_EMAIL));
$fphone = mysqli_real_escape_string($conn,$_POST['fphone']);

$query = "INSERT INTO referal(firstname, lastname, email, phone, ffirstname, flastname, femail, fphone)
VALUES ('$fname','$lname','$email','$phone','$ffname','$flname','$femail','$dphone')";

if (!mysqli_query($conn, $query)){
  die(mysqli_error($conn));
}
header("Location: ../Referal.htm");
?>