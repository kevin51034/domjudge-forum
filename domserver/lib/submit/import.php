#!/usr/bin/env php
<?php
/**
 * Imports submissions into DOMjudge, which have been exported from another CCS
 *
 * Called: ./import.php <team> <problem> <langext> <submittime> <external-id> <external-result> [<tempfile> <filename>]...
 *
 * Generated from 'import.php.in' on Mon Dec 17 19:19:07 UTC 2018.
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */

if (isset($_SERVER['REMOTE_ADDR'])) {
    die("Commandline use only");
}

require('/opt/domjudge/domserver/etc/domserver-static.php');
require(ETCDIR . '/domserver-config.php');

define('SCRIPT_ID', 'import');
define('LOGFILE', LOGDIR.'/import.log');

require(LIBDIR.'/init.php');

setup_database_connection('jury');

$argv = $_SERVER['argv'];

$team    = strtolower(@$argv[1]);
$prob    = strtolower(@$argv[2]);
$langext = strtolower(@$argv[3]);
$submittime = strtolower(@$argv[4]);
$extid   = strtolower(@$argv[5]);
$extresult = strtolower(@$argv[6]);

$files = array();
$filenames = array();
for ($i=7; $i<count($argv); $i+=2) {
    $files[] = $argv[$i];
    if ($i+1>=count($argv)) {
        error("Non-matching number of tempfiles and filenames.");
    }
    $filenames[] = $argv[$i+1];
}

$cdata = getCurContest(true);
$cid = $cdata['cid'];

if (empty($submittime)) {
    error("No value for submit time.");
}
if (empty($extid)) {
    error("No value for external submission ID.");
}
if (empty($extresult)) {
    error("No value for external submission verdict.");
}

$duplicate = $DB->q('MAYBEVALUE SELECT externalid FROM submission
                     WHERE cid = %i AND externalid = %i', $cid, $extid);
if ($duplicate !== null) {
    $origtime = $DB->q('VALUE SELECT submittime FROM submission
                        WHERE cid = %i AND externalid = %i', $cid, $extid);
    if ($origtime !== $submittime) {
        error("duplicate submission ID with different submittime found");
    }
    // update judging result (in case of a rejudge)
    $DB->q('UPDATE submission SET externalresult = %s
            WHERE cid = %i AND externalid = %i', $extresult, $cid, $extid);
    exit;
}

submit_solution(
    $team,
    $prob,
    $cid,
    $langext,
    $files,
    $filenames,
                null,
    $extid,
    $submittime,
    $extresult
);

exit;
