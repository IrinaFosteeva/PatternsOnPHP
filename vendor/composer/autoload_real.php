<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit825190b0bd9b6360a8555d961c434e4b
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

        spl_autoload_register(array('ComposerAutoloaderInit825190b0bd9b6360a8555d961c434e4b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit825190b0bd9b6360a8555d961c434e4b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit825190b0bd9b6360a8555d961c434e4b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
