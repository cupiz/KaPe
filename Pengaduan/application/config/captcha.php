<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// BotDetect PHP Captcha configuration options
// more details here: https://captcha.com/doc/php/captcha-options.html
// ----------------------------------------------------------------------------

$config = array(
    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for login page
    |--------------------------------------------------------------------------
    */
    'ExampleCaptcha' => array(
        'UserInputID' => 'CaptchaCode',
        'IconsDivWidth'=> 45,
        'CodeLength' => CaptchaRandomization::GetRandomCodeLength(4, 6),
        'ImageStyle' => array(
            ImageStyle::Radar,
            ImageStyle::Fingerprints,
            
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Captcha configuration for forgot password page
    |--------------------------------------------------------------------------
    */
    's' => array(
        'UserInputID' => 'CaptchaCode',
        'CodeLength' => CaptchaRandomization::GetRandomCodeLength(3, 6),
        'CustomLightColor' => '#9966FF',
    ),

    // Add more your Captcha configuration here...
);
