<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$password = $_POST["password"];
$profile_image = $_POST['profile_image'];
$patient_id = $_POST["patient_id"];
$medical_aid_number = $_POST["medical_aid_number"];

$sql = "UPDATE patient SET name = '$name', surname = '$surname', age = '$age', gender = '$gender', phone_number = '$phone_number', email = '$email', password='$password', profile_image = '$profile_image', patient_id='$patient_id', medical_aid_number='$medical_aid_number' WHERE id = '$id' ";

$result = $conn->query($sql);

$conn->close();
header("location: patients.php?updated");

?>