<?php
error_reporting(0);

include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM patient WHERE id = '$id'";
$result = $conn->query($sql);

while ($res = $result->fetch_assoc()) {

    $password = $res['password'];

    if ($res['id'] == $_GET['edit']) {
        echo '<div class="patient-header">';
        echo '<div class="patient-picture"><img class="profile_image" src="'.$res['profile_image'].'"/></div>';
        echo '<form action="update_patient.php" method="POST">';
        echo '<input name="profile_image" value="'.$res['profile_image'].'">';
        echo '<input name="name" value="'.$res['name'].'">';
        echo '<input name="surname" value="'.$res['surname'].'">';
        echo '<input name="age" value="'.$res['age'].'">';
        echo '<input name="gender" value="'.$res['gender'].'">';
        echo '<input name="phone_number" value="'.$res['phone_number'].'">';
        echo '<input name="email" value="'.$res['email'].'">';
        echo '<input name="password" value="'.$res['password'].'">';
        echo '<input name="patient_id" value="'.$res['patient_id'].'">';
        echo '<input name="medical_aid_number" value="'.$res['medical_aid_number'].'">';
        echo '<input type="hidden" name="id" value="' . $res['id'] . '">';
        echo '<button type="submit">Save Changes</button>';
        echo '</form>';
        echo '</div>';
        echo '<div class="profile-actions-buttons">';
        echo '<div class="action-button">';
        echo '<a href="patients.php?id='.$res['id'].'"><div class="action-button-icon profile-actions-back"></div></a>';
        echo '<div class="action-button-description">';
        echo '<h4>Go Back</h4>';
        echo '<h6 class="label">Abandon changes made and exit</h6>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="patient-header">';
        echo '<div class="patient-picture"><img class="profile_image" src="'.$res['profile_image'].'"/></div>';
        echo '<div class="patient-titles">';
        echo '<h1 id="patient-name">'.$res['name'].' '.$res['surname'].'</h1>';
        echo '<p>Age: '.$res['age'].'</p>';
        echo '<p class="caps">'.$res['gender'].'</p>';
        echo '<p>ID: '.$res['id'].'</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="patient-more-info">';
        $english_format_number = number_format($number);
        echo '<p>Phone number: (+27) '.$english_format_number = number_format($res['phone_number'], 0, '.', ' ').'</p>';
        echo '<p>Email: '.$res['email'].'</p>';
        echo '<p>Patient ID: '.$res['patient_id'].'</p>';
        echo '<p>Medical Aid Number: '.$res['medical_aid_number'].'</p>';
        echo '<p>Last Appointment: Date </p>';
        echo '</div>';
        echo '<div class="profile-actions-buttons">';
        echo '<div class="action-button">';
        echo '<a href="appointments.php?pid='.$res['id'].'"><div class="action-button-icon profile-actions-appointment"></div></a>';
        echo '<div class="action-button-description">';
        echo '<h4>Appointment</h4>';
        echo '<h6 class="label">Schedule new appointment</h6>';
        echo '</div>';
        echo '</div>';
        echo '<div class="action-button">';
        echo '<a href="patients.php?id='.$res['id'].'&edit='.$res['id'].'"><div class="action-button-icon profile-actions-update"></div></a>';
        echo '<div class="action-button-description">';
        echo '<h4>Update Info</h4>';
        echo '<h6 class="label">Alter Patient Data</h6>';
        echo '</div>';
        echo '</div>';
        echo '<div class="action-button">';
        echo '<a href="delete_patient.php?id='.$res['id'].'"><div class="action-button-icon profile-actions-delete"></div></a>';
        echo '<div class="action-button-description" onclick="ConfirmDelete()">';
        echo '<h4>Delete User</h4>';
        echo '<h6 class="label">Remove Pateint</h6>';
        echo '</div>';                        
        echo '</div>';
        echo '</div>';
    }

    // echo "<tr>";
    
    // if ($row['id'] == $_GET['id']) {
    //     echo '<form class="form-inline m-2" action="update.php" method="POST">';
    //     echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
    //     echo '<td><input type="number" class="form-control" name="score" value="' . $row['score'] . '"></td>';
    //     echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    //     echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    //     echo '</form>';
    // } else {
    //     echo "<td>" . $row['name'] . "</td>";
    //     echo "<td>" . $row['score'] . "</td>";
    //     echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    // }

    // echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    // echo "</tr>";
}
$conn->close();
?>