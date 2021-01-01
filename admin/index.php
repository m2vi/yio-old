<?php

// m2v@root
// J$`>Q36AT5hd
require("../../../database/connections/comeg.php");
$sth = $pdo->prepare("SELECT * FROM `comeg`");
$sth->execute();
$submits = $sth->fetchAll();

require("../../../database/connections/profiles.php");
session_name('yio_admin');
session_start();
if (isset($_POST['user']) and empty($_POST['user']) or isset($_POST['input']) and empty($_POST['input'])) {
   header('Location: ../admin/?code=411');
}
if (!empty($_POST) and isset($_POST['user']) and !empty($_POST['user']) and isset($_POST['input']) and !empty($_POST['input']) and !isset($_POST['mail'])) {

   $user = strtolower($_POST['user']);
   $pass = $_POST['input'];

   $sth = $pdo->prepare("SELECT * FROM `profiles` WHERE `user` = :user");
   $sth->bindParam(':user', $user, PDO::PARAM_STR);
   $sth->execute();

   $profile = $sth->fetch();

   if (!$profile) {
      header('Location: ../admin/?code=403');
   }
   if (password_verify($pass, $profile['pass'])) {
      $_SESSION["access"] = "okay";
      $_SESSION["user"] = $user;
      $_SESSION['last'] = $profile['last'];
      $_SESSION['firstname'] = $profile['firstname'];
      $_SESSION['mail'] = $profile['mail'];
      $_SESSION['root'] = $profile['root'];
      if ($_SESSION['root'] == "1" or $_SESSION['mail'] == "1") {
         $_SESSION['mail_access'] = "okay";
      } else {
         $_SESSION['mail_access'] = "0";
      }
      $date = date("j.n.Y g:i:s");
      $stmt = $pdo->prepare("UPDATE `profiles` SET `last` = :lastlogin WHERE `user` = :user");
      $stmt->bindParam(':lastlogin', $date, PDO::PARAM_STR);
      $stmt->bindParam(':user', $user, PDO::PARAM_STR);
      $stmt->execute();

      if (password_needs_rehash($profile['pass'], PASSWORD_DEFAULT)) {
         $newHash = password_hash($password, PASSWORD_DEFAULT);
         $stmt = $pdo->prepare("UPDATE `profiles` SET `pass` = :pass WHERE `user` = :user");
         $stmt->bindParam('user', $user, PDO::PARAM_STR);
         $stmt->bindParam('pass', $newHash, PDO::PARAM_STR);
         $stmt->execute();
      }
      header('Location: ../admin/');
   } else {
      header('Location: ../admin/?code=403');
   }
}

if (isset($_SESSION["access"]) and isset($_SESSION['user'])) {
   $sth = $pdo->prepare("SELECT * FROM `profiles` WHERE `user` = :user");
   $sth->bindParam(':user', $_SESSION["user"], PDO::PARAM_STR);
   $sth->execute();

   $profile = $sth->fetch();
}


if (isset($_GET['logout']) and session_status() != PHP_SESSION_NONE) {
   session_destroy();
   header('Location: ../admin/');
}

require("../../../lib/IP/ip.php");
require("../../../lib/OS/array.php");

if (isset($_GET['load']) == "all") {
   $stop = 250;
} else {
   $stop = null;
}

function maxInt($x)
{
   $ini = parse_ini_file("../settings/global.ini");
   if ($x == "log") {
      return (int)$ini['MaxLog'];
   } else if ($x == "submits") {
      return
         (int)$ini['MaxContact'];
   }
}
$log_directory = getcwd() . "/../log/";
$log_count = count(glob($log_directory . "*.log"));

$ipapi = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));

if ($ip != $localhost and isset($ipapi)) {
   $country = $ipapi->country;
   $region = $ipapi->region;
} else {
   $country = "-";
   $region = "-";
}
?>
<!DOCTYPE HTML>
<html lang="de-DE">
<?php

if (isset($_SESSION["access"]) and $_SESSION["access"] == "okay" and !isset($_GET['mail'])) {
   require("./layout/admin.php");
} else if (isset($_GET['mail'])) {
   require("./mail/index.php");
} else {
   require("./login/login.php");
}

?>

</html>