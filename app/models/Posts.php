<?php


namespace app\models;


use ml\core\base\ActiveRecordEntity;


class Posts extends ActiveRecordEntity
{
    protected $title;
    protected $status = 2;
    protected $content;
    protected $dateCreated;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setTitle($text)
    {
        return $this->title = $text;
    }

    public function setContent($text)
    {
        return $this->content = $text;
    }

    public function setDateCreadted($date)
    {
        return $this->dateCreated = $date;
    }

}