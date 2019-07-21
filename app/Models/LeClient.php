<?php

namespace App\Models;

use Illuminate\Http\Exceptions\HttpResponseException;
use Zttp\Zttp;
use Illuminate\Support\Facades\Cache;

class LeClient
{
    private static $admin_url = "https://dev.admin.life.appxtream.com//lifeBackend/api/life";
    private static $user_url = "https://dev.life.appxtream.com//lifeBackend/api/";

    const TOKEN_EXPIRED_MESSAGE = "LE_TOKEN_EXPIRED";
    const INVALID_CREDENTIALS_MESSAGE = "INVALID_LE_CREDENTIALS";

    // User request GET to LE Portal function
    public static function user_get($url, $params = null)
    {
        $response = arrayToObject(self::withAuth()->get(self::$user_url . $url)->json());
        return self::errorHandling($response);
    }

    // User request POST to LE Portal function
    public static function user_post($url, $body)
    {
        $response = arrayToObject(self::withAuth()->post(self::$user_url . $url, $body)->json());
        return self::errorHandling($response);
    }

    // Admin request GET to LE Dashboard function
    public static function admin_get($url, $params = null)
    {
        $response = arrayToObject(self::withAdminAuth()->get(self::$admin_url . $url)->json());
        return self::adminErrorHandling($response);
    }

    // Admin request POST to LE Dashboard function
    public static function admin_post($url, $body)
    {
        $response = arrayToObject(self::withAdminAuth()->post(self::$admin_url . $url, $body)->json());
        return self::adminErrorHandling($response);
    }

    // Function to attach user token to Zttp client
    public static function withAuth()
    {
        return Zttp::withHeaders(['apiKey' => session('user_token')]);
    }

    // Function to attach admin token to Zttp client
    public static function withAdminAuth()
    {
        return Zttp::withHeaders(['apiKey' => Cache::get('admin_token')]);
    }

    // A centralized function to handle all the error from Zttp client and throw error.
    // The error threw here is handled in /app/Exceptions/Handler, in the "render" function
    public static function errorHandling($response)
    {
        switch ($response->code) {
            case 200:
                return $response;
            case 300:
                throw new HttpResponseException(
                    redirect('/dashboard/logout')
                        ->with('err', 'Session timeout. Please login again.')
                );
            case -500:
                throw new HttpResponseException(
                    redirect('/')
                        ->with('err', "Invalid Credentials")
                );
            default:
                return dd($response);
        }
        #if ($response->code=="200")
        #    return $response;
        #elseif ($response->code=="300")
        #    return abort(419,self::TOKEN_EXPIRED_MESSAGE);
        #elseif ($response->code=="-500")
        #    return abort(401,self::INVALID_CREDENTIALS_MESSAGE);
        #else
        #    dd($response);
    }

    public static function adminErrorHandling($response)
    {
        switch ($response ? $response->code : null) {
            case 200:
                return $response;
            default:
                return dd($response);
        }
        #if ($response->code=="200")
        #    return $response;
    }
}
