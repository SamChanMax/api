<?php
return [
    'driver' => env("MAIL_DRIVER"),
    'host' => env("MAIL_HOST"), // 根据你的邮件服务提供商来填
    'port' => env("MAIL_PORT"), // 同上
    'encryption' =>env("MAIL_ENCRYPTION"), // 同上 一般是tls或ssl
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS'),
        'name' => env('MAIL_FROM_NAME'),
    ],

];
