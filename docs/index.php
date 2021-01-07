<?php
require("../../../lib/OS/array.php");
require("../../../lib/IP/ip.php");
$pathtosettings = "../../..";
$part = "yio/main";
$uselayout = 1;
require("../../../settings/translate/manage.php");

$OS_round_old = $OS_round;
?>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs</title>
    <link rel="stylesheet" href="http://localhost/lib/aos-master/aos.css">
    <link rel="stylesheet" href="http://localhost/lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/docs.min.css" />
</head>

<body>
    <?php
    require("../../../lib/preload/preload.php");
    ?>
    <aside class="sidebar">
        <div class="side-inner">
            <a class="close menu-toggle" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
            <div class="details">
                <div class="image"></div>
                <h3 class="app-name"><?php echo $sidenav->details->appname ?></h3>
                <span class="credits"><?php echo $sidenav->details->credits ?></span>
                <br>
                <a href="http://localhost/.apps/yio/download/" class="btn btn-primary"><?php echo $sidenav->details->btn ?></a>
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="http://localhost/.apps/yio/"><?php echo $sidenav->menu->one ?></a></li>
                    <li><a href="http://localhost/.apps/yio/more/"><?php echo $sidenav->menu->two ?></a></li>
                    <li class="active"><a href="http://localhost/.apps/yio/docs/"><?php echo $sidenav->menu->three ?></a></li>
                    <li><a href="http://localhost/.apps/yio/more/#faq"><?php echo $sidenav->menu->four ?></a></li>
                    <li><a href="http://localhost/contact"><?php echo $sidenav->menu->five ?></a></li>

                    <li class="pt-5"><a href="http://localhost/hub/"><?php echo $sidenav->menu->six ?></a></li>
                    <li><a href="http://localhost/.apps/yio/admin/"><?php echo $sidenav->menu->seven ?></a></li>

                </ul>
                <ul class="language">
                    <li>
                        <div class="accordion" id="AccordionLanguage">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLanguage" aria-expanded="false" aria-controls="collapseLanguage">
                                        <?php echo $sidenav->menu->language->title ?>
                                    </button>
                                </h2>
                                <div id="collapseLanguage" class="accordion-collapse collapse" data-bs-parent="#AccordionLanguage">
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="lang" language="en">
                                                <a href="javascript:void(0)">
                                                    <i class="sl-flag flag-en"></i>
                                                    <?php echo $sidenav->menu->language->en ?>
                                                </a>
                                            </li>
                                            <li class="lang" language="de">
                                                <a href="javascript:void(0)">
                                                    <i class="sl-flag flag-de"></i>
                                                    <?php echo $sidenav->menu->language->de ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <header>
        <nav class="navbar-expand navbar">
            <div class="collapse navbar-collapse">
                <div class="container nav-wrapper">
                    <a class="menu-toggle" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                    <!-- <a href="javascript:void(0)" class="logo">M2Z</a> -->
                    <a href="http://localhost/.apps/yio/download/" class="btn btn-primary get"><?php echo $nav->btn ?></a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="description col-xl-7  col-12">
                    <h2 class="title" data-aos="fade-up" data-aos-delay="350"><?php echo $header->title ?></h2>
                    <div class="button-group" data-aos="fade-up" data-aos-delay="650">
                        <a href="./download/" class="btn btn-primary get"><?php echo $header->btn->download ?></a>
                        <a href="./more/" class="btn btn-dark learn"><?php echo $header->btn->learn ?> &#10230;</a>
                    </div>
                </div>
                <div class="col-xl-5 col-12 image-show">
                    <div class="image-wrapper" data-aos="fade-up-left" data-aos-delay="350">
                        <img src="./image/header/header-image.png" alt="...">
                    </div>
                    <div class="mobile-image-wrapper" data-aos="fade-up" data-aos-delay="350">
                        <i class="fas fa-archway"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider">
            <svg width="100%" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none">
                <path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z"></path>
            </svg>
        </div>
    </header>
    <section class="install" id="howtoinstall">
        <div class="container">
            <h1>how to install yio</h1>
            <div class="windows">
                <h2 data-toggle="collapse" href="#windowscontent" aria-expanded="false">on windows</h2>
                <div class="collapse" id="windowscontent">
                    <h3>1. Click the Windows download button in the <a href="http://localhost/.apps/yio/#download">download section</a> of the YIO main page.</h3>
                    <img src="./win/first.jpg" alt="Download Section Windows" class="img-fluid">
                </div>
            </div>
            <div class="android">
                <h2 data-toggle="collapse" href="#androidcontent" aria-expanded="false">on android</h2>
                <div class="collapse" id="androidcontent">
                    <img src="./android.jpg" alt="Download Section Android" class="img-fluid">
                </div>
            </div>
            <div class="ios">
                <h2 data-toggle="collapse" href="#ioscontent" aria-expanded="false">on ios</h2>
                <div class="collapse" id="ioscontent">
                    <img src="./ios.jpg" alt="Download Section IOS" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="keybinds" id="keybinds">
        <div class="container">
            <div class="key">
                <button class="btn shadow">
                    <span> KEY </span>
                </button>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent
                    elementum facilisis leo vel fringilla est ullamcorper eget.
                </p>
            </div>

            <div class="key">
                <button class="btn">
                    <span> CTRL </span>
                </button>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent
                    elementum facilisis leo vel fringilla est ullamcorper eget.
                </p>
            </div>
            <div class="key">
                <button class="btn key-lg">
                    <span> CTRL </span>
                </button>
                <span class="key-plus"><i class="fas fa-plus"></i></span>
                <button class="btn">
                    <span> F </span>
                </button>
                <p>
                    This key combination opens the in-game shop
                </p>
            </div>
        </div>
    </section>

    <script src="http://localhost/lib/aos-master/aos.js"></script>
    <script src="http://localhost/lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="http://localhost/lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/lib/fontawesome-free-5.14.0-web/js/all.min.js"></script>
    <script src="./docs.js"></script>
</body>

</html>