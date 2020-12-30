<?php
//? Navbar
class Navbar
{
    public $btn;
}

$nav = new Navbar();
$nav->btn = $ini2['n-btn-download'];

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

$sidenav->details->appname = $ini2['sn-details-app-name'];
$sidenav->details->credits = $ini2['sn-details-credits'];
$sidenav->details->btn = $ini2['sn-details-btn'];

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

$sidenav->menu->one = $ini2['sn-menu-item-1'];
$sidenav->menu->two = $ini2['sn-menu-item-2'];
$sidenav->menu->three = $ini2['sn-menu-item-3'];
$sidenav->menu->four = $ini2['sn-menu-item-4'];
$sidenav->menu->five = $ini2['sn-menu-item-5'];
$sidenav->menu->six = $ini2['sn-menu-item-6'];
$sidenav->menu->seven = $ini2['sn-menu-item-7'];

class SideNavMenuLanguage
{
    public $title;

    public $en;
    public $de;
}

$sidenav->menu->language = new SideNavMenuLanguage();
$sidenav->menu->language->title = $ini2['sn-menu-language-title'];
$sidenav->menu->language->en = $ini2['sn-menu-language-en'];
$sidenav->menu->language->de = $ini2['sn-menu-language-de'];

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
$footer->section->one->item->one = $ini2['f-section-1-item-1'];
$footer->section->one->item->two = $ini2['f-section-1-item-2'];
$footer->section->one->item->three = $ini2['f-section-1-item-3'];

$footer->section->two->item = new FooterSectionItem();
$footer->section->two->item->one = $ini2['f-section-2-item-1'];
$footer->section->two->item->two = $ini2['f-section-2-item-2'];
$footer->section->two->item->three = $ini2['f-section-2-item-3'];

$footer->section->three->item = new FooterSectionItem();
$footer->section->three->item->one = $ini2['f-section-3-item-1'];
$footer->section->three->item->two = $ini2['f-section-3-item-2'];
$footer->section->three->item->three = $ini2['f-section-3-item-3'];
