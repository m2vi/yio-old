<?php
require("../settings/translate/main.php");
require("../../../lib/OS/array.php");
require("../../../lib/IP/ip.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Download</title>
   <link rel="stylesheet" href="../../../lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../../lib/aos-master/aos.css">
   <link rel="stylesheet" href="./css/main.min.css">
</head>

<body>
   <?php
   require("../../../lib/preload/preload.php");
   ?>
   <section class="download">
      <nav class="navbar">
         <div class="container p-0">
            <ul class="mx-auto">
               <li class="nav-item">
                  <a href="#" class="item">
                     <i class="fab fa-android"></i>
                     <small>Android</small>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="item">
                     <i class="fab fa-windows"></i>
                     <small>Windows</small>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="item">
                     <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm-6.485-8.51c0 2.079 1.602 3.591 3.6 3.591 1.989 0 3.636-1.539 3.636-3.618 0-2.061-1.611-3.609-3.609-3.609a3.607 3.607 0 0 0-3.627 3.636zm1.161-.027c0-1.431 1.071-2.583 2.457-2.583 1.377 0 2.457 1.152 2.457 2.583 0 1.431-1.08 2.592-2.457 2.592-1.386 0-2.457-1.161-2.457-2.592zm8.932 3.618c1.558 0 2.44-1.035 2.44-2.061 0-1.044-.666-1.791-1.926-2.043l-.892-.171c-.566-.117-.89-.54-.89-.936 0-.54.53-1.026 1.215-1.026.747 0 1.224.558 1.35 1.062l1.025-.324c-.143-.765-.8-1.728-2.393-1.728-1.27 0-2.332.954-2.332 2.115 0 .918.63 1.683 1.791 1.917l.864.18c.595.126 1.044.45 1.044 1.026 0 .594-.576.99-1.277.99-.847 0-1.405-.531-1.558-1.35L13 17.02c.098.999.962 2.061 2.61 2.061zM7.464 7.9V10h.826V7.914c0-.567.308-.945.826-.945.574 0 .798.392.798.924V10h.833V7.69c0-.847-.413-1.512-1.358-1.512-.574 0-.938.21-1.302.616-.21-.378-.581-.616-1.155-.616-.294 0-.756.112-1.113.588v-.504h-.812V10h.833V7.921c0-.567.308-.952.819-.952.574 0 .805.406.805.931zm7.308 2.1V7.62c0-.252-.035-.469-.126-.672-.245-.539-.77-.763-1.4-.763-.273 0-.539.049-.756.147-.518.224-.805.7-.84 1.015l.756.168c.063-.357.364-.616.819-.616.49 0 .735.273.735.567 0 .182-.098.315-.35.315h-.462c-.651 0-1.554.273-1.554 1.141v.042c0 .644.532 1.099 1.26 1.099.35 0 .826-.119 1.099-.574V10h.819zm-.819-1.512c0 .56-.364.91-.931.91-.35 0-.595-.203-.595-.511 0-.35.406-.518.721-.518h.805v.119zm3.591 1.575c1.015 0 1.596-.651 1.764-1.225l-.763-.245c-.112.287-.343.714-.987.714-.637 0-1.106-.497-1.106-1.197 0-.707.49-1.169 1.099-1.169.623 0 .896.406.98.7l.756-.252c-.161-.63-.805-1.204-1.729-1.204-1.113 0-1.96.875-1.96 1.939 0 1.099.847 1.939 1.946 1.939z" fill-rule="evenodd"></path>
                     </svg>
                     <small>macOS</small>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="item">
                     <i class="fab fa-apple"></i>
                     <small>iOS</small>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="item">
                     <i class="fab fa-linux"></i>
                     <small>Linux</small>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="wrapper">
         <div class="content">
            <?php
            if (in_array($OS_round, ['Windows', 'Linux', 'Ubuntu', 'iOS', 'Mac OS', 'Android'])) {
            ?>
               <h4>
                  Yeeet It Out für<br> <a href="javascript:void(0)"><?php echo $OS_round ?></a> herunterladen:
               </h4>
            <?php
            }
            ?>
            <div class="button-group">
               <?php
               $AppleBtn = '<a class="btn" href="https://www.apple.com/app-store/"><i class="fab fa-apple"></i><span>IOS/Mac</span></a>';
               $AndroidBtn = '<a class="btn" href="https://play.google.com/"><i class="fab fa-android"></i><span>Android</span></a>';
               $WinBtn = '<a class="btn" href="./files/yio_beta.exe"><i class="fab fa-windows"></i><span>Windows</span></a>';
               $LinuxBtn = '<a class="btn" href="./files/yio_beta.deb"><i class="fab fa-linux"></i><span>Linux</span></a>';
               $UbuntuBtn = '<a class="btn" href="./files/yio_beta.deb"><i class="fab fa-ubuntu"></i>Ubuntu</a>';

               if ($OS_round == 'Windows') {
                  echo $WinBtn . $AndroidBtn . $AppleBtn;
               } elseif ($OS_round == 'Linux') {
               ?>
                  <a class="btn" href="./files/yio_beta.deb" download><i class="fab fa-linux"></i><span>Linux</span></a>
               <?php
               } elseif ($OS_round == 'Ubuntu') {
                  echo $UbuntuBtn;
               } elseif ($OS_round == 'iOS' or $OS_round == 'Mac OS') {
                  echo $AppleBtn;
               } elseif ($OS_round == 'Android') {
               ?>
                  <a class="btn" href="https://play.google.com/"><i class="fab fa-android"></i><span>Android</span></a>
               <?php
               } else {
               ?>
                  <p class="text-muted">Your platform is not supported.</p>
               <?php
               }
               ?>

            </div>
            <a href="./table/" class="show_other">Download other versions</a>
         </div>
      </div>
   </section>
   <section class="info">
      <div class="content col-xl-6 col-12 shadow-lg page-2">
         <a href="javascript:void(0)" class="info"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16" title="Download">
               <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
            </svg>
         </a>
         <div class="req">
            <?php
            if ($OS_round == 'Windows' || $OS_round == 'Linux' || $OS_round == 'Ubuntu' || $OS_round == 'Mac OS') {
            ?>
               <p>Minimum System Requirements:</p>
               <ul>
                  <li>
                     OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1
                  </li>
                  <li>
                     Processor: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz
                  </li>
                  <li>
                     Memory: 4GB
                  </li>
                  <li>
                     Video Card: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)
                  </li>
                  <li>
                     Sound Card: 100% DirectX 10 compatible
                  </li>
                  <li>
                     HDD Space: 65GB
                  </li>
               </ul>
               <p>Recommended System Requirements:</p>
               <ul>
                  <li>
                     OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1
                  </li>
                  <li>
                     Processor: Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)
                  </li>
                  <li>
                     Memory: 8GB
                  </li>
                  <li>
                     Video Card: NVIDIA GTX 660 2GB / AMD HD7870 2GB
                  </li>
                  <li>
                     Sound Card: 100% DirectX 10 compatible
                  </li>
                  <li>
                     HDD Space: 65GB
                  </li>
               </ul>
            <?php
            } else if ($OS_round == 'iOS') {
            ?>
               <p>System Requirements:</p>
               <ul>
                  <li>iOS 8 or higher</li>
               </ul>
            <?php
            } else if ($OS_round == 'Android') {
            ?>
               <p>System Requirements:</p>
               <ul>
                  <li>Android version 8 or higher</li>
               </ul>
            <?php
            } else {
            ?>
               <p class="text-center text-muted">The are no requirements for your OS.</p>
            <?php
            }
            ?>
         </div>
      </div>
   </section>
   <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
      <footer>
         <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
            <div class="col-12">
               <div class="row row-2">
                  <div class="col-sm-3 text-md-center brand">
                     <a href="http://localhost/about"><span> <i class="fas fa-archway"></i></span> <b> M2Z</b></a>
                  </div>
                  <div class="col-sm-3 my-sm-0 mt-5">
                     <ul class="list-unstyled">
                        <li class="mt-0"><a href="#"><?php echo $footer->section->one->item->one ?></a></li>
                        <li><a href="#"><a href="#"><?php echo $footer->section->one->item->two ?></a></a></li>
                        <li><a href="#"><?php echo $footer->section->one->item->three ?></a></li>
                     </ul>
                  </div>
                  <div class="col-sm-3 my-sm-0 mt-5">
                     <ul class="list-unstyled">
                        <li class="mt-0"><a href="http://localhost/privacypolicy"><?php echo $footer->section->two->item->one ?></a></li>
                        <li><a href="http://localhost/imprint"><?php echo $footer->section->two->item->two ?></a></li>
                        <li><a href="#"><?php echo $footer->section->two->item->three ?></a></li>
                     </ul>
                  </div>
                  <div class="col-sm-3 my-sm-0 mt-5">
                     <ul class="list-unstyled">
                        <li class="mt-0"><?php echo $footer->section->three->item->one ?>: <?php echo $ip ?></li>
                        <li><?php echo $footer->section->three->item->two ?>: <?php echo $OS_round ?></li>
                        <li><?php echo $footer->section->three->item->three ?>: <?php echo $user_browser ?></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
            <div class="col-12">
               <div class="row my-4 row-1 no-gutters">
                  <div class="col-sm-3 col-auto text-center"><small>&#169; M2Z</small></div>
                  <div class="col-md-3 col-auto"></div>
                  <div class="col-md-3 col-auto"></div>
                  <div class="col my-auto text-right social">
                     <a href="#">
                        <i class="fab fa-github"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-patreon"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-youtube"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-twitter"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-instagram"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </div>
   <script src="http://localhost/lib/fontawesome-free-5.14.0-web/js/all.min.js"></script>
   <script src="../../../lib/aos-master/aos.js"></script>
   <script src="../../../lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
   <script src="../../../lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./js/main.js"></script>
</body>

</html>