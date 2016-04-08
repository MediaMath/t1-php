<?php

require_once(__DIR__ . '/../../../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;

$id = isset($_GET['id']) ? $_GET['id'] : null;

$transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

$api_client = new ApiClient($transport);

// special case - get user's default org
if (isset($_GET['special']) && $_GET['special'] == "default") {

    $session = $api_client->read(new Management\Session(), new JSONResponseDecoder());

    $settings = $api_client->read(new Management\UserSetting([
        'user_id' => $session->data()->id,
        'q' => 'ui.organizations.selected'
    ]));

    $settings_obj = json_decode($settings->data());

    $id = $settings_obj->settings[0]->prop[0]->value;

}

$organisations = $api_client->read(new Management\Organization([
    'id' => $id,
    'full' => isset($_GET['full']) ? $_GET['full'] : null,
    'sort_by' => isset($_GET['sort_by']) ? $_GET['sort_by'] : null,
    'limit' => isset($_GET['filter_by']) ? $_GET['filter_by'] : null,
    'q' => isset($_GET['q']) ? $_GET['q'] : null
]));

echo $organisations->data();
