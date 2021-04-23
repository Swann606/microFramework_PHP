<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ef617aaae33461c2f1c301aaa5a1f79
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ef617aaae33461c2f1c301aaa5a1f79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ef617aaae33461c2f1c301aaa5a1f79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ef617aaae33461c2f1c301aaa5a1f79::$classMap;

        }, null, ClassLoader::class);
    }
}