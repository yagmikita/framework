<?php

/**
 * Setup autoloading
 */
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    include_once __DIR__ . '/../vendor/autoload.php';
} else {
    require_once __DIR__ . '/../lib/Zend/Loader/StandardAutoloader.php';
    $loader = new Zend\Loader\StandardAutoloader(
        array(
             Zend\Loader\StandardAutoloader::LOAD_NS => array(
                 'Zend'     => __DIR__ . '/../lib/Zend',
                 'NG'       => __DIR__ . '/../lib/NG',
                 'NGTest'   => __DIR__ . '/NGTest'
             ),
        ));
    $loader->register();
}