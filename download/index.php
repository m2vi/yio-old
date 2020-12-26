<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Download YIO</title>
   <link rel="stylesheet" href="../../../lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../../lib/aos-master/aos.css">
   <link rel="stylesheet" href="./css/main.min.css">
</head>

<body>
   <?php
   require("../../../lib/OS/array.php");
   require("../../../lib/preload/preload.php");
   ?>
   <section class="download">
      <div class="container">
         <div class="pages">
            <div class="content col-xl-6 col-12 shadow-lg page-1">
               <a href="javascript:void(0)" class="info"><i class="fas fa-info-circle" title="Requirements"></i></a>
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
               <p class="return">Return to <a href="http://localhost/beta">m2z.com/yio/</a></p>
            </div>
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
         </div>
      </div>
   </section>
   <script src="https://kit.fontawesome.com/b6506770b8.js" crossorigin="anonymous"></script>
   <script src="../../../lib/aos-master/aos.js"></script>
   <script src="../../../lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
   <script src="../../../lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./js/main.js"></script>
</body>

</html>