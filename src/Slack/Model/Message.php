<?php

namespace Slack\Model;

class Message
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var MessageField[]
     */
    protected $fields;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $color;

    /**
     * @return MessageField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param MessageField[] $fields
     *
     * @return Message
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param MessageField $field
     */
    public function addField(MessageField $field)
    {
        $this->fields[] = $field;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return Message
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}