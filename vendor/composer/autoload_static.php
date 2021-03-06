<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ac9c5625680c17adc4e27cfef7f32d4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'R' => 
        array (
            'Routes\\' => 7,
            'Rest\\' => 5,
            'Repositories\\' => 13,
        ),
        'I' => 
        array (
            'Ioc\\' => 4,
        ),
        'D' => 
        array (
            'Dice\\' => 5,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Services',
        ),
        'Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Routes',
        ),
        'Rest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Rest',
        ),
        'Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Repositories',
        ),
        'Ioc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/IOC',
        ),
        'Dice\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/IOC/Dice',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ac9c5625680c17adc4e27cfef7f32d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ac9c5625680c17adc4e27cfef7f32d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
