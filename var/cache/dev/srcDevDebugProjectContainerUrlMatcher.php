<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // admin_dashboard
        if ('/admin/dashboard' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AdminController::index',  '_route' => 'admin_dashboard',);
        }

        if (0 === strpos($pathinfo, '/admin/product')) {
            // delete_user
            if (0 === strpos($pathinfo, '/admin/product/delete') && preg_match('#^/admin/product/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'App\\Controller\\AdminController::deleteUser',));
            }

            // add_user
            if ('/admin/product/add' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::editUser',  '_route' => 'add_user',);
            }

            // edit_user
            if ('/admin/product/edit/(id)' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::editUser',  '_route' => 'edit_user',);
            }

        }

        // customer
        if ('/customer' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\CustomerController::registerCustomer',  '_route' => 'customer',);
        }

        // root
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::root',  '_route' => 'root',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_root;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'root'));
            }

            return $ret;
        }
        not_root:

        if (0 === strpos($pathinfo, '/home')) {
            // home
            if ('/home' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'home',);
            }

            // home_paginated
            if (0 === strpos($pathinfo, '/home/page') && preg_match('#^/home/page(?:(?P<page>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_paginated')), array (  'page' => 1,  '_controller' => 'App\\Controller\\HomeController::index',));
            }

        }

        elseif (0 === strpos($pathinfo, '/product')) {
            // user_productlist
            if ('/product' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ProductController::index',  '_route' => 'user_productlist',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_user_productlist;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_productlist'));
                }

                return $ret;
            }
            not_user_productlist:

            // product_paginated
            if (preg_match('#^/product(?:/(?P<page>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_paginated')), array (  'page' => 1,  '_controller' => 'App\\Controller\\ProductController::index',));
            }

            // delete_product
            if (0 === strpos($pathinfo, '/product/delete') && preg_match('#^/product/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_product')), array (  '_controller' => 'App\\Controller\\ProductController::deleteProduct',));
            }

            // add_product
            if ('/product/add' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProductController::editProduct',  '_route' => 'add_product',);
            }

            // edit_product
            if (0 === strpos($pathinfo, '/product/edit') && preg_match('#^/product/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_product')), array (  '_controller' => 'App\\Controller\\ProductController::editProduct',));
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // shop
        if ('/shop' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ShopController::index',  '_route' => 'shop',);
        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag
            if (preg_match('#^/tag/(?P<slug>[^/]++)/product$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag')), array (  '_controller' => 'App\\Controller\\TagController::product',));
            }

            // tag_paginated
            if (preg_match('#^/tag/(?P<slug>[^/]++)/product(?:/(?P<page>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_paginated')), array (  'page' => 1,  '_controller' => 'App\\Controller\\TagController::product',));
            }

            // search_tag
            if ('/tag' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\TagController::search',  '_route' => 'search_tag',);
            }

        }

        // add_transaction
        if (preg_match('#^/(?P<id>[^/]++)/add$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_transaction')), array (  '_controller' => 'App\\Controller\\TransactionController::add',));
        }

        if (0 === strpos($pathinfo, '/cart')) {
            // edit_cart
            if ('/cart' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\TransactionController::index',  '_route' => 'edit_cart',);
            }

            // cart_detail
            if ('/cart/detail' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\TransactionController::cart',  '_route' => 'cart_detail',);
            }

        }

        // delete_transaction
        if (0 === strpos($pathinfo, '/transaction/product/delete') && preg_match('#^/transaction/product/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_transaction')), array (  '_controller' => 'App\\Controller\\TransactionController::deleteTransaction',));
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
