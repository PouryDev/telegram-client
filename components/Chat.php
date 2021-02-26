<?php
namespace PK\components;

/**
 * Class Chat
 * @package PK\components
 * @property ChatPhoto chat_photo
 * @property Message pinned_message
 * @property ChatPermissions permissions
 * @property ChatLocation location
 */
class Chat {
    /**
     * @var mixed
     */
    public $id;
    public string $title,
        $username,
        $first_name,
        $last_name,
        $bio,
        $description,
        $invite_link,
        $sticker_set_name,
        $type;
    public object $chat_photo;
    public object $pinned_message;
    public object $permissions;
    public int $linked_chat_id,
        $slow_mode_delay;
    public bool $can_set_sticker_set;
    public object $location;
}