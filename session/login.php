<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "kusnadi" && $_POST['password'] == "kusnadi") {
        
        $_SESSION['login']    = true;
        $_SESSION['username'] = "kusnadi";
        header('Location: /session/member.php');
        exit();

    } else {
        $error = "Login Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php if ($error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <h1>Login</h1>
    <form action="/session/login.php" method="POST">
        <label>Username :
            <input type="text" name="username">
        </label>
        <label>Password :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>