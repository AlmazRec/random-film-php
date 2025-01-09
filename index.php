<?php

require_once 'vendor/autoload.php';

function randomMovie()
{
    $client = new GuzzleHttp\Client();

    $headers = [
        'X-API-KEY' => 'TWE13NT-GA9MRWA-P7BPBBH-0CWFH2Y'
    ];

    $url = 'https://api.kinopoisk.dev/v1.4/movie?year=2023&genres.name=комедия';
    $res = $client->request('GET', $url, [
        'headers' => $headers,
        'verify' => false,
    ]);

    $rand = rand(0, 9);
    $filmData = json_decode($res->getBody(), true);

    return $filmData['docs'][$rand];
}
