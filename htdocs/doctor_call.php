<?php
include 'db.php';
$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);
    while ($res = $result->fetch_assoc()){

        $doc_id = $res['doctor_id'];

        include 'db.php';
        $dsql = "SELECT * FROM doctor WHERE id = $doc_id";
        $dresult = $conn->query($dsql);
        while ($dres = $dresult->fetch_assoc()){
            echo '<div class="doctor-call-card">';
            echo '<h3>Dr. '.$dres['surname'].'</h3>';
            echo '<p>Upcomming Appointment</p>';
            echo '</div>';
        }
    }
    $conn->close();
?>








