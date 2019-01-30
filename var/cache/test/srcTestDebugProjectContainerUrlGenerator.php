<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\BlogController::index'), array(), array(array('text', '/admin/post/')), array(), array()),
        'admin_post_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\BlogController::index'), array(), array(array('text', '/admin/post/')), array(), array()),
        'admin_post_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\BlogController::new'), array(), array(array('text', '/admin/post/new')), array(), array()),
        'admin_post_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::show'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/admin/post')), array(), array()),
        'admin_post_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::edit'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/admin/post')), array(), array()),
        'admin_post_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/post')), array(), array()),
        'homepage' => array(array(), array('page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index'), array(), array(array('text', '/')), array(), array()),
        'blog_rss' => array(array(), array('page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index'), array(), array(array('text', '/rss.xml')), array(), array()),
        'blog_index_paginated' => array(array('page'), array('_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index'), array('page' => '[1-9]\\d*'), array(array('variable', '/', '[1-9]\\d*', 'page'), array('text', '/page')), array(), array()),
        'blog_post' => array(array('slug'), array('_controller' => 'App\\Controller\\BlogController::postShow'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/posts')), array(), array()),
        'comment_new' => array(array('postSlug'), array('_controller' => 'App\\Controller\\BlogController::commentNew'), array(), array(array('text', '/new'), array('variable', '/', '[^/]++', 'postSlug'), array('text', '/comment')), array(), array()),
        'blog_search' => array(array(), array('_controller' => 'App\\Controller\\BlogController::search'), array(), array(array('text', '/search')), array(), array()),
        'security_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
