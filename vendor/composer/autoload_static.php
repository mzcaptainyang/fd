<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27e2400e4bca186ea3fada82bfd4f6e4
{
    public static $files = array (
        '31b10cf96d7603c1a6cdeafe154023cd' => __DIR__ . '/../..' . '/framework/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Novel\\' => 6,
        ),
        'F' => 
        array (
            'Fd\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Novel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fd\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27e2400e4bca186ea3fada82bfd4f6e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27e2400e4bca186ea3fada82bfd4f6e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
