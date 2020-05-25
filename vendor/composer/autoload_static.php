<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52e3537b04e786a759ed9fe7025fb7d3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52e3537b04e786a759ed9fe7025fb7d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52e3537b04e786a759ed9fe7025fb7d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
