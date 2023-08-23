<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f01e9a90260d635ab9b98bab5cbc5fc
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rumman\\Contact\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rumman\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f01e9a90260d635ab9b98bab5cbc5fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f01e9a90260d635ab9b98bab5cbc5fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f01e9a90260d635ab9b98bab5cbc5fc::$classMap;

        }, null, ClassLoader::class);
    }
}