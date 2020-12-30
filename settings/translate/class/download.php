<?php
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
