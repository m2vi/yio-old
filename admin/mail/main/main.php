<?php

if (isset($_GET['action'])) {
    $action = explode(":", $_GET['action'])[0];
    $param = explode(":", $_GET['action'])[1];
    if ($action == "show") {
        require("../../../database/connections/comeg.php");
        $sth = $pdo->prepare("SELECT * FROM `comeg` where `id` = :id");
        $sth->bindParam(":id", $param, PDO::PARAM_STR);
        $sth->execute();
        $target_mail = $sth->fetch();
        $target_mail['name'] = $target_mail['firstname'] . " " . $target_mail['lastname'];
        $target = "mail";
    } else if ($action == "highlight") {
        $param2 = explode(":", $_GET['action'])[2];
        require("../../../database/connections/comeg.php");
        $sth = $pdo->prepare("UPDATE `comeg` SET `highlight` = :bool WHERE `id` = :id");
        $sth->bindParam(":bool", $param2, PDO::PARAM_STR);
        $sth->bindParam(":id", $param, PDO::PARAM_STR);
        $sth->execute();
        $target = "inbox";

        header("Location: ?mail");
    } else {
        $target = "inbox";
    }
} else {
    $target = "inbox";
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="http://localhost/lib/fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/lib/aos-master/aos.css">
    <link rel="stylesheet" href="./mail/css/main.css">
</head>

<body>
    <?php require("../../../lib/preload/preload.php") ?>
    <div class="wrapper">
        <aside>
            <div class="profile">
                <div class="image">
                    <img src="https://via.placeholder.com/65" alt="User image">
                </div>
                <div class="user-content">
                    <div class="user-name">
                        <a href="#"><?php echo $_SESSION['firstname'] ?></a>
                    </div>
                    <div class="user-details">
                        <span><?php echo $_SESSION['user'] ?></span>
                    </div>
                </div>
            </div>
            <div class="action">
                <a href="javascript:void(0)" class="btn btn-primary">LOG OUT</a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="?mail" class="active"><i class="far fa-envelope"></i>Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="far fa-paper-plane"></i>Sent Mail</a></li>
                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i>Marked</a></li>
                    <li><a href="javascript:void(0)"><i class="fas fa-bug"></i>Spam</a></li>
                    <li><a href="javascript:void(0)"><i class="far fa-trash-alt"></i>Trash</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href="javascript:void(0)"><i class="fas fa-cog"></i>Einstellungen</a></li>
                    <li><a href="javascript:void(0)"><i class="far fa-question-circle"></i>Brauchen sie Hilfe?</a></li>
                </ul>
            </div>
        </aside>
        <?php
        if ($target == "inbox") {
            require("./mail/main/showall/show_all.php");
        } else if ($target == "mail") {
            require("./mail/main/show/show.php");
        }
        ?>
    </div>
    <script src="http://localhost/lib/aos-master/aos.js"></script>
    <script src="http://localhost/lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="http://localhost/lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/lib/fontawesome-free-5.14.0-web/css/all.min.css"></script>
    <script src="./mail/js/main.js"></script>
</body>