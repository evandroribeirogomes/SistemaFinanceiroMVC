<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit806b2163ad45964ea21b56a3d81817c2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit806b2163ad45964ea21b56a3d81817c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit806b2163ad45964ea21b56a3d81817c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit806b2163ad45964ea21b56a3d81817c2::$classMap;

        }, null, ClassLoader::class);
    }
}
