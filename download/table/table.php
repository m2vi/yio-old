<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../../../../lib/bootstrap-5.0.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../../../lib/aos-master/aos.css">
   <link rel="stylesheet" href="../css/table.min.css">
</head>

<body>
   <div class="container mx-auto">
      <table class="table mx-auto">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Platform</th>
               <th scope="col">Ordner</th>
               <th scope="col">Version</th>
               <th scope="col">Zuletzt geändert</th>
               <th scope="col">Veröffentlichung</th>
               <th scope="col">Link</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $dir    = '../../../files/';
            $files = scandir($dir);
            if (($key = array_search("compiled", $files)) !== false) {
               unset($files[$key]);
            }
            array_shift($files);
            array_shift($files);

            $filescount = count($files);
            for ($i = 0; $i <= $filescount - 1; $i++) :

               $folder = $files[$i];
               $folderZip = $folder . ".zip";
               if (!is_dir($dir . $folder)) {
                  continue;
               }
               $newdirscan = scandir($dir . $folder);
               array_shift($newdirscan);
               array_shift($newdirscan);
               $ini = parse_ini_file($dir . $folder . "/info.ini");
               if (file_exists($dir . $folder . "/info.ini") and isset($ini['release'])) {
                  $dir_release = $ini['release'];
               } else {
                  $dir_release = "-";
               }
            ?>
               <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $folder ?></td>
                  <td><?php echo $ini['version'] ?></td>
                  <td><?php echo date("j.n.Y", filemtime($dir . $folder)) ?></td>
                  <td><?php echo $dir_release ?></td>
                  <td><a href="<?php echo $dir . $folderZip ?>" download><?php echo $folderZip ?></a></td>
               </tr>
            <?php endfor; ?>
         </tbody>
      </table>
   </div>
</body>

</html>