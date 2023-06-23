<?php
error_reporting(0);

include 'db.php';

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

while ($res = $result->fetch_assoc()) {
    $counter = $counter + 1;
    if (is_float($counter/2)){
        echo "<div id=".$res['id']." class='patient-list-item2' onclick=OnePatient(this)>";
    } else {
        echo "<div id=".$res['id']." class='patient-list-item' onclick=OnePatient(this)>";
    }
    echo "<h5 class='item-entry'>" . $res['patient_id'] . "</h5>";
    echo "<h5 class='item-entry2'>" . $res['surname'] . "</h5>";
    echo "<h5 class='item-entry3'>" . $res['name'] . "</h5>";
    echo "<h5 class='item-entry3'>" . $res['gender'] . "</h5>";
    echo "</div>";
    
}
$conn->close();
?>