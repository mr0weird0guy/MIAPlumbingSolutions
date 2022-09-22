<?php
include "connection.php";

$fname = mysqli_real_escape_string($conn,$_POST['name1']);
$lname = mysqli_real_escape_string($conn,$_POST['name2']);
$address1 = mysqli_real_escape_string($conn,$_POST['Address-1']);
$address2 = mysqli_real_escape_string($conn,$_POST['Address-2']);
$address3 = mysqli_real_escape_string($conn,$_POST['Address-3']);
$address4 = mysqli_real_escape_string($conn,$_POST['Address-4']);
$address5 = mysqli_real_escape_string($conn,$_POST['Address-5']);
$email = mysqli_real_escape_string($conn,filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL));
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$help = mysqli_real_escape_string($conn,$_POST['help']);
$newsletter = $_POST['newsletter'];

if(isset($newsletter)) {
  $newsletter = 'yes';
}else{
  $newsletter = 'no';
}

$query = "INSERT INTO asknewsletter(firstName, lastName, Address1, Address2, Address3, Address4, Address5, email, phone, question, newsletter)
VALUES ('$fname','$lname','$address1','$address2','$address3','$address4','$address5','$email','$phone','$help','$newsletter')";

if (!mysqli_query($conn, $query)){
  die(mysqli_error($conn));
}
header("Location: ../ask.htm");
?>