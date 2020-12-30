<?php

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
