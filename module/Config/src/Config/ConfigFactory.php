<?php
/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Config;

/**
 * factory class for config
 */
class ConfigFactory
{

    /**
     * create \Zend\Config\Config Object from given ini file
     *
     * @param string $configFile absolut path to ini file
     * @return \Zend\Config\Config
     */
    public static function create($configFile)
    {
        // init config
        $configReader = new \Zend\Config\Reader\Ini();
        $configData = $configReader->fromFile($configFile);
        return new \Zend\Config\Config($configData, true);
    }
}
