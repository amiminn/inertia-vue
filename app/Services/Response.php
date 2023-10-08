<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Response
{
    public static function success($msg)
    {
        return [
            'success' => true,
            'msg' => $msg
        ];
    }

    public static function failed($msg, $status = 400)
    {
        return response([
            'success' => false,
            'msg' => $msg
        ], $status);
    }

    public static function error($status = 400)
    {
        return response([
            'success' => false,
            'msg' => "Oops, sepertinya ada kesalahan server."
        ], $status);
    }

    public static function data($data)
    {
        return [
            'success' => true,
            'data' => $data
        ];
    }

    public static function random($num = 40)
    {
        return Str::random($num);
    }

    public static function epoch()
    {
        return round(microtime(true) * 1000);
    }

    public static function url($path)
    {
        return env('APP_URL') . $path;
    }

    public static function user()
    {
        return Auth::user();
    }

    public static function uuid()
    {
        return Str::uuid()->toString();
    }

    public static function to_lower($text)
    {
        return str_replace(" ", "", strtolower($text));
    }
}
