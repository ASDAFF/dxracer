<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc77b261e5e7474149b656225fd99831d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'J' => 
        array (
            'Jasny\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Jasny\\' => 
        array (
            0 => __DIR__ . '/..' . '/jasny/auth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc77b261e5e7474149b656225fd99831d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc77b261e5e7474149b656225fd99831d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
