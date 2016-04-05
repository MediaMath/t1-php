<?php

require_once(__DIR__ . '/../../../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;

$transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

$api_client = new ApiClient($transport);

$id = isset($_GET['id']) ? $_GET['id'] : null;
$special = $_GET['special'];

// special case - get user's default org
if ($special == "default") {

    $session = $api_client->read(new Management\Session(), new JSONResponseDecoder());

    $settings = $api_client->read(new Management\UserSetting([
        'user_id' => $session->data()->id,
        'q' => 'ui.*'
    ]));

    $settings_obj = json_decode($settings->data());

    foreach ($settings_obj->settings[0]->prop AS $property) {

        if ($property->name == "ui.organizations.selected") {
            $id = $property->value;
            break;
        }
    }

}

$organisations = $api_client->read(new Management\Organization([
    'id' => $id,
    'full' => '*'
]));

echo $organisations->data();
