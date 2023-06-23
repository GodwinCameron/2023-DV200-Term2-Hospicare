<?php 
include 'db.php';
$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);


  echo '<form action="create_appointment.php" method="POST">';
  echo '<label for="doctor">Select Doctor for Appointment -</label>';
  echo '<select name="doctor_id" class="appointment-selector">';
  echo '<option class="selector-option" value="none" selected disabled hidden> -select doctor- </option>';
  while ($res = $result->fetch_assoc()) {
  echo '<option value="'.$res['id'].'" class="selector-option">Dr. '.$res['name'].' '.$res['surname'].'</option>';
  }
  $conn->close();
  echo '</select><br/><br/>';

  echo '<label for="patient">Select Patient for Appointment -</label>';
  echo '<select name="patient_id" class="appointment-selector">';
  echo '<option class="selector-option" value="none" selected disabled hidden> -select patient- </option>';


include 'db.php';
$psql = "SELECT * FROM patient";
$presult = $conn->query($psql);
    while ($pres = $presult->fetch_assoc()){
        echo '<option value="'.$pres['id'].'" class="selector-option">'.$pres['patient_id'].' '.$pres['surname'].' '.$pres['name'].'</option>';
    }
    $conn->close();
    echo '</select><br/><br/>';

  echo '<label for="date">Select Date for Appointment -</label>';
  echo '<input name="date" class="appointment-selector date-pick" type="datetime-local" data-date-inline-picker="false" data-date-open-on-focus="true" />';
  echo '<br/>';
  echo '<br/>';


  echo '<label for="room">Select Room for Appointment -</label>';
  echo '<select name="room" class="appointment-selector">';
  echo '<option class="selector-option" value="none" selected disabled hidden> -select room- </option>';

  include 'db.php';
$rsql = "SELECT * FROM room";
$rresult = $conn->query($rsql);
while ($rres = $rresult->fetch_assoc()){
  echo '<option class="selector-option" value="'.$rres['id'].'">Room No. '.$rres['room_number'].' '.$rres['room_type'].'</option>';
}
$conn->close();
  echo '</select>';
  echo '<br/>';
  echo '<br/>';
  echo '<button type="submit" class="selector-button">Schedule the Appointment</button>';
  echo '</form>';
?>