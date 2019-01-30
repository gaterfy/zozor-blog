<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/admin/post/':
                // admin_index
                $ret = array('_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_admin_index;
                }

                return $ret;
                not_admin_index:
                // admin_post_index
                $ret = array('_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_admin_post_index;
                }

                return $ret;
                not_admin_post_index:
                break;
            default:
                $routes = array(
                    '/admin/post/new' => array(array('_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/' => array(array('_route' => 'homepage', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index'), null, array('GET' => 0), null),
                    '/rss.xml' => array(array('_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index'), null, array('GET' => 0), null),
                    '/search' => array(array('_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search'), null, array('GET' => 0), null),
                    '/login' => array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/post/(?'
                        .'|(\\d+)(*:27)'
                        .'|(\\d+)/edit(*:44)'
                        .'|([^/]++)/delete(*:66)'
                    .')'
                    .'|/p(?'
                        .'|age/([1-9]\\d*)(*:93)'
                        .'|osts/([^/]++)(*:113)'
                    .')'
                    .'|/comment/([^/]++)/new(*:143)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            27 => array(array('_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show'), array('id'), array('GET' => 0), null),
                            44 => array(array('_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            66 => array(array('_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete'), array('id'), array('POST' => 0), null),
                            93 => array(array('_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index'), array('page'), array('GET' => 0), null),
                            113 => array(array('_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow'), array('slug'), array('GET' => 0), null),
                            143 => array(array('_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew'), array('postSlug'), array('POST' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (143 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
