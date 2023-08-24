<?php

namespace App\Services\System;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function send($email_tujuan, $subject, $path, $data = [], $files = [])
    {
        try {
            $maindata = [
                'data' => $data
            ];

            Mail::send('mailTemplates.' . $path, $maindata, function ($message) use ($email_tujuan, $subject, $files) {
                $message->to($email_tujuan)
                    ->subject($subject);

                foreach ($files as $file) {
                    $message->attach($file);
                }
            });

            return true;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
