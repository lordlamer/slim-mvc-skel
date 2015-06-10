<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Session;

use \Zend\Session\SessionManager;

/**
 * factory class for session handling
 */
class SessionFactory
{

    /**
     * create session manager object
     *
     * @param array $config
     * @return \Zend\Session\SessionManager
     */
    public static function create($config)
    {
        // init session manager
        $sm = new SessionManager();

        // set session options
        $sm->getConfig()->setOptions($config);

        // return session manager object
        return $sm;
    }
}
