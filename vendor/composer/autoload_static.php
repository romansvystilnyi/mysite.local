<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita41d922cbafd2096d9cb8c0f974d1aac
{
    public static $files = array (
        'a74be81a625459b3ceac0c82ebabf7f1' => __DIR__ . '/../..' . '/config/config_db.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'ml\\' => 3,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ml\\' => 
        array (
            0 => __DIR__ . '/..' . '/ml',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita41d922cbafd2096d9cb8c0f974d1aac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita41d922cbafd2096d9cb8c0f974d1aac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
