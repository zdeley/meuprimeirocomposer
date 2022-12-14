<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2c11d47906e0cafbda9d62ef926c4a7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Admin\\Projetocomposer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Admin\\Projetocomposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2c11d47906e0cafbda9d62ef926c4a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2c11d47906e0cafbda9d62ef926c4a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2c11d47906e0cafbda9d62ef926c4a7::$classMap;

        }, null, ClassLoader::class);
    }
}
