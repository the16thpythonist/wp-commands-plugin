<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd25f47f61902aa98beba082e58cc54fc
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'the16thpythonist\\Wordpress\\Post\\' => 32,
            'the16thpythonist\\Wordpress\\Meta\\' => 32,
            'the16thpythonist\\Wordpress\\Functions\\' => 37,
            'the16thpythonist\\Wordpress\\Data\\Type\\' => 37,
            'the16thpythonist\\Wordpress\\Data\\Structure\\' => 42,
            'the16thpythonist\\Wordpress\\Data\\Encoding\\' => 41,
            'the16thpythonist\\Wordpress\\Data\\Decoding\\' => 41,
            'the16thpythonist\\Wordpress\\Data\\' => 32,
            'the16thpythonist\\Wordpress\\Base\\' => 32,
            'the16thpythonist\\Wordpress\\' => 27,
            'the16thpythonist\\Command\\' => 25,
        ),
        'L' => 
        array (
            'Log\\' => 4,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'the16thpythonist\\Wordpress\\Post\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-cpt-lib/src/the16thpythonist/Wordpress/Post',
        ),
        'the16thpythonist\\Wordpress\\Meta\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-cpt-lib/src/the16thpythonist/Wordpress/Meta',
        ),
        'the16thpythonist\\Wordpress\\Functions\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-cpt-lib/src/the16thpythonist/Wordpress/Functions',
        ),
        'the16thpythonist\\Wordpress\\Data\\Type\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-data-safe/src/the16thpythonist/Wordpress/Data/Type',
        ),
        'the16thpythonist\\Wordpress\\Data\\Structure\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-data-safe/src/the16thpythonist/Wordpress/Data/Structure',
        ),
        'the16thpythonist\\Wordpress\\Data\\Encoding\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-data-safe/src/the16thpythonist/Wordpress/Data/Encoding',
        ),
        'the16thpythonist\\Wordpress\\Data\\Decoding\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-data-safe/src/the16thpythonist/Wordpress/Data/Decoding',
        ),
        'the16thpythonist\\Wordpress\\Data\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-data-safe/src/the16thpythonist/Wordpress/Data',
        ),
        'the16thpythonist\\Wordpress\\Base\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-cpt-lib/src/the16thpythonist/Wordpress/Base',
        ),
        'the16thpythonist\\Wordpress\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-commands/src/the16thpythonist/Wordpress',
        ),
        'the16thpythonist\\Command\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-commands/src/the16thpythonist/Command',
        ),
        'Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/the16thpythonist/wp-pi-logging/src/Log',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd25f47f61902aa98beba082e58cc54fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd25f47f61902aa98beba082e58cc54fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}