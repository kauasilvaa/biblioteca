<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcecbadd691cdf3842a9d2d2f39d8b7fe
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

        spl_autoload_register(array('ComposerAutoloaderInitcecbadd691cdf3842a9d2d2f39d8b7fe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcecbadd691cdf3842a9d2d2f39d8b7fe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcecbadd691cdf3842a9d2d2f39d8b7fe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
