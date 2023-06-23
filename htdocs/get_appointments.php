<?php
error_reporting(0);

include 'db.php';

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

while ($res = $result->fetch_assoc()) {

    echo '<div class="appointment-item">';
    echo '<div class="appointment-item-sector section1">';
    echo '<h3>Appointment at:</h3>';
    echo '<p>'.$res['date'].'</p>';
    echo '</div>';
    echo '<div class="appointment-item-sector section2">';
    echo '<h3>Room:</h3>';

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

    echo '</div>';
    echo '<div class="appointment-item-sector section3">';
    echo '<h3>Doctor:</h3>';

    include 'db.php';
    $dsql = "SELECT * FROM doctor WHERE id = $doctor_id";
    $dresult = $conn->query($dsql);
    while ($dres = $dresult->fetch_assoc()){
    echo '<p>Dr. '.$dres['name'].' '.$dres['surname'].'</p>';
    }
    $conn->close();

    echo '</div>';
    echo '<div class="appointment-item-sector section4">';
    echo '<h3>Patient:</h3>';

    include 'db.php';
    $psql = "SELECT * FROM patient WHERE id = $patient_id";
    $presult = $conn->query($psql);
    while ($pres = $presult->fetch_assoc()){
    echo '<p>'.$pres['name'].' '.$pres['surname'].'</p>';
    }
    $conn->close();
    echo '</div>';
    echo '</div>';


}
?>