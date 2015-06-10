<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Doctrine;

/**
 * factory class for doctrine
 */
class DoctrineFactory
{

    /**
     * create doctrine dbal connection with given dsn string
     *
     * @param string $dsn
     * @return \Doctrine\DBAL\Driver\Connection
     */
    public static function create($dsn)
    {
        $doctrineConfig = new \Doctrine\DBAL\Configuration();

        $connectionParams = array(
            'url' => $dsn,
        );

        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $doctrineConfig);

        return $conn;
    }
}
