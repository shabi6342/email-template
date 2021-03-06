<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3c07b902fb6174a01a1cb0e9cea79ff2
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3c07b902fb6174a01a1cb0e9cea79ff2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3c07b902fb6174a01a1cb0e9cea79ff2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3c07b902fb6174a01a1cb0e9cea79ff2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
