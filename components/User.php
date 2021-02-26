<?php
namespace PK\components;

class User {
    public int $id;
    public bool $supports_inline_queries,
        $canRead_all_group_messages,
        $can_join_groups,
        $is_bot;
    public string $first_name,
        $last_name,
        $language_code,
        $username;
}