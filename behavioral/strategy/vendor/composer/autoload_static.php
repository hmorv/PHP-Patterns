<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb907d3db99316deff0e211b976c4421
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb907d3db99316deff0e211b976c4421::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb907d3db99316deff0e211b976c4421::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
