<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/product')) {
            // product
            if ('/product' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProductController::index',  '_route' => 'product',);
            }

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'App\\Controller\\ProductController::showAction',));
            }

            // app_product_update
            if (0 === strpos($pathinfo, '/product/edit') && preg_match('#^/product/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_product_update')), array (  '_controller' => 'App\\Controller\\ProductController::updateAction',));
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\ProductController::home',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // ajout
        if ('/ajout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ProductController::ajout',  '_route' => 'ajout',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                }

                return $ret;
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }

        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ProductController::contact',  '_route' => 'contact',);
        }

        // app_lucky_number
        if ('/lucky/number' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\LuckyController::number',  '_route' => 'app_lucky_number',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
