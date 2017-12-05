<?php
namespace vavulis;

class Card
{

    private $common_link;
    private $img;
    private $title;
    private $text;

    public function __construct($common_link, $img, $title, $text)
    {
        $this->common_link = $common_link;
        $this->img = $img;
        $this->title = $title;
        $this->text = $text;
    }

    public function getCommon_link()
    {
        return $this->common_link;
    }

    public function toArray()
    {
        return [
            'common_link' => $this->common_link,
            'img' => $this->img,
            'title' => $this->title,
            'text' => $this->text
        ];
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setCommon_link($common_link)
    {
        $this->common_link = $common_link;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}
