<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM patient WHERE id = $id";
$conn->query($sql);

$conn->close();
header("location: patients.php");

?>