<?php

require_once(__DIR__ . '/../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;

/**
 * Example of turning off all global deals by reference to their string identifiers
 */

$transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

$api_client = new ApiClient($transport, new JSONResponseDecoder());

$deal_identifiers = array(
    'PM-PLM1XXXX',
    'PM-QHO9XXXX',
    'PM-UFT1XXXX',
    'PM-XKK8XXXX',
    'PM-YYW6XXXX',
    'PM-ZDNX-XXXX',
    'Sbi-3144-XXXX',
);

foreach ($deal_identifiers as $deal_identifier) {

    $response = $api_client->read(new Management\Deal([
        'q' => 'deal_identifier=:' . $deal_identifier . '&advertiser_id:null',
        'full' => '*'
    ]));

    $deal = $response->data();

    if (count($deal) != 1) {
        echo "Could not find deal identifier: " . $deal_identifier . "\n";
        continue;
    }

    if ($deal[0]->status == false) {
        echo "Already off: " . $deal[0]->id . " (" . $deal_identifier . ")\n";
        continue;
    }

    echo "Updating " . $deal[0]->id . " (" . $deal_identifier . ") ...";

    $update = $api_client->update(new Management\Deal([
        'id' => $deal[0]->id,
        'version' => $deal[0]->version,
        'status' => 0
    ]));

    echo $update->meta()->status() . "\n";

}