<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c31af8dd2da6fd162ab8f2cccfe192e
{
    public static $files = array (
        '86b11f31b0f14d70d5948572e1f4b1ba' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c31af8dd2da6fd162ab8f2cccfe192e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c31af8dd2da6fd162ab8f2cccfe192e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c31af8dd2da6fd162ab8f2cccfe192e::$classMap;

        }, null, ClassLoader::class);
    }
}
