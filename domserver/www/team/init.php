<?php
/**
 * Include required files.
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */


require_once('../configure.php');

$pagename = basename($_SERVER['PHP_SELF']);

define('IS_JURY', false);
define('IS_PUBLIC', false);

//db connect  
require_once(LIBDIR . '/init.php');

setup_database_connection();

//require_once 避免重複讀入
require_once(LIBWWWDIR . '/common.php');
require_once(LIBWWWDIR . '/print.php');
require_once(LIBWWWDIR . '/clarification.php');
require_once(LIBWWWDIR . '/scoreboard.php');
require_once(LIBWWWDIR . '/printing.php');
require_once(LIBWWWDIR . '/auth.php');
require_once(LIBWWWDIR . '/forms.php');
require_once(LIBWWWDIR . '/forum.php');
//require_once(LIBWWWDIR . '/newtopic.php');
require_once(LIBWWWDIR . '/addnewtopic.php');

logged_in();
if (!checkrole('team') && !checkrole('jury')) {
    error("You do not have permission to perform that action (Missing role: 'team')");
}
if (empty($teamdata) && !checkrole('jury')) {
    error("You do not have a team associated with your account.  Please contact a staff member.");
}

if ($teamdata['enabled'] != 1 && !checkrole('jury')) {
    error("Team is not enabled.");
}

$cdatas = getCurContests(true, $teamdata['teamid']);
$cids = array_keys($cdatas);

// If the cookie has a existing contest, use it
if (isset($_COOKIE['domjudge_cid']) && isset($cdatas[$_COOKIE['domjudge_cid']])) {
    $cid = (int)$_COOKIE['domjudge_cid'];
    $cdata = $cdatas[$cid];
} elseif (count($cids) >= 1) {
    // Otherwise, select the first contest
    $cid = $cids[0];
    $cdata = $cdatas[$cid];
}

// Data to be sent as AJAX updates:
$updates = array('clarifications' => array(), 'judgings' => array());
if (count($cids)) {
    $updates['clarifications'] =
    $DB->q('TABLE SELECT clarid, submittime, sender, recipient, probid, body
            FROM team_unread
            LEFT JOIN clarification ON(mesgid=clarid)
            WHERE teamid = %i AND cid IN (%Ai)', $teamid, $cids);
}
if (!empty($cid)) {
    $updates['judgings'] =
    $DB->q('TABLE SELECT s.submitid, j.judgingid, j.result, s.submittime
            FROM judging j
            LEFT JOIN submission s USING(submitid)
            WHERE s.teamid = %i AND j.cid = %i AND j.seen = 0
            AND j.valid=1 AND s.submittime < %i' .
           (dbconfig_get('verification_required', 0) ?
             ' AND j.verified = 1' : ''), $teamid, $cid, $cdata['endtime']);
}

?>

<link href="/team/style/forum.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="forum.js"></script>