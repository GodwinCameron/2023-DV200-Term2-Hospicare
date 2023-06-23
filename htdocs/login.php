<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./new.css" />
</head>
<body>
    <div class="main login">
        <div>
            <div class="login-block">
                <div class="logo"></div>
                <form action="login-action.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error-msg"><?php echo $_GET['error'];?></p>
                    <?php }?>
                    <label class="login-label">Username -</label><br/>
                    <input name="uname" class="form-input login-field" type="text" placeholder="Please enter your Username"/> <br/><br/>
                    <label class="login-label">Password -</label><br/>
                    <input name="password" class="form-input login-field" type="password" placeholder="Please enter your Password" /> <br/><br/>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>