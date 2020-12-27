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
            <a href="./download" class="btn btn-primary"><?php echo $sidenav->details->btn ?></a>
         </div>

         <div class="nav-menu">
            <ul>
               <li class="active"><a href="javascript:void(0)"><?php echo $sidenav->menu->one ?></a></li>
               <li><a href="./more/"><?php echo $sidenav->menu->two ?></a></li>
               <li><a href="./docs/"><?php echo $sidenav->menu->three ?></a></li>
               <li><a href="./more/#faq"><?php echo $sidenav->menu->four ?></a></li>
               <li><a href="http://localhost/contact"><?php echo $sidenav->menu->five ?></a></li>

               <li class="pt-5"><a href="http://localhost/hub/"><?php echo $sidenav->menu->six ?></a></li>
               <li><a href="./admin/"><?php echo $sidenav->menu->seven ?></a></li>

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
            <div class="container p-0 d-flex justify-content-between">
               <a class="menu-toggle" href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                  </svg>
               </a>
               <a href="./download/" class="btn btn-secondary get"><?php echo $nav->btn ?></a>
            </div>
         </div>
      </nav>
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