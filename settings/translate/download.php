<?php
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
