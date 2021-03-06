<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ce865f5bc22532947c1ce71c2356e53
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Classes\\' => 12,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ce865f5bc22532947c1ce71c2356e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ce865f5bc22532947c1ce71c2356e53::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
