<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb726a6dc22035ee152dc4d63057a5174
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb726a6dc22035ee152dc4d63057a5174::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb726a6dc22035ee152dc4d63057a5174::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
