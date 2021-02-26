<?php

require 'vendor/autoload.php';

$response = file_get_contents('php://input');

$client = new \PK\Telegram($response);
