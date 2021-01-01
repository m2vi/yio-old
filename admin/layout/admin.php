<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="http://localhost/lib/fontawesome-free-5.14.0-web/css/all.min.css">
   <link rel="stylesheet" href="http://localhost/lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.css">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="http://localhost/lib/aos-master/aos.css">
</head>

<body style="padding-right: 0;">
   <!-- <div class="preload">
      <div class="content">
         <h1>Welcome back</h1>
         <h2><?php echo $_SESSION['firstname'] ?></h2>
      </div>
   </div> -->
   <!-- Admin -->
   <section id="#admin">
      <div class="button-group row m-0">
         <a class="btn btn-1 col-lg-3 col-md-6 col-12" onclick="openModal(1)"><span data-aos="fade-up"><i class="fas fa-envelope"></i>Mails</span></a>
         <a class="btn btn-2 col-lg-3 col-md-6 col-12" onclick="openModal(2)"><span data-aos="fade-up"><i class="fas fa-list-alt"></i>Logs</a>
         <a class="btn btn-3 col-lg-3 col-md-6 col-12" onclick="openModal(3)"><span data-aos="fade-up"><i class="fas fa-chart-line"></i>Statistik</a>
         <a class="btn btn-4 col-lg-3 col-md-6 col-12" onclick="openModal(4)"><span data-aos="fade-up"><i class="fas fa-crosshairs"></i>Ziele</a>
      </div>
      <div class="button-group row m-0">
         <a class="btn btn-5 col-lg-3 col-md-6 col-12" onclick="openModal(5)"><span data-aos="fade-up"><i class="fab fa-github"></i>Git Repository</a>
         <a class="btn btn-6 col-lg-3 col-md-6 col-12" onclick="openModal(6)"><span data-aos="fade-up"><i class="fas fa-file-code"></i>Source Code</a>
         <a class="btn btn-7 col-lg-3 col-md-6 col-12" onclick="openModal(7)"><span data-aos="fade-up"><i class="fas fa-database"></i>Datenbank</a>
         <a class="btn btn-8 col-lg-3 col-md-6 col-12" onclick="openModal(8)"><span data-aos="fade-up"><i class="fas fa-user"></i>Profile</a>
      </div>
      <div class="button-lg">
         <button class="btn" onclick="window.location.href='?logout'">log out</button>
      </div>
      <footer>
         <div>
            <span>Eingeloggt als: </span><?php echo $_SESSION["user"] ?>
         </div>
         <div>
            <span>Client IP: </span><?php echo $ip ?>
         </div>
         <div>
            <span>Erstellungsdatum: </span><?php echo $profile['timestamp'] ?>
         </div>
         <div>
            <span>Letzter Login: </span><?php echo $_SESSION['last'] ?>
         </div>
      </footer>
   </section>

   <div class="modal mainmodal fade p-0" id="area" data-backdrop="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm">
         <div class="modal-content content-sm area-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="inner">
               <span id="icon"></span>
               <span id="text"></span>
            </div>
         </div>
      </div>
   </div>
   <!-- Mails -->
   <div class="modal submodal fade p-0" id="mails" data-backdrop="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm">
         <div class="modal-content content-sm btn-1">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="container">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aktion</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php $Email_Id = 1;
                     foreach ($submits as $submit) :
                        if ($Email_Id >= maxInt("submits") + 1) {
                           break;
                        }
                     ?>
                        <tr id="submit-tr-<?php echo $Email_Id ?>">
                           <th scope="row" title="<?php echo htmlentities($submit['id']) ?>"><?php echo $Email_Id ?></th>
                           <td><?php echo htmlentities($submit['timestamp']) ?></td>
                           <td><?php echo htmlentities($submit['firstname']) ?></td>
                           <td><?php echo htmlentities($submit['lastname']) ?></td>
                           <td><?php echo htmlentities($submit['email']) ?></td>
                           <td>
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#modal<?php echo htmlentities($submit['id']) ?>">Anzeigen</a>&nbsp;&nbsp;
                              <a href="#">
                              </a>
                           </td>
                        </tr>
                     <?php $Email_Id++;
                     endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Logs -->
   <div class="modal submodal fade p-0" id="logs" data-backdrop="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm">
         <div class="modal-content content-sm btn-2">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="container">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Datum</th>
                        <th scope="col">IP-Adresse</th>
                        <th scope="col">Plattform</th>
                        <th scope="col">Touchdevice</th>
                        <th scope="col">Sprache</th>
                        <th scope="col">Region</th>
                        <th scope="col">Land</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row"><?php echo $log_count + 1 ?></th>
                        <td><?php echo date("j.n.Y") ?></td>
                        <td><?php echo $ip ?></td>
                        <td><?php echo $OS  ?></td>
                        <td>
                           <script>
                              try {
                                 document.createEvent("TouchEvent");
                                 document.writeln(true);
                              } catch (e) {
                                 document.writeln(false);
                              }
                           </script>
                        </td>
                        <td><?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?></td>
                        <td><?php echo $country ?></td>
                        <td><?php echo $region ?></td>
                     </tr>
                     <?php

                     for ($x = $log_count - 1 and $i = 0; $x >= 0 and $i <= maxInt("log"); $x-- and $i++) {
                        $user = parse_ini_file($log_directory . "log-" . $x . ".log");
                     ?>
                        <tr id="log-tr-<?php echo $user['ID'] ?>">
                           <th scope='row'><?php echo $user['ID'] ?></th>
                           <td><?php echo $user['Date'] ?></td>
                           <td><?php echo $user['IP'] ?></td>
                           <td><?php echo $user['Platform'] ?></td>
                           <td><?php echo $user['Touchdevice'] ?></td>
                           <td><?php echo $user['Language'] ?></td>
                           <td><?php echo $user['Country'] ?></td>
                           <td><?php echo $user['Region'] ?></td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>


   <!-- Sourcecode -->
   <div class="modal submodal fade p-0" id="sourcecode" data-backdrop="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm">
         <div class="modal-content content-sm btn-6">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="container">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ordner</th>
                        <th scope="col">Zuletzt geändert</th>
                        <th scope="col">Veröffentlichung</th>
                        <th scope="col">Download</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $dir    = '../files/src/';
                     $files = scandir($dir);
                     array_shift($files);
                     array_shift($files);
                     if (($key = array_search("compiled", $files)) !== false) {
                        unset($files[$key]);
                     }
                     $filescount = count($files);
                     for ($i = 1; $i <= $filescount; $i++) {

                        $folder = $files[$i];
                        $folderZip = $folder . ".zip";
                        if (!is_dir($dir . $folder)) {
                           continue;
                        }
                        $newdirscan = scandir($dir . $folder);
                        array_shift($newdirscan);
                        array_shift($newdirscan);

                        if (file_exists($dir . $folder . "/release.ini")) {
                           $dir_release = parse_ini_file($dir . $folder . "/release.ini")['date'];
                        } else {
                           $dir_release = "-";
                        }
                     ?>
                        <tr>
                           <th scope="row"><?php echo $i ?></th>
                           <td><?php echo $folder ?></td>
                           <td><?php echo date("j.n.Y", filemtime($dir . $folder)) ?></td>
                           <td><?php echo $dir_release ?></td>
                           <td><a href="<?php echo $dir . $folderZip ?>" download><?php echo $folderZip ?></a></td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!--Profile Editor -->
   <div class="modal submodal fade p-0" id="profiles" data-backdrop="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm">
         <div class="modal-content content-sm btn-8">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="container">
               <div class="profiles">
                  <div class="accordion" id="profile">
                     <?php
                     $sth = $pdo->prepare("SELECT * FROM `profiles`");
                     $sth->execute();
                     $profiles = $sth->fetchAll();
                     foreach ($profiles as $profile) :
                     ?>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $profile['id'] ?>" aria-expanded="false" aria-controls="collapse<?php echo $profile['id'] ?>">
                                 <?php echo $profile['user'] ?>
                              </button>
                           </h2>
                           <div id="collapse<?php echo $profile['id'] ?>" class="accordion-collapse collapse" data-bs-parent="#profile">
                              <div class="accordion-body">
                                 <ul>
                                    <li>
                                       <strong>Nutzername: </strong><?php echo $profile['user'] ?>
                                    </li>
                                    <li>
                                       <strong>ID: </strong><?php echo $profile['id'] ?>
                                    </li>
                                    </li>
                                    <li>
                                       <strong>Erstellungsdatum: </strong><?php echo $profile['timestamp'] ?>
                                    </li>
                                    <li>
                                       <strong>Letzter login: </strong><?php echo $profile['last'] ?>
                                    </li>
                                    <li>
                                       <strong>Vorname: </strong><?php echo $profile['firstname'] ?>
                                    </li>
                                    <li>
                                       <strong>Root: </strong>
                                       <?php
                                       if ($profile['root'] == "0") {
                                          echo "false";
                                       } else if ($profile['root'] == "1") {
                                          echo "true";
                                       } else {
                                          echo "-";
                                       }
                                       ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     <?php
                     endforeach;
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      var logH = <?php echo $log_count ?>;
      var logM = <?php echo maxInt("log") ?>;
   </script>
   <script src="http://localhost/lib/aos-master/aos.js"></script>
   <script src="http://localhost/lib/jqeury-3.5.1/jquery-3.5.1.min.js"></script>
   <script src="http://localhost/lib/bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./js/app.js"></script>
</body>