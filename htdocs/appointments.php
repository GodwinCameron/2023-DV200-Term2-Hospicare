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
    <title>Appointments</title>
    <link rel="stylesheet" href="./omg.css" />
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
                <a href="/patients.php"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> PATIENT</h3>
                </div></a>
                <a href="appointments.php"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> APPOINT.</h3><p class="left-arrow">&#9664;</p>
                </div></a>
            </div>
        </div>
        <!-- Nav Bar -->

        <div class="content">
            <div class="heading-section">
                <div class="title-section">
                    <h1>Appointments</h1>
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
                    <div class="dash-item appointment-block">
                        <h2>New Appointment:</h2>
                        <br/>
                        <?php 
                            include 'setup_appointment.php';
                        ?>
                    </div>
                    <div class="dash-item existing-appointment-block">
                        <h2>Current Appointments:</h2>
                        <div class="existing-appoinments-area">
                            <?php 
                                include 'get_appointments.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dash-items">
                <div class="dash-row">
                    <div class="dash-item doctor-appointments">
                        <h2>Doctors on call:</h2>
                        <div class="doctor-call-area">
                            <?php
                                include 'doctor_call.php';
                            ?>
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