<?php

namespace App\Libraries;

use Config\Services;

class MyToken
{
    public static function generate(array $array = []): string
    {
        $encryptor = Services::encrypter();
        $plainTokenStr = json_encode($array);
        return base64_encode($encryptor->encrypt($plainTokenStr));
    }
    public static function decode(string $token = ''): object
    {
        $encryptor = Services::encrypter();
        $cipher = base64_decode($token);
        try {
            $plain = $encryptor->decrypt($cipher);
            return json_decode($plain);
        } catch (\Exception $e) {
            return json_decode('{}');
        }
    }

    public static function generateForgotPasswordToken($id): string
    {
        return self::getRandomUrlString() . $id;
    }

    public static function generateAssetToken($id): string
    {
        return self::getRandomUrlString() . $id;
    }

    private static function getRandomUrlString($length = 6) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
