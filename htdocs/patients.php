<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
    <link rel="stylesheet" href="./main.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav-bar">
            <br/>
            <h5>Logged in as <?php echo $_SESSION['name'];?></h5>
            <div class="profile-picture nav-picture"></div>
            <div class="current-user"> <p>Dr. Santana &#9013;</p></div>
            <br/>
            <input class="nav-search-bar" type="text" placeholder="&#128269; Search">
            <br/><br/>
            <div class="nav-bar-links">
                <a href="/index.php?id=1"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> DOCTOR</h3>
                </div></a>
                <div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> PATIENT </h3><p class="left-arrow2">&#9664;</p>
                </div>
                <a href="appointments.php"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> APPOINT.</h3>
                </div></a>
            </div>
        </div>
        <!-- Nav Bar -->

        <div class="content">
            <div class="heading-section">
                <div class="title-section">
                    <h1>Patients</h1>
                </div>
                <div class="toolbar-section">
                    <p><span id="date-time"></span></p>
                    <script>
                        var dt = new Date();
                        document.getElementById('date-time').innerHTML=dt.toLocaleString();
                    </script>
                    <div class="tool-bar-actions">
                        <div class="toolbar-button toolbar-calendar"></div>
                        <div class="toolbar-button toolbar-notifications"></div>
                        <div class="toolbar-button toolbar-settings"></div>
                        <a href="logout.php"><div class="toolbar-button toolbar-logout"></div></a>
                    </div>
                </div>
            </div>
            <div class="dash-items">
                <div class="dash-row">
                    <div class="new-patient dash-item">
                        <div class="dash-align">
                            <h4>Add A New Patient -</h4>
                        </div>
                        <div class="profile-picture new-picture"></div>
                        <div class="form-area">
                            <form action="create_patient.php" method="POST" class="form">
                                <label for="name" class="left-spaced">Name:</label>
                                <input placeholder="First Name" type="text" name="new-name" class="form-input">
                                <label for="surname" class="left-spaced">Surname:</label>
                                <input placeholder="Last Name" type="text" name="new-surname" class="form-input">
                                <label for="age" class="left-spaced">Age:</label>
                                <input placeholder="Age" type="number" name="new-age" class="form-input">
                                <!-- <label for="birthdate"><span><input type="date" data-date-inline-picker="true" id="birthdate" name="birthdate" class="date-input"></span> - Date of Birth</label> -->
                                <div>
                                    <label class="left-spaced" for="gender">Gender:</label>
                                    <br/>
                                    <input class="left-spaced2" type="radio" name="new-gender" value="male"> <label for="gender">Male</label><br/>
                                    <input class="left-spaced2" type="radio" name="new-gender" value="female"><label for="gender"> Female</label><br/>
                                    <input class="left-spaced2" type="radio" name="new-gender" value="other"><label for="gender"> Other</label><br/><br/>
                                </div>
                                <label for="phone_number" class="left-spaced">Phone Number:</label>
                                <input placeholder="Phone Number" type="number" name="new-phone_number" class="form-input">
                                <label for="email" class="left-spaced">Email:</label>
                                <input placeholder="Email" type="text" name="new-email" class="form-input">
                                <label for="passwrd" class="left-spaced">Password:</label>
                                <input placeholder="Password" type="password" name="new-password" class="form-input">
                                <label for="patient_id" class="left-spaced">Patient ID Number:</label>
                                <input placeholder="ID Number" type="text" name="new-patient_id" class="form-input">
                                <label for="medical_aid_number" class="left-spaced">Medical Aid Number:</label>
                                <input placeholder="Medical Aid Number" type="number" name="new-medical_aid_number" class="form-input">
                                <label for="picture" class="left-spaced">Picture:</label>
                                <input placeholder="Link Address eg.(https://images/dog-in-garden.png)" type="text" name="new-link" class="form-input">
                                <button type="submit" class="add-button">Add</button>
				            </form>
                        </div>
                    </div>
                    <!--Add New Patient-->

                    <div class="dash-item patient-list">
                        <h1>Patients</h1>
                        <div class="patient-list-area">
                            <div class="list-titles">
                                <h3 class="list-spacer1">ID</h3>
                                <h3 class="list-spacer">Last Name</h3>
                                <h3 class="list-spacer">First Name</h3>
                                <h3 >Gender</h3>
                            </div>
                            <div class="list-scroll">
                            <?php
                                include 'get_patients.php' 
                            ?>
                            <?php
                                include 'get_patients.php' 
                            ?>
                            <?php
                                include 'get_patients.php' 
                            ?>
                            <?php
                                include 'get_patients.php' 
                            ?>
                            <?php
                                include 'get_patients.php' 
                            ?>
                            </div>
                            <script>
                                function OnePatient(element) {
                                    const url = "patients.php?id="+element.id;
                                    window.location.href = url;
                                }
                                
                            </script>
                        </div>
                    </div>
                    <!-- Current Patient info -->

                    <div id="patient-info" class="dash-item patient-info">
                        <div  id="patient-info-content" class="patient-info-content">
                            <?php
                                include 'GETOnePatient.php';
                            ?>
                            <br/>
                            <script>
                                function confirmDelete(delUrl) {
                                    if (confirm("Are you sure you want to delete")) {
                                        document.location = delUrl;
                                    }
                                }
                            </script>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
}else {
    header("Location: login.php?rerouted");
    exit();
}
?>