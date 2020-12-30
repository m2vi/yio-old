<?php
$global = parse_ini_file($pathtosettings . "/settings/global.ini");

$email = $global['email'];
$phone = $global['phone'];
$adress = $global['adress'];
$version = $global['Version'];
$filename = $global['Filename'];
$path = $global['Path'];

$AcceptLang = explode(",", preg_replace('/ /', "", $global['AcceptedLanguages']));

$en = $pathtosettings . '/settings/translate/languages/' . $part . '/en.ini';
$de = $pathtosettings . '/settings/translate/languages/' . $part . '/de.ini';


if (isset($_COOKIE['lang'])) {
    $lang = strtolower($_COOKIE['lang']);

    if ($lang == "de" and verifyLang($de)) {
        $ini = parse_ini_file($de);
        $htmllang = "de";
    } else {
        $ini = parse_ini_file($en);
        $htmllang = "en";
    }
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if (in_array($lang, $AcceptLang)) {
        clCookie($lang);
        if (verifyLang($pathtosettings . "/settings/translate/languages/" . $part . "/" . $lang . ".ini")) {
            $ini = parse_ini_file($pathtosettings . "/settings/translate/languages/" . $part . "/" . $lang . ".ini");
        } else {
            $ini = parse_ini_file($pathtosettings . "/settings/translate/languages/" . $part  . "/en.ini");
        }
        $htmllang = $lang;
    } else {
        $ini = parse_ini_file($pathtosettings . "/settings/translate/languages/" . $part . "/en.ini");
        $htmllang = $lang;
    }
}
function clCookie($x)
{
    setcookie("lang", $x, time() + (86400 * 365), "/");
}

function verifyLang($x)
{
    if (file_exists($x) and strlen(file_get_contents($x)) > "50") {
        return 1;
    } else {
        return 0;
    }
}

require($pathtosettings . "/settings/translate/class/" . $part . ".php");

if ($uselayout == 1) {
    $ini2 = parse_ini_file($pathtosettings . "/settings/translate/languages/layout/" . $lang . ".ini");
    require($pathtosettings . "/settings/translate/class/layout.php");
}
