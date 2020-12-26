<?php
$global = parse_ini_file("../settings/global.ini");

$email = $global['email'];
$phone = $global['phone'];
$adress = $global['adress'];
$version = $global['Version'];
$filename = $global['Filename'];
$path = $global['Path'];

$AcceptLang = explode(",", preg_replace('/ /', "", $global['AcceptedLanguages']));

$en = '../settings/translate/languages/en.ini';
$de = '../settings/translate/languages/de.ini';


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
        if (verifyLang("./lang/settings/settings." . $lang . ".ini")) {
            $ini = parse_ini_file("../settings/translate/languages/" . $lang . ".ini");
        } else {
            $ini = parse_ini_file("../settings/translate/languages/en.ini");
        }
        $htmllang = $lang;
    } else {
        $ini = parse_ini_file("../settings/translate/languages/en.ini");
        $htmllang = $lang;
    }
}
function clCookie($x)
{
    setcookie("lang", $x, time() + (86400 * 365), "/");
}

function verifyLang($x)
{
    if (file_exists($x) and strlen(file_get_contents($x)) > "650") {
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

//?Header
class Header
{
    public $title;
    public $btn;
}

$header = new Header();

class btn
{
    public $download;
    public $learn;
}

$header->btn = new btn();

$header->title = $ini['h-title'];
$header->btn->download = $ini['h-btn-download'];
$header->btn->learn = $ini['h-btn-learn'];

//? About
class About
{
    public $title;
    public $subtitle;
    public $item;
}

$about = new About();

$about->title = $ini['a-title'];
$about->subtitle = $ini['a-subtitle'];

class AboutItem
{
    public $one;
    public $two;
    public $three;
}

$about->item = new AboutItem();

class AboutItemOne
{
    public $title;
    public $text;
}
$about->one = new AboutItemOne();
$about->one->title = $ini['a-item-1-title'];
$about->one->text = $ini['a-item-1-text'];

class AboutItemTwo
{
    public $title;
    public $text;
}
$about->two = new AboutItemTwo();
$about->two->title = $ini['a-item-2-title'];
$about->two->text = $ini['a-item-2-text'];

class AboutItemThree
{
    public $title;
    public $text;
}
$about->three = new AboutItemThree();
$about->three->title = $ini['a-item-3-title'];
$about->three->text = $ini['a-item-3-text'];

class reviews
{
    public $item;
}
$review = new reviews();

class ReviewItem
{
    public $one;
    public $two;
    public $three;
}
$review->item = new ReviewItem();

class ReviewItemOne
{
    public $text;
    public $author;
}

$review->item->one = new ReviewItemOne();
$review->item->one->text = $ini['r-item-1-text'];
$review->item->one->author = $ini['r-item-1-author'];

class ReviewItemTwo
{
    public $text;
    public $author;
}

$review->item->two = new ReviewItemTwo();
$review->item->two->text = $ini['r-item-2-text'];
$review->item->two->author = $ini['r-item-2-author'];

class ReviewItemThree
{
    public $text;
    public $author;
}

$review->item->three = new ReviewItemThree();
$review->item->three->text = $ini['r-item-3-text'];
$review->item->three->author = $ini['r-item-3-author'];

class Demo
{
    public $title;
    public $btn;
}

$demo = new Demo();
$demo->title = [$ini['d-title-question-1'], $ini['d-title-question-2'], $ini['d-title-question-3']];
$demo->btn = $ini['d-btn'];

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
