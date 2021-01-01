<?php
require("../../../database/connections/comeg.php");
$sth = $pdo->prepare("SELECT * FROM `comeg`");
$sth->execute();
$submits = $sth->fetchAll();

require("../../../database/connections/profiles.php");

if ($_SESSION['mail'] == "0" and $_SESSION['root'] != "1") {
    die(http_response_code(403));
}

// 69676e6f7265 = ignore
if (isset($_GET["69676e6f7265"])) {
    $ignore = true;
} else {
    $ignore = false;
}

if (isset($_POST['mail']) and !empty($_POST) and isset($_POST['mail-password']) and !empty($_POST['mail-password'])) {
    if (!isset($_POST['mail-user']) and isset($_SESSION['user'])) {
        $sth = $pdo->prepare("SELECT * FROM `profiles` WHERE `user` = :user");
        $sth->bindParam(':user', $_SESSION['user'], PDO::PARAM_STR);
        $sth->execute();
        $user = $sth->fetch();
    } else if (isset($_POST['mail-user'])) {
        $sth = $pdo->prepare("SELECT * FROM `profiles` WHERE `user` = :user");
        $sth->bindParam(':user', $_POST['mail-user'], PDO::PARAM_STR);
        $sth->execute();
        $user = $sth->fetch();
    } else {
        //error
    }

    if (isset($user) and !$user) {
        //error
    }

    if (password_verify($_POST['mail-password'], $user['pass'])) {
        $_SESSION['mail-fully'] = "okay";
        header("Location: ../admin/?mail");
    }
}


if (isset($_SESSION['mail-fully']) and $_SESSION['mail-fully'] == "okay") {
    require("./mail/main/main.php");
} else {
    require("./mail/login/login.php");
}
