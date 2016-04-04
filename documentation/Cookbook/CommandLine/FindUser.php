<?php

require_once(__DIR__ . '/../../../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;

$names = [
    'Daniel Bougourd',
    'Taylor Simons',
    'Rachel Latinsky',
    'Noemi McKee',
    'Nadine Sequeira',
    'Mitsuo Tezuka',
    'Matt Mayback',
    'Kevin Wong',
    'Julie Oberhausen',
    'Ishaq Platero',
    'Geoffrey King',
    'Diana Dalsgaard-Johansen',
    'David Stevenson',
    'Damien Alzonne',
    'Cris Silva',
    'Colin Brown',
    'Chris Balzan',
    'Brian Moy',
    'Ankit Mehta',
    'Alex Kinzig',
    'Alessandra Gotbaum'
];

$transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

$api_client = new ApiClient($transport);

foreach ($names as $name) {

    $name_array = explode(" ", $name);

    $users = $api_client->read(new Management\User([
            'q' => "first_name=:" . $name_array[0] . "&last_name=:" . $name_array[1] . "&type==INTERNAL"
        ]
    ), new JSONResponseDecoder());

    if (count($users->data()) == 0) {
        echo "Could not find $name \n";
        continue;
    }

    foreach ($users->data() AS $user) {
        echo $user->id . " - ";
        echo $name . " - ";
        echo $user->name;
        echo "\n";
    }

}