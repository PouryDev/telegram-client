<?php
namespace PK\components;

class ChatPermissions {
    public bool $can_send_messages,
        $can_send_media_messages,
        $can_send_polls,
        $can_send_other_messages,
        $can_add_web_page_previews,
        $can_change_info,
        $can_invite_users,
        $can_pin_messages;
}