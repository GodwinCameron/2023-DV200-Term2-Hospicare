<?php
error_reporting(0);

include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM appointment WHERE doctor_id = $id";
$result = $conn->query($sql);

while ($res = $result->fetch_assoc()) {

    echo '<div class="doctor-appoint-item">';
    echo '<h5>Appointment at:</h5>';
    echo '<p>'.$res['date'].'</p>';
    echo '<h5>Room:</h5>';

    $room_id = $res['room_id'];
    $patient_id = $res['patient_id'];
    $doctor_id = $res['doctor_id'];


    include 'db.php';
    $rsql = "SELECT * FROM room WHERE id = $room_id";
    $rresult = $conn->query($rsql);
    while ($rres = $rresult->fetch_assoc()){
    echo '<p>'.$rres['room_number'].' -   '.$rres['room_type'].'</p>';
    }
    $conn->close();

    echo '<h5>Patient:</h5>';

    include 'db.php';
    $psql = "SELECT * FROM patient WHERE id = $patient_id";
    $presult = $conn->query($psql);
    while ($pres = $presult->fetch_assoc()){
    echo '<p>'.$pres['name'].' '.$pres['surname'].'</p>';
    }
    $conn->close();

    echo '</div>';


}
?>