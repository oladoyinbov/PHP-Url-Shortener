<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1dce301979b4b60786cada167884952
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1dce301979b4b60786cada167884952::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1dce301979b4b60786cada167884952::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1dce301979b4b60786cada167884952::$classMap;

        }, null, ClassLoader::class);
    }
}