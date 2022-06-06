<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc758706fdb4608f0063560d5b4978be6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechStore\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechStore\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc758706fdb4608f0063560d5b4978be6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc758706fdb4608f0063560d5b4978be6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc758706fdb4608f0063560d5b4978be6::$classMap;

        }, null, ClassLoader::class);
    }
}
