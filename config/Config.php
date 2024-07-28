<?php

class Config {
    public static $BASE_URL = "";

    public static function getBasePath() {
        return __DIR__."/../";
    }

    public static function getBaseUrl() {
        if (!in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1'])) {
            return DIRECTORY_SEPARATOR;
        }
        $requestUri = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUri, '/', 1);
        if ($pos === false) {
            return '/';
        }
        $basePath = substr($requestUri, 0, $pos + 1);
        return $basePath;
    }

    public static function getPublicUrl() {
        return static::getBaseUrl()."public/";
    }

}