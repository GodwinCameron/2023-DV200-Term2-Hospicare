<?php
include 'db.php';

$name = $_POST["new-name"];
$surname = $_POST["new-surname"];
$age = $_POST["new-age"];
$gender = $_POST["new-gender"];
$phone_number = $_POST["new-phone_number"];
$email = $_POST["new-email"];
$password = $_POST["new-password"];
$patient_id = $_POST["new-patient_id"];
$medical_aid_number = $_POST["new-medical_aid_number"];
$profile_image = $_POST["new-link"];

$sql = "INSERT INTO `patient`(`id`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `password`, `profile_image`, `patient_id`, `medical_aid_number`) VALUES ('','$name', '$surname', '$age','$gender','$phone_number','$email','$password','$profile_image','$patient_id','$medical_aid_number')";

$conn->query($sql);
$conn->close();

header("location: patients.php");

?>