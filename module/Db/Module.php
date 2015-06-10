<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Db;

/**
 * Module Class
 */
class Module
{
    /**
     * return array with namespaces and paths for autoloader
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
        );
    }
}
