<?php

namespace App\Helpers;

use Exception;
use Telegram;

class TelegramHelper
{

    public static function sendFile(string $filePath)
    {
        if (file_exists($filePath)) {
            try {
                $fl = fopen($filePath, 'rb');

                Telegram::sendDocument([
                    'chat_id' => env('TELEGRAM_CHAT_ID'),
                    'document' => $fl,
                    'caption' => 'Сформирована новая дверь'
                ]);

                // fclose($fl);
            } catch (Exception $e) {
                echo 'Проблема отправки файла через Telegram';
            }
        } else {
            echo 'Проблема формирования файла ' . $filePath;
        }

        echo "<script>window.close();</script>";
    }
    
}