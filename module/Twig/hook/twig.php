<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

/**
 * hook to initialize twig
 */
$app->hook('slim.mvc.ready', function () use ($app) {

    $app->container->singleton('twig', function () use ($app) {
        return \Twig\TwigFactory::create(
            $app->viewModules,
            PROJECT_PATH . '/data/cache/twig',
            $app->conf->base->href
        );
    });
});
