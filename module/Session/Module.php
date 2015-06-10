<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Session;

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
            __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__ . '/'
        );
    }

    /**
     * return array with paths for hooks to include
     *
     * @return array
     */
    public function getHookConfig()
    {
        return array(
            __DIR__ . '/hook/'
        );
    }
}
