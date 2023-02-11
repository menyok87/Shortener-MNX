<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc08d5bfd5b6d7ffc218a831191c09ca9
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaxMind\\WebService\\' => 19,
            'MaxMind\\Exception\\' => 18,
            'MaxMind\\Db\\' => 11,
        ),
        'I' => 
        array (
            'IP2Proxy\\' => 9,
        ),
        'G' => 
        array (
            'GeoIp2\\' => 7,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaxMind\\WebService\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService',
        ),
        'MaxMind\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception',
        ),
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'IP2Proxy\\' => 
        array (
            0 => __DIR__ . '/..' . '/ip2location/ip2proxy-php/src',
        ),
        'GeoIp2\\' => 
        array (
            0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc08d5bfd5b6d7ffc218a831191c09ca9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc08d5bfd5b6d7ffc218a831191c09ca9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc08d5bfd5b6d7ffc218a831191c09ca9::$classMap;

        }, null, ClassLoader::class);
    }
}