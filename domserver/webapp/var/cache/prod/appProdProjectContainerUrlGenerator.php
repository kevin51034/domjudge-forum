<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'domjudge_api_getcurrentactivecontest' => array (  0 =>   array (  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getCurrentActiveContestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_changestarttime' => array (  0 =>   array (    0 => 'cid',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::changeStartTimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    1 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getversion' => array (  0 =>   array (  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getVersionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/version',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getinfo' => array (  0 =>   array (  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getInfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getcontests' => array (  0 =>   array (  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getsinglecontest' => array (  0 =>   array (    0 => 'cid',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getSingleContestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    1 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getcontestyaml' => array (  0 =>   array (    0 => 'cid',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestYaml',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contest-yaml',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    2 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_getconteststate' => array (  0 =>   array (    0 => 'cid',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestState',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/state',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    2 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domjudge_api_geteventfeed' => array (  0 =>   array (    0 => 'cid',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getEventFeed',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event-feed',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    2 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_file' => array (  0 =>   array (    0 => 'cid',    1 => 'sid',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\FileController::submissionFiles',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/files',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sid',    ),    2 =>     array (      0 => 'text',      1 => '/submissions',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    4 =>     array (      0 => 'text',      1 => '/api/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submission_file_v4' => array (  0 =>   array (    0 => 'cid',    1 => 'sid',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\FileController::submissionFiles',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/files',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sid',    ),    2 =>     array (      0 => 'text',      1 => '/submissions',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cid',    ),    4 =>     array (      0 => 'text',      1 => '/api/v4/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\SecurityController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'teams_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\TeamController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury-v2/teams/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_show' => array (  0 =>   array (    0 => 'teamid',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\TeamController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'teamid',    ),    1 =>     array (      0 => 'text',      1 => '/jury-v2/teams',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_current_active_contest' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getCurrentActiveContestAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v4/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_start_time' => array (  0 =>   array (    0 => 'cid',    1 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::changeStartTimeAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'cid',    ),    2 =>     array (      0 => 'text',      1 => '/api/v4/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_version' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getVersionAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v4/version',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_info' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getInfoAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v4/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_contests' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getContestsAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v4/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_single_contest' => array (  0 =>   array (    0 => 'cid',    1 => '_format',  ),  1 =>   array (    '_controller' => 'DOMJudgeBundle\\Controller\\APIController::getSingleContestAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'cid',    ),    2 =>     array (      0 => 'text',      1 => '/api/v4/contests',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth/login.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.public_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/public/login.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth/logout.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fallback' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'legacy.controller.fallback:fallback',  ),  2 =>   array (    'path' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'path',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.index' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_team' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/team.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_delete' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/delete.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_contest' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/contest.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_user' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/user.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_team_category' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/team_category.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_team_affiliation' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/team_affiliation.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'legacy.jury_change_contest' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury/change_contest.php',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
