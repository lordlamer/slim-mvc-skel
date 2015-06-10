<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

/**
 * hook to initilize monolog logger
 */
$app->hook('slim.mvc.ready', function () use ($app) {
    // create logger
    $app->container->singleton('log', function () use ($app) {
        // get config
        $config = $app->conf;

        // init logger
        return \Monolog\MonologFactory::create($config->log->file, $config->log->ident, $config->log->level);
    });
});
