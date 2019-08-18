<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/api')) {
            // domjudge_api_getcurrentactivecontest
            if (rtrim($pathinfo, '/') === '/api') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_domjudge_api_getcurrentactivecontest;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'domjudge_api_getcurrentactivecontest');
                }

                return array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getCurrentActiveContestAction',  '_route' => 'domjudge_api_getcurrentactivecontest',);
            }
            not_domjudge_api_getcurrentactivecontest:

            // domjudge_api_changestarttime
            if (0 === strpos($pathinfo, '/api/contests') && preg_match('#^/api/contests/(?P<cid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_domjudge_api_changestarttime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'domjudge_api_changestarttime')), array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::changeStartTimeAction',));
            }
            not_domjudge_api_changestarttime:

            // domjudge_api_getversion
            if ($pathinfo === '/api/version') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_domjudge_api_getversion;
                }

                return array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getVersionAction',  '_route' => 'domjudge_api_getversion',);
            }
            not_domjudge_api_getversion:

            // domjudge_api_getinfo
            if ($pathinfo === '/api/info') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_domjudge_api_getinfo;
                }

                return array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getInfoAction',  '_route' => 'domjudge_api_getinfo',);
            }
            not_domjudge_api_getinfo:

            if (0 === strpos($pathinfo, '/api/contests')) {
                // domjudge_api_getcontests
                if ($pathinfo === '/api/contests') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_domjudge_api_getcontests;
                    }

                    return array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestsAction',  '_route' => 'domjudge_api_getcontests',);
                }
                not_domjudge_api_getcontests:

                // domjudge_api_getsinglecontest
                if (preg_match('#^/api/contests/(?P<cid>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_domjudge_api_getsinglecontest;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domjudge_api_getsinglecontest')), array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getSingleContestAction',));
                }
                not_domjudge_api_getsinglecontest:

                // domjudge_api_getcontestyaml
                if (preg_match('#^/api/contests/(?P<cid>[^/]++)/contest\\-yaml$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_domjudge_api_getcontestyaml;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domjudge_api_getcontestyaml')), array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestYaml',));
                }
                not_domjudge_api_getcontestyaml:

                // domjudge_api_getconteststate
                if (preg_match('#^/api/contests/(?P<cid>[^/]++)/state$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_domjudge_api_getconteststate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domjudge_api_getconteststate')), array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestState',));
                }
                not_domjudge_api_getconteststate:

                // domjudge_api_geteventfeed
                if (preg_match('#^/api/contests/(?P<cid>[^/]++)/event\\-feed$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_domjudge_api_geteventfeed;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domjudge_api_geteventfeed')), array (  '_format' => 'json',  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getEventFeed',));
                }
                not_domjudge_api_geteventfeed:

                // submission_file
                if (preg_match('#^/api/contests/(?P<cid>[^/]++)/submissions/(?P<sid>[^/]++)/files$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'submission_file')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\FileController::submissionFiles',));
                }

            }

            // submission_file_v4
            if (0 === strpos($pathinfo, '/api/v4/contests') && preg_match('#^/api/v4/contests/(?P<cid>[^/]++)/submissions/(?P<sid>[^/]++)/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'submission_file_v4')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\FileController::submissionFiles',));
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'DOMJudgeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'DOMJudgeBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/jury-v2/teams')) {
            // teams_index
            if (rtrim($pathinfo, '/') === '/jury-v2/teams') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'teams_index');
                }

                return array (  '_controller' => 'DOMJudgeBundle\\Controller\\TeamController::indexAction',  '_route' => 'teams_index',);
            }

            // team_show
            if (preg_match('#^/jury\\-v2/teams/(?P<teamid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_show')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\TeamController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/v4')) {
            // get_current_active_contest
            if (0 === strpos($pathinfo, '/api/v4/') && preg_match('#^/api/v4/(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_current_active_contest;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_current_active_contest')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getCurrentActiveContestAction',  '_format' => 'json',));
            }
            not_get_current_active_contest:

            // change_start_time
            if (0 === strpos($pathinfo, '/api/v4/contests') && preg_match('#^/api/v4/contests/(?P<cid>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_change_start_time;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_start_time')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::changeStartTimeAction',  '_format' => 'json',));
            }
            not_change_start_time:

            // get_version
            if (0 === strpos($pathinfo, '/api/v4/version') && preg_match('#^/api/v4/version(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_version;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_version')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getVersionAction',  '_format' => 'json',));
            }
            not_get_version:

            // get_info
            if (0 === strpos($pathinfo, '/api/v4/info') && preg_match('#^/api/v4/info(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_info;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_info')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getInfoAction',  '_format' => 'json',));
            }
            not_get_info:

            if (0 === strpos($pathinfo, '/api/v4/contests')) {
                // get_contests
                if (preg_match('#^/api/v4/contests(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_contests;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contests')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestsAction',  '_format' => 'json',));
                }
                not_get_contests:

                // get_single_contest
                if (preg_match('#^/api/v4/contests/(?P<cid>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_single_contest;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_single_contest')), array (  '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getSingleContestAction',  '_format' => 'json',));
                }
                not_get_single_contest:

            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // legacy.login
        if ($pathinfo === '/auth/login.php') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'login',  '_route' => 'legacy.login',);
        }

        // legacy.public_login
        if ($pathinfo === '/public/login.php') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'login',  '_route' => 'legacy.public_login',);
        }

        // legacy.logout
        if ($pathinfo === '/auth/logout.php') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'logout',  '_route' => 'legacy.logout',);
        }

        // fallback
        if (preg_match('#^/(?P<path>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fallback')), array (  '_controller' => 'legacy.controller.fallback:fallback',));
        }

        // legacy.index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'legacy.index');
            }

            return array('_route' => 'legacy.index');
        }

        if (0 === strpos($pathinfo, '/jury')) {
            // legacy.jury_team
            if ($pathinfo === '/jury/team.php') {
                return array('_route' => 'legacy.jury_team');
            }

            // legacy.jury_delete
            if ($pathinfo === '/jury/delete.php') {
                return array('_route' => 'legacy.jury_delete');
            }

            // legacy.jury_contest
            if ($pathinfo === '/jury/contest.php') {
                return array('_route' => 'legacy.jury_contest');
            }

            // legacy.jury_user
            if ($pathinfo === '/jury/user.php') {
                return array('_route' => 'legacy.jury_user');
            }

            if (0 === strpos($pathinfo, '/jury/team_')) {
                // legacy.jury_team_category
                if ($pathinfo === '/jury/team_category.php') {
                    return array('_route' => 'legacy.jury_team_category');
                }

                // legacy.jury_team_affiliation
                if ($pathinfo === '/jury/team_affiliation.php') {
                    return array('_route' => 'legacy.jury_team_affiliation');
                }

            }

            // legacy.jury_change_contest
            if ($pathinfo === '/jury/change_contest.php') {
                return array('_route' => 'legacy.jury_change_contest');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
