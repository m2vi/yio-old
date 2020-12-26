<?php
$global = parse_ini_file("./../settings/global.ini");

$email = $global['email'];
$phone = $global['phone'];
$adress = $global['adress'];
$version = $global['Version'];
$filename = $global['Filename'];
$path = $global['Path'];

$AcceptLang = explode(",", preg_replace('/ /', "", $global['AcceptedLanguages']));

$en = './../settings/translate/languages/download/en.ini';
$de = './../settings/translate/languages/download/de.ini';


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
        if (verifyLang("./../../settings/translate/languages/download/" . $lang . ".ini")) {
            $ini = parse_ini_file("./../../settings/translate/languages/download/" . $lang . ".ini");
        } else {
            $ini = parse_ini_file("./../../settings/translate/languages/download/en.ini");
        }
        $htmllang = $lang;
    } else {
        $ini = parse_ini_file("./../../settings/translate/languages/download/en.ini");
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

class header
{
    public $title;
}

$header = new header();
$header->title = $ini['title'];

class content
{
    public $title;
    public $subtext;
    public $return;
    public $ns;
}

$content = new content();
$content->title = str_replace("#?#", '<a href="javascript:void(0)">' . $OS_round  . '</a>', $ini['content-title']);
$content->subtext = $ini['content-subtext'];
$content->return = str_replace("#?#", '<span>m2z.org/yio</span>', $ini['content-return']);
$content->ns = $ini['content-ns'];

class Requirements
{
    public $ns;
}

$req = new Requirements();
$req->title = $ini['req-title'];
$req->min = $ini['req-min'];
$req->recommended = $ini['req-recommended'];
$req->ns = $ini['req-ns'];


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
