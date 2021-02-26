<?php

namespace PK\components;

/**
 * Class Message
 * @package PK\components
 * @property User user
 * @property Chat chat
 * @property Message reply_to_message
 * @property Message pinned_message
 * @property Animation animation
 * @property Audio audio
 * @property Document document
 * @property Sticker sticker
 * @property Video video
 * @property VideoNote video_note
 * @property Voice voice
 * @property Contact contact
 * @property Dice dice
 * @property Poll poll
 * @property Venue venue
 * @property Location location
 */

class Message
{
    public object $user,
        $via_bot,
        $forward_from,
        $left_chat_member;
    public object $chat,
        $forward_from_chat;
    public int $date,
        $forward_date,
        $forward_from_message_id,
        $message_id,
        $edit_date,
        $migrate_to_chat_id,
        $migrate_from_chat_id;
    public string $forward_signature,
        $forward_sender_name,
        $media_group_id,
        $author_signature,
        $text,
        $caption,
        $new_chat_title,
        $connected_website;
    public object $reply_to_message,
        $pinned_message;
    /**
     * @var MessageEntity[]
     */
    public array $caption_entities,
        $entities;
    public object $animation;
    public object $audio;
    public object $document;
    /**
     * @var PhotoSize[]
     */
    public array $photo, $new_chat_photo;
    public object $sticker;
    public object $video;
    public object $video_note;
    public object $voice;
    public object $contact;
    public object $dice;
    public object $poll;
    public object $venue;
    public object $location;
    /**
     * @var User[]
     */
    public array $new_chat_members;
    public bool $delete_chat_photo,
        $group_chat_created,
        $supergroup_chat_created,
        $channel_chat_created;
}