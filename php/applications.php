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
  $resume = mysqli_real_escape_string($conn,$_POST['resume']);
  $skills = mysqli_real_escape_string($conn,$_POST['skills']);

  $query = "INSERT INTO applications(firstNname, lastName, add_1, add_2, add_3, add_4, add_5, Email, PhoneNo, ResumeLink, Skills)
  VALUES ('$fname','$lname','$address1','$address2','$address3','$address4','$address5','$email','$phone','$resume','$skills')";
  
  if (!mysqli_query($conn, $query)){
    die(mysqli_error($conn));
  }
  // if  ($query){
  //   header("Location:applicaion.htm");
  // }
  header("Location: ../application.htm");
?>