<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d0b3f770aa95fc030cb9f71b591a3ff
{
    public static $files = array (
        '63cb5d305ed9d065489f2071a60cd3d6' => __DIR__ . '/../..' . '/blankphp/helpers/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blankphp\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blankphp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blankphp',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d0b3f770aa95fc030cb9f71b591a3ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d0b3f770aa95fc030cb9f71b591a3ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
