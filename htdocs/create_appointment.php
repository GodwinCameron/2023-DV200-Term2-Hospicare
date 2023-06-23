<?php
include 'db.php';

$date = $_POST["date"];
$patient_id = $_POST["patient_id"];
$doctor_id = $_POST["doctor_id"];
$room_id = $_POST["room"];

$sql = "INSERT INTO appointment(id, date, patient_id, doctor_id, room_id) VALUES ('','$date', '$patient_id', '$doctor_id','$room_id')";

$conn->query($sql);
$conn->close();

header("location: appointments.php");

?>