<?php

namespace Slack\Model;


class Channel
{
    /**
     * @var string
     */
    private $channel;

    /**
     * Channel constructor
     *
     * @param $channel
     */
    public function __construct($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @param Message $message
     */
    public function send(Message $message)
    {
        $payload['username'] = $message->getUsername();

        $fields = [];
        foreach ($message->getFields() as $field) {
            $fields[] = [
                'title' => $field->getTitle(),
                'value' => $field->getValue(),
                'short' => $field->isShort()
            ];
        }

        $payload['attachments'][] = [
            'text' => $message->getText(),
            'fallback' => substr($message->getText(), 0, 10) . '...',
            'fields' => $fields,
            'color' => $message->getColor()
        ];

        $handle = curl_init($this->channel);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_exec($handle);
        curl_close($handle);
    }
}