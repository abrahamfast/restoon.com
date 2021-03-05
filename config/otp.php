<?php


return [
    'sender' => env('OTP_SENDER', '0912345678909123456789'),
    'key' => env('OTP_KEY', '0912345678909123456789'),
    'otp_cache_key' => env('OTP_CACHE'),
    'pattern' => env('OTP_PATTERN')
];
