<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit252b0a54be4d0852ddd39595575d4e56
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cf7subanimsinc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cf7subanimsinc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cf7subanimsinc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit252b0a54be4d0852ddd39595575d4e56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit252b0a54be4d0852ddd39595575d4e56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit252b0a54be4d0852ddd39595575d4e56::$classMap;

        }, null, ClassLoader::class);
    }
}
