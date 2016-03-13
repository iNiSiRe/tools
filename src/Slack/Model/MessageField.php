<?php

namespace Slack\Model;

class MessageField
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var bool
     */
    protected $short = false;

    /**
     * MessageField constructor.
     *
     * @param string $title
     * @param string $value
     * @param bool   $short
     */
    public function __construct($title, $value, $short = false)
    {
        $this->title = $title;
        $this->value = $value;
        $this->short = $short;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return boolean
     */
    public function isShort()
    {
        return $this->short;
    }

    /**
     * @param boolean $short
     */
    public function setShort($short)
    {
        $this->short = $short;
    }
}