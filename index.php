<?php
require("../../lib/OS/array.php");
require("../../lib/IP/ip.php");
require("./settings/translate/main.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $htmllang ?>">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="http://localhost/lib/aos-master/aos.css">
   <link rel="stylesheet" href="http://localhost/lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.css">
   <link rel=" stylesheet" href="./css/index.min.css">
</head>

<body>
   <?php
   require("../../lib/preload/preload.php");
   require("./layout/navbar/navbar.php");
   ?>
   <header>
      <div class="container">
         <div class="row">
            <div class="description col-xl-7  col-12">
               <h2 class="title" data-aos="fade-up" data-aos-delay="350"><?php echo $header->title ?></h2>
               <div class="button-group" data-aos="fade-up" data-aos-delay="650">
                  <a href="./download/" class="btn btn-secondary get"><?php echo $header->btn->download ?></a>
                  <a href="./more/" class="btn btn-white learn"><?php echo $header->btn->learn ?> &#10230;</a>
               </div>
            </div>
            <div class="col-xl-5 col-12">
               <div class="image-wrapper" data-aos="fade-up-left" data-aos-delay="350">
                  <img src="./image/header/header-image.png" alt="..." class="grey">
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
   <section class="about" id="about">
      <div class="container" data-aos="fade-up">
         <h3><?php echo $about->title ?></h3>
         <p class="mb-5"><?php echo $about->subtitle ?></p>
         <div class="row">
            <div class="col-sm">
               <div class="about-icon align-middle">
                  <i class="fas fa-layer-group"></i>
               </div>
               <h4><?php echo $about->one->title ?></h4>
               <p><?php echo $about->one->text ?></p>
            </div>
            <div class="col-sm">
               <div class="about-icon align-middle">
                  <i class="fas fa-brain"></i>
               </div>
               <h4><?php echo $about->two->title ?></h4>
               <p><?php echo $about->two->text ?></p>
            </div>
            <div class="col-sm">
               <div class="about-icon align-middle">
                  <i class="fas fa-images"></i>
               </div>
               <h4><?php echo $about->three->title ?></h4>
               <p><?php echo $about->three->text ?></p>
            </div>
         </div>
      </div>
   </section>
   <section class="comment">
      <div class="container">
         <div id="reviews" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <h2>“<?php echo $review->item->one->text ?>”</h2>
                  <img src="./image/comments/placeholder/dog.jpg" alt="...">
                  <p><?php echo $review->item->one->author ?></p>
               </div>
               <div class="carousel-item">
                  <h2>“<?php echo $review->item->two->text ?>”</h2>
                  <img src="./image/comments/placeholder/snow.jpg" alt="...">
                  <p><?php echo $review->item->two->author ?></p>
               </div>
               <div class="carousel-item">
                  <h2>“<?php echo $review->item->three->text ?>”</h2>
                  <img src="./image/comments/placeholder/snow_bike.jpg" alt="...">
                  <p><?php echo $review->item->three->author ?></p>
               </div>
            </div>
            <a class="carousel-control-prev carousel-control" href="#reviews" role="button" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next carousel-control" href="#reviews" role="button" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </a>
         </div>
      </div>
   </section>
   <section class="demo">
      <h2 data-aos="fade-up"><?php echo $demo->title[0] ?> <a href="./demo/"><?php echo $demo->title[1] ?></a> <?php echo $demo->title[2] ?></h2>
      <div data-aos="fade-up" data-aos-delay="450">
         <a href="./demo/" class="btn btn-secondary"><?php echo $demo->btn ?></a>
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
                        <li class="mt-0"><a href="http://localhost/privacy"><?php echo $footer->section->two->item->one ?></a></li>
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
               <div class="row my-4 row-1 no-gutter justify-content-between">
                  <div class="col-3 col-auto text-center"><small>&#169; M2Z</small></div>
                  <div class="col-sm-3 col-9 text-right social">
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
   <script src="http://localhost/lib/aos-master/aos.js"></script>
   <script src="http://localhost/lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
   <script src="http://localhost/lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="http://localhost/lib/fontawesome-free-5.14.0-web/js/all.min.js"></script>
   <script src="./js/app.js"></script>
</body>

</html>

<!--~~~~~~~~~~~~~~~~~~
       ~(˘▾˘~)

            Coded by m2v
            Discord: m2v#7180

            Zero can't code C# (me neither)

    ~~~~~~~~~~~~~~~~~~-->