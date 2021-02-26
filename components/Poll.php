<?php

namespace PK\components;


/**
 * Class Poll
 * @package PK\components
 * @property PollOption options
 */
class Poll
{
    public string $explanation,
        $type,
        $question,
        $id;
    public object $options;
    public int $open_period,
        $close_date,
        $correct_option_id,
        $total_voter_count;
    public bool $allows_multiple_answers,
        $is_anonymous,
        $is_closed;
    /**
     * @var MessageEntity[]
     */
    public array $explanation_entities;
}