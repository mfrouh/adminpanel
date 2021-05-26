<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f73e96b70ded2ff965f2b618b228cc2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MFrouh\\AdminPanel\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MFrouh\\AdminPanel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f73e96b70ded2ff965f2b618b228cc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f73e96b70ded2ff965f2b618b228cc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f73e96b70ded2ff965f2b618b228cc2::$classMap;

        }, null, ClassLoader::class);
    }
}
