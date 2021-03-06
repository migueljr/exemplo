<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3614a4ef2123c1c2eeddd06885c696ff
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Code\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Code',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3614a4ef2123c1c2eeddd06885c696ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3614a4ef2123c1c2eeddd06885c696ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
