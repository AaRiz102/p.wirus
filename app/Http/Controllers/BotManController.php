<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        // Tangani sapaan
        $botman->hears('Hi|Halo|Hai', function (BotMan $bot) {
            $bot->reply('Halo! Selamat datang di Afifah Backdrop. Ada yang bisa kami bantu? 😊');
        });

        // Tangani reservasi
        $botman->hears('Reservasi', function (BotMan $bot) {
            $bot->reply('Untuk reservasi, silakan kunjungi menu services dan pilih layanan yang Anda inginkan.');
        });

        // Tangani daftar mitra
        $botman->hears('Daftar mitra', function (BotMan $bot) {
            $bot->reply('Untuk pendaftaran mitra, silakan klik menu Daftar Mitra.');
        });

        // Menampilkan daftar perintah
        $botman->hears('/', function (BotMan $bot) {
            $bot->reply("Berikut daftar perintah:\n
                        /hi - Menyapa bot\n
                        /reservasi - Informasi reservasi\n
                        /daftar_mitra - Informasi pendaftaran mitra");
        });

        $botman->listen();
    }
}
