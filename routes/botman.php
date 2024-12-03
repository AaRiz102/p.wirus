<?php

use BotMan\BotMan\BotMan;

$botman = app('botman');

$botman->hears('halo', function (BotMan $bot) {
    $bot->reply('Halo! Ada yang bisa saya bantu?');
});

$botman->fallback(function (BotMan $bot) {
    $bot->reply('Maaf, saya tidak mengerti pesan Anda.');
});
