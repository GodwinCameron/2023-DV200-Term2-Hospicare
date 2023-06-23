<?php
error_reporting(0);

include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM doctor WHERE id = '$id'";
$result = $conn->query($sql);

while ($res = $result->fetch_assoc()) {

    echo '<br/>';
    echo '<div class="profile-banner-content">';
    echo '<div class="profile-banner-dataline">';
    echo '<h4>'.$res['specialisation'].'</h4>';
    echo '</div>';
    echo '<br/><h5>Dr. '.$res['name'].' '.$res['surname'].'</h5>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">Age:</p><p>'.$res['age'].'</p>';
    echo '</div>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">Sex:</p><p>'.$res['gender'].'</p>';
    echo '</div>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">Role:</p><p>'.$res['specialisation'].'</p>';
    echo '</div>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">Tel:</p><p>(+27) '.$english_format_number = number_format($res['phone_number'], 0, '.', ' ').'</p>';
    echo '</div>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">E-mail:</p><p>'.$res['email'].'</p>';
    echo '</div>';
    echo '<br/>';
    echo '<div class="profile-banner-dataline">';
    echo '<p class="label">Income:</p><p>$ 128,000.00</p>';
    echo '</div>';
    echo '</div>';
}

    $conn->close();
?>