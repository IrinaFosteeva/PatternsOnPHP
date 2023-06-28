<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit825190b0bd9b6360a8555d961c434e4b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PatternsPHP\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PatternsPHP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit825190b0bd9b6360a8555d961c434e4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit825190b0bd9b6360a8555d961c434e4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit825190b0bd9b6360a8555d961c434e4b::$classMap;

        }, null, ClassLoader::class);
    }
}