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
    <title>Doctors</title>
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
                <div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> DOCTOR</h3><p class="left-arrow">&#9664;</p>
                </div>
                <a href="/patients.php"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> PATIENT</h3>
                </div></a>
                <a href="appointments.php"><div class="nav-bar-link">
                    <h3><img class="icon" src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png"/> APPOINT.</h3>
                </div></a>
            </div>
        </div>
        <!-- Nav Bar -->

        <div class="content">
            <div class="heading-section">
                <div class="title-section">
                    <h1>Doctor Information</h1>
                    
                    <select class="doc-select">
                        <option value="none" selected disabled hidden>Select a Doctor</option>
                        <a href="index.php?id=1"><option>Robert</option></a>
                        <a href="index.php?id=2"><option>Michael</option></a>
                        <a href="index.php?id=3"><option>Andrew</option></a>
                        <a href="index.php?id=4"><option>Tyler</option></a>
                        <a href="index.php?id=5"><option>Zack</option></a>
                    </select>
                    <a href="index.php?id=2"><button class="doc-select go-btn" type="submit">Go</button></a>
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
                    <div class="profile-banner dash-item">
                        <?php
                            include 'doctor_info.php';
                        ?>
                    </div>
                    <!--Profile Banner Item-->
                    <div class="profile-calendar dash-item">
                        <div class="calendar">
                        <iframe src="https://calendar.google.com/calendar/embed?height=280&wkst=2&bgcolor=%23ffffff&ctz=Africa%2FJohannesburg&showTitle=0&showNav=0&showPrint=0&showTabs=0&showCalendars=0&showTz=1&mode=MONTH&src=aXRzeW9uZWhkdWhAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uc2EjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border-width:0" width="280" height="280" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <!-- Profile Calendar Item -->
                    <div class="profile-events dash-item">
                        <div class="events-title">
                            <h2>Upcoming Appointments</h2>
                            <div class="event-button button">Update Events</div>
                        </div>
                        <div class="doctor-appoints">
                            <?php
                                include 'get_doctorAppointments.php';
                            ?>
                        </div>
                    </div>
                    <!-- Events -->
                </div>
                <div class="dash-row">
                    <div class="dash-item profile-actions">
                        <div class="dash-align">
                            <h2>Account Information and Actions</h2>
                            <p class="label">Last edited <span>6/13/2023, 6:37:28 PM</span></p>
                            <?php
                            include 'doctor_info_long.php';
                            ?>
                        </div>
                        <div class="profile-actions-content"></div>
                        <div class="profile-actions-buttons">
                            <div class="action-button">
                                <div class="action-button-icon profile-actions-appointment"></div>
                                    <div class="action-button-description">
                                        <h4>Appointment</h4>
                                        <h6 class="label">Schedule new meeting</h6>
                                    </div>
                            </div>
                            <div class="action-button">
                                <div class="action-button-icon profile-actions-update"></div>
                                    <div class="action-button-description">
                                        <h4>Update Info</h4>
                                        <h6 class="label">Alter Doctor Data</h6>
                                    </div>
                            </div>
                            <div class="action-button">
                                <div class="action-button-icon profile-actions-delete"></div>
                                    <div class="action-button-description">
                                        <h4>Delete User</h4>
                                        <h6 class="label">Remove Doctor</h6>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Actions -->
                    <div class="dash-item connected-data">
                        <div class="dash-align">
                            <h2>Connected Data</h2>
                            <p class="label">Information related to or connected with current Doctor</p>
                        </div>
                        <div class="connected-info">
                            <div class="filler-item">
                                <h3>Related data - Room:</h3>
                                <h5>ID's</h5>
                                <p>1 - Room info, Office, Capcaity - 5</p>
                            </div>
                            <div class="filler-item">
                                <h3>Related data - Patients:</h3>
                                <h5>ID's</h5>
                                <p>2, 15, 20 - Patient info, General, Surgery</p>
                            </div>
                            <div class="filler-item">
                                <h3>Related data - Operation:</h3>
                                <h5></h5>
                                <p></p>
                            </div>
                            <div class="filler-item">
                                <h3>Related data - Appointments:</h3>
                                <h5>ID's</h5>
                                <p>1, 2, 5 - Surgery, Examination, Counsel</p>
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