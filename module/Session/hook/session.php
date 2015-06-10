<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

/**
 * hook to configure session
 */
$app->hook('slim.mvc.ready', function () use ($app) {
    $app->container->singleton('sm', function ($app) {
        // get config
        $config = $app->conf;

        // create session manager object
        return \Session\SessionFactory::create($config->session->toArray());
    });

    // start session manager
    $sm = $app->sm;
});
