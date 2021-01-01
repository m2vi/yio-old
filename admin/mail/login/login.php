<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="http://localhost/lib/fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/lib/aos-master/aos.css">
    <link rel="stylesheet" href="./mail/css/style.css">
</head>

<body>
    <?php require("../../../lib/preload/preload.php") ?>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post" action="">
                <img src="./mail/image/login/avatar.png" alt="User Avatar">
                <?php if (!$ignore) : ?>
                    <p>Hallo <?php echo $_SESSION['firstname'] ?>, willkommen im Mail Bereich!</p>
                <?php else : ?>
                    <input type="text" class="username" placeholder="username" name="mail-user" autocomplete="on" required />
                <?php endif ?>
                <input type="password" class="password" placeholder="password" name="mail-password" autocomplete="on" required />
                <input type="hidden" name="mail" />
                <button type="submit" class="submit">login</button>
                <p><a href="?mail&69676e6f7265">Mit einem anderen Konto anmelden</a></p>
            </form>
        </div>
    </div>
    <script src="http://localhost/lib/aos-master/aos.js"></script>
    <script src="http://localhost/lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="http://localhost/lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./mail/js/app.js"></script>
</body>