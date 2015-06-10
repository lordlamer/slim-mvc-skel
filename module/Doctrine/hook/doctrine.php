<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

/**
 * hook to create database connection
 */
$app->hook('slim.mvc.ready', function () use ($app) {
    // create db
    $app->container->singleton('db', function () use ($app) {
        // get config
        $config = $app->conf;

        return \Doctrine\DoctrineFactory::create($config->database->dsn);
    });
});
