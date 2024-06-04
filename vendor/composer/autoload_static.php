<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec32ec117f898917c276024612ea6c91
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cstreitberger18\\RandomBool\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cstreitberger18\\RandomBool\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec32ec117f898917c276024612ea6c91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec32ec117f898917c276024612ea6c91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec32ec117f898917c276024612ea6c91::$classMap;

        }, null, ClassLoader::class);
    }
}