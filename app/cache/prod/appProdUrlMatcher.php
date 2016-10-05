<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // page
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<num>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pageAction',));
        }

        // addNews
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ajoutNews',  '_route' => 'addNews',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // app_default_adduser
            if ($pathinfo === '/addUser') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addUser',  '_route' => 'app_default_adduser',);
            }

            if (0 === strpos($pathinfo, '/ajout')) {
                // ajoutNews
                if ($pathinfo === '/ajout/news') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getAjoutNews',  '_route' => 'ajoutNews',);
                }

                // ajoutUser
                if ($pathinfo === '/ajout/user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getAjoutUser',  '_route' => 'ajoutUser',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
