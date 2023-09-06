<?php

namespace DannyXCII\Http\Web;

class WebServerURI
{
    public static function generate(): WebServerURIResult
    {
        $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $path = $_SERVER['REQUEST_URI'];
        $query = $_SERVER['QUERY_STRING'] ?? '';
        $port = $_SERVER['SERVER_PORT'] ?? null;

        return new WebServerURIResult($scheme, $host, $path, $query, $port);
    }
}