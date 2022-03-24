<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit905e83acb2eecef58209b8e03359fb54
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit905e83acb2eecef58209b8e03359fb54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit905e83acb2eecef58209b8e03359fb54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit905e83acb2eecef58209b8e03359fb54::$classMap;

        }, null, ClassLoader::class);
    }
}
