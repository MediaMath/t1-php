<?php

require_once(__DIR__ . '/../../../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;

$transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

$api_client = new ApiClient($transport);

$agencies = $api_client->read(new Management\Agency([
    'id' => isset($_GET['id']) ? $_GET['id'] : null
]));

echo $agencies->data();