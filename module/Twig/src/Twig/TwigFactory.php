<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Twig;

/**
 * factory class for twig
 */
class TwigFactory
{

    /**
     * create twig object
     *
     * @param array $modules
     * @param string $cachePath
     * @param string $baseHref
     * @return \Twig_Environment
     */
    public static function create($modules, $cachePath, $baseHref)
    {
        // twig filesystem loader
        $loader = new \Twig_Loader_Filesystem();

        // load twig with filesystem loader
        $twig = new \Twig_Environment($loader, array(
            'debug' => true,
            'cache' => $cachePath
        ));

        // add global base href
        $twig->addGlobal('base_href', $baseHref);

        // define view modules
        foreach ($modules as $key => $value) {
            $twig->getLoader()->addPath($value, $key);
        }

        // add translation extension
        // see: http://twig.sensiolabs.org/doc/extensions/index.html#extensions-install
        // see: http://twig.sensiolabs.org/doc/extensions/i18n.html
        $twig->addExtension(new \Twig_Extensions_Extension_I18n());

        return $twig;
    }
}
