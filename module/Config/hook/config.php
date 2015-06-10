<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

/**
 * hook to initialize config
 */
$app->container->singleton('conf', function () {
    // init config
    return \Config\ConfigFactory::create(PROJECT_PATH . '/conf/app.ini');
});
