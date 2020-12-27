<?php
$global = parse_ini_file("./../settings/global.ini");

$email = $global['email'];
$phone = $global['phone'];
$adress = $global['adress'];
$version = $global['Version'];
$filename = $global['Filename'];
$path = $global['Path'];

$AcceptLang = explode(",", preg_replace('/ /', "", $global['AcceptedLanguages']));

$en = './../settings/translate/languages/data/en.ini';
$de = './../settings/translate/languages/data/de.ini';


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
        if (verifyLang("./../../settings/translate/languages/data/" . $lang . ".ini")) {
            $ini = parse_ini_file("./../../settings/translate/languages/data/" . $lang . ".ini");
        } else {
            $ini = parse_ini_file("./../../settings/translate/languages/data/en.ini");
        }
        $htmllang = $lang;
    } else {
        $ini = parse_ini_file("./../../settings/translate/languages/data/en.ini");
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

//? Navbar
class Navbar
{
    public $btn;
}

$nav = new Navbar();
$nav->btn = $ini['n-btn-download'];

//? Sidenav
class Sidenav
{
    public $details;
}

$sidenav = new Sidenav();

class SidenavDetails
{
    public $appName;
    public $credits;
    public $btn;
}

$sidenav->details = new SidenavDetails();

$sidenav->details->appname = $ini['sn-details-app-name'];
$sidenav->details->credits = $ini['sn-details-credits'];
$sidenav->details->btn = $ini['sn-details-btn'];

class SidenavMenu
{
    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;
    public $seven;

    public $language;
}

$sidenav->menu = new SidenavMenu;

$sidenav->menu->one = $ini['sn-menu-item-1'];
$sidenav->menu->two = $ini['sn-menu-item-2'];
$sidenav->menu->three = $ini['sn-menu-item-3'];
$sidenav->menu->four = $ini['sn-menu-item-4'];
$sidenav->menu->five = $ini['sn-menu-item-5'];
$sidenav->menu->six = $ini['sn-menu-item-6'];
$sidenav->menu->seven = $ini['sn-menu-item-7'];

class SideNavMenuLanguage
{
    public $title;

    public $en;
    public $de;
}

$sidenav->menu->language = new SideNavMenuLanguage();
$sidenav->menu->language->title = $ini['sn-menu-language-title'];
$sidenav->menu->language->en = $ini['sn-menu-language-en'];
$sidenav->menu->language->de = $ini['sn-menu-language-de'];

class Footer
{
    public $section;
}

$footer = new Footer();

class FooterSection
{
    public $one;
    public $two;
    public $three;
}

$footer->section = new FooterSection;

class FooterSectionOne
{
    public $item;
}

$footer->section->one = new FooterSectionOne();

class FooterSectionTwo
{
    public $item;
}

$footer->section->two = new FooterSectionTwo();

class FooterSectionThree
{
    public $item;
}

$footer->section->three = new FooterSectionThree();

class FooterSectionItem
{
    public $one;
    public $two;
    public $three;
}

$footer->section->one->item = new FooterSectionItem();
$footer->section->one->item->one = $ini['f-section-1-item-1'];
$footer->section->one->item->two = $ini['f-section-1-item-2'];
$footer->section->one->item->three = $ini['f-section-1-item-3'];

$footer->section->two->item = new FooterSectionItem();
$footer->section->two->item->one = $ini['f-section-2-item-1'];
$footer->section->two->item->two = $ini['f-section-2-item-2'];
$footer->section->two->item->three = $ini['f-section-2-item-3'];

$footer->section->three->item = new FooterSectionItem();
$footer->section->three->item->one = $ini['f-section-3-item-1'];
$footer->section->three->item->two = $ini['f-section-3-item-2'];
$footer->section->three->item->three = $ini['f-section-3-item-3'];
