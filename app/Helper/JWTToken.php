<?php
namespace App\Helper;
use Firebase\JWT\JWT;
use Firbase\JWT\key;
use Exception;

class JWTToken
{
    public static function CreateToken($userEmail, $suerID):string
    {
        $key = env('JWT_KEY');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+24*60*60,
            'userEmail'=>$userEmail,
            'userId'=>$suerID
        ];
        return JWT::encode($payload,$key,'HS256');
    }

    public static function ReadToken ($token): string|object
    {
        try{
            if($token==null){
                return 'unauthorized';
            }
            else{
                $key=env('JWT_KEY');
                return JWT::decode($token, new key($key,'HS256'));
            }
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }
}