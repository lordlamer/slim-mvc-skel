<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Monolog;

/**
 * factory class for monolog
 */
class MonologFactory
{

    /**
     * create monolog object
     *
     * @param string $logFile
     * @param string $ident
     * @param int $logLevel
     * @return \Monolog\Logger
     */
    public static function create($logFile, $ident, $logLevel)
    {
        // init logger
        $logger = new \Monolog\Logger($ident);
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($logFile, $logLevel));

        return $logger;
    }
}
