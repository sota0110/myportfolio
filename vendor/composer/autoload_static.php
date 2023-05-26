<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb569714659cc8fd3a475f4c8f80f2d16
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb569714659cc8fd3a475f4c8f80f2d16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb569714659cc8fd3a475f4c8f80f2d16::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb569714659cc8fd3a475f4c8f80f2d16::$classMap;

        }, null, ClassLoader::class);
    }
}
