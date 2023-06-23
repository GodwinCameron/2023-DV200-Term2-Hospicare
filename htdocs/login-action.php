<?php 
session_start();
include "db.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Error: Please enter a valid Username");
        exit();
    } elseif (empty($pass)) {
        header("Location: login.php?error=Error: Please enter a valid Password");
        exit();
    } else {
        $sql = "SELECT * FROM receptionist WHERE name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name'] === $uname && $row['password'] === $pass) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php?id=1");
                exit();             
            }else {
                header("Location: login.php?error=Error: Please enter valid credentials");
                exit();
            }
        } else {
            header("Location: login.php?error=Error: Please enter valid credentials");
            exit();
        }
    }

} else {
    header("Location: login.php");
    exit();
}

?>