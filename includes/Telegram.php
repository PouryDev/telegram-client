<?php

namespace PK;

use JetBrains\PhpStorm\Pure;
use PK\components\Message;
use PK\components\User;

require 'config/telegram.php';

/**
 * Class Telegram
 * @package PK
 * @property Message message
 */
class Telegram
{
    private const TELEGRAM_URI = 'https://api.telegram.org/bot' . TOKEN . '/';

    public object $message;

    public function __construct(string $json)
    {
        $this->message = json_decode($json)->message;
    }

    public static function sendMessage($chatID, string $text, array $keyboard = null, int $replyID = null, string $parse = null)
    {
        $method = self::TELEGRAM_URI . 'sendMessage?chat_id=' . $chatID
            . '&text=' . urlencode($text)
            . '&reply_markup=' . (is_null($keyboard)? null: json_encode([
                'inline_keyboard' => $keyboard,
                'resize_keyboard' => true,
                'one_time_keyboard' => true
            ]))
            . '&reply_to_message_id=' . $replyID
            . '&parse_mode=' . $parse;
        return MainLibrary::sendRequest($method);
    }

    public static function answerCallback(int $callbackID, string $text, bool $showAlert = false)
    {
        $method = self::TELEGRAM_URI . 'answerCallbackQuery?callback_query_id=' . $callbackID
            . '&text=' . $text
            . '&show_alert=' . $showAlert;

        return MainLibrary::sendRequest($method);
    }

    public static function forwardMessage($targetChatID, $fromChatID, int $messageID)
    {
        $method = self::TELEGRAM_URI . 'forwardMessage?chat_id=' . $targetChatID
            . '&from_chat_id=' . $fromChatID
            . '&message_id=' . $messageID;

        return MainLibrary::sendRequest($method);
    }

    public static function getChatMember($chatID, int $userID)
    {
        $method = self::TELEGRAM_URI . 'getChatMember?chat_id=' . $chatID
            . '&user_id=' . $userID;

        return MainLibrary::sendRequest($method);
    }

    public function sendMessageToSender(string $text, array $keyboard = null, bool $withReply = false, string $parse = null)
    {
        return self::sendMessage($this->message->chat->id, $text, $keyboard, ($withReply ? $this->message->message_id : null), $parse);
    }

    public function send($chatID, string $text, array $keyboard = null, int $replyID = null, string $parse = null)
    {
        return self::sendMessage($chatID, $text, $keyboard, $replyID, $parse);
    }
}