<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc82e20c826b4610b3c4db0f590a8b0e9
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tests\\' => 6,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc82e20c826b4610b3c4db0f590a8b0e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc82e20c826b4610b3c4db0f590a8b0e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc82e20c826b4610b3c4db0f590a8b0e9::$classMap;

        }, null, ClassLoader::class);
    }
}
