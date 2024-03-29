<?php
/**
 * Generated from 'configure.php.in' on Mon Dec 17 19:19:07 UTC 2018.
 *
 * This script reads the configuration from its configured path.
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */

require_once('/opt/domjudge/domserver/etc/domserver-static.php');

global $VERDICTS;

require_once(ETCDIR . '/domserver-config.php');

// Things that we use as globals
global $act;		// www/jury/impexp_tsv.php
global $affilids;		// www/jury/balloons.php
global $affillogo;		// www/jury/team_affiliation.php, www/jury/team.php
global $affils;		// www/feed/ext.php, www/jury/balloons.php
global $allowed;		// www/jury/init.php
global $amap;		// www/jury/team.php
global $api;		// www/api/v?/index.php
global $API_endpoints;		// lib/lib.misc.php
global $BALLOONS;		// www/jury/balloons.php
global $bar_size;		// www/jury/statistics.php
global $body;		// lib/www/clarification.php
global $categs;		// www/feed/ext.php
global $cdata;		// www/team/init.php, www/jury/init.php, www/public/init.php
global $cdatas;		// www/feed/init.php, www/jury/init.php, www/public/init.php, www/team/init.php
global $CHECKER_ERRORS;
global $cids;		// www/feed/init.php, www/jury/init.php, www/jury/judgehost.php,  www/jury/rejudge.php, www/public/init.php, www/team/init.php
global $cid;		// www/jury/team_output.php
global $clarifications;		// www/jury/clarifications.php, www/team/index.php
global $clars;		// www/feed/ext.php
global $clen;		// www/jury/judgehosts.php
global $cmap;		// www/jury/team.php
global $cmd;		// www/jury/edit.php
global $cnt;		// www/jury/ignore.php, www/jury/verify.php
global $comment;		// www/jury/verify.php
global $compile_penalty;		// www/feed/ext.php
global $contestids;		// www/jury/balloons.php, www/jury/clarifications.php
global $contests;		// www/jury/ajax_contests.php, www/jury/impexp_contestyaml.php, www/jury/judgehost_restriction.php, www/jury/refresh_cache.php, www/jury/submissions.php,
global $contest;		// www/jury/impexp_baylor.php
global $countryflag;		// www/jury/team_affiliation.php, www/jury/team.php
global $curcids;		// www/jury/contests.php
global $current_cid;		// www/jury/problem.php, www/jury/team.php
global $currentEndpoint;		// lib/judge/judgedaemon.main.php
global $current_problems;		// www/jury/contest.php
global $data;		// www/jury/contest.php, www/jury/edit.php, www/jury/executable.php, www/jury/judgehost.php, www/jury/judgehost_restriction.php, www/jury/language.php, www/jury/problem.php, www/jury/team_affiliation.php, www/jury/team_category.php, www/jury/testcase.php
global $DB;
global $DEBUG_NUM_QUERIES;		// lib/lib.timer.php
global $DEBUG_TIMER_START;		// lib/lib.timer.php
global $desc;		// www/jury/delete.php
global $details;		// www/jury/checkconfig.php
global $detail;		// www/jury/checkconfig.php
global $disabled;		// www/jury/internal_error.php
global $done;		// www/jury/rejudging.php
global $earlier;		// www/jury/check_judgings.php
global $edata;		// www/jury/internal_error.php
global $edit_mode;		// www/jury/show_executable.php
global $endpointIDs;		// lib/judge/judgedaemon.main.php
global $endpoints;		// lib/judge/judgedaemon.main.php
global $end;		// www/jury/statistics.php
global $events;		// www/feed/ext.php
global $execmap;		// www/jury/language.php, www/jury/problem.php
global $executable_types;		// www/jury/init.php
global $executable;		// www/jury/show_executable.php
global $extid_to_name;		// www/jury/impexp_tsv.php
global $extrahead;		// www/jury/statistics.php
global $extra;		// www/jury/config.php
global $fdata;		// www/team/index.php, www/team/print.php, www/team/upload.php
global $filename;		// www/jury/export_problem.php, www/jury/team_output.php
global $FILEPATHS;		// www/team/upload.php
global $FILES;		// www/jury/testcase.php
global $filteron;		// www/jury/balloons.php
global $filters;		// www/jury/submissions.php
global $filtertext;		// www/jury/balloons.php
global $filter;		// www/jury/balloons.php, www/jury/scoreboard.php, www/public/index.php, www/team/scoreboard.php
global $fmt;		// www/jury/impexp_tsv.php
global $freezecond;		// www/jury/balloons.php
global $freezelengthString;		// www/feed/ext.php
global $from;		// www/jury/judgehosts.php
global $full_rejudge;		// www/jury/rejudge.php
global $has_errors;		// www/jury/checkconfig.php
global $HTML_colors;		// lib/lib.misc.php
global $html;		// www/jury/show_executable.php, www/jury/show_source.php
global $human_abs_datetime;		// lib/www/checkers.jury.php
global $human_rel_datetime;		// lib/www/checkers.jury.php
global $i;		// www/jury/user.php
global $id_cnt;		// www/feed/ext.php
global $id;		// www/jury/clarification.php, www/jury/contest.php, www/jury/edit_source.php, www/jury/executable.php, www/jury/export_problem.php, www/jury/ignore.php, www/jury/internal_error.php, www/jury/judgehost.php, www/jury/judgehost_restriction.php, www/jury/language.php, www/jury/problem.php, www/jury/rejudge.php, www/jury/rejudging.php, www/jury/show_executable.php, www/jury/show_source.php, www/jury/submission.php, www/jury/team_affiliation.php, www/jury/team_category.php, www/jury/team.php, www/jury/user.php, www/jury/verify.php, www/public/problem.php, www/public/team.php, www/team/clarification.php, www/team/problem.php, www/team/submission_details.php, www/team/team.php
global $include_all;		// www/jury/rejudge.php
global $info;		// www/feed/ext.php
global $ini_keys;		// www/jury/export_problem.php
global $inistring;		// www/jury/export_problem.php
global $INOROUT;		// www/jury/testcase.php
global $ip;		// lib/www/auth.php
global $isstatic;		// www/public/index.php
global $jdata;		// www/jury/submission.php
global $jdata;		// www/jury/verify.php
global $jqtokeninput;		// www/jury/contest.php, www/jury/judgehost_restriction.php, www/jury/submissions.php, www/jury/team.php
global $jscolor;		// www/jury/contest.php, www/jury/team_category.php
global $json;		// www/jury/impexp_baylor.php
global $judgehosts;		// www/jury/checkconfig.php, www/jury/judgehost_restriction.php
global $judgehost_without_restrictions;		// www/jury/checkconfig.php
global $judging_ended;		// www/jury/submission.php
global $jud;		// www/jury/submission.php
global $jury_member;		// www/jury/clarification.php, www/jury/clarifications.php, www/jury/submission.php, www/jury/submissions.php, www/jury/verify.php
global $keydata;		// www/jury/edit.php
global $KEYS;		// lib/relations.php
global $kind;		// www/jury/internal_error.php
global $k;		// www/jury/delete.php
global $LIBDBCONFIG;    // www/jury/config.php
global $langdata;		// www/team/index.php
global $langid;		// www/team/upload.php
global $langs;		// www/feed/ext.php, www/jury/edit_source.php
global $languages;		// www/jury/ajax_languages.php, www/jury/checkconfig.php, www/jury/judgehost_restriction.php
global $lang;		// www/team/upload.php
global $lastjud;		// www/jury/submission.php
global $lastrequest;		// lib/judge/judgedaemon.main.php
global $lastsection;		// www/jury/checkconfig.php
global $lengthString;		// www/feed/ext.php
global $length;		// www/feed/ext.php, www/jury/statistics.php
global $lists;		// www/jury/judgehost_restriction.php
global $listteams;		// www/jury/team_affiliation.php, www/jury/team_category.php
global $loader;		// www/jury/init.php
global $loglevel;		// lib/lib.error.php
global $max_file_check;		// www/jury/checkconfig.php
global $menu;		// www/public/index.php, www/public/team.php
global $multiple;		// www/jury/check_judgings.php
global $mycid;		// www/jury/removed_intervals.php
global $myhost;		// lib/judge/judgedaemon.main.php
global $mysqldatares;		// www/jury/checkconfig.php
global $mysqldata;		// www/jury/checkconfig.php
global $nchecked;		// www/jury/check_judgings.php
global $new_affils;		// www/jury/impexp_baylor.php
global $newrequests;		// www/jury/clarifications.php
global $new_teams;		// www/jury/impexp_baylor.php
global $new_verdicts;		// www/jury/rejudging.php
global $next;		// www/auth/oid_cb.php
global $nomatch;		// www/jury/check_judgings.php
global $notify_flag;		// www/jury/menu.php
global $now;		// www/jury/contests.php, www/jury/judgehosts.php
global $num_contests;		// www/jury/team.php
global $numprobs;		// www/jury/contest.php, www/jury/contests.php
global $nunchecked;		// www/jury/check_judgings.php
global $oldrequests;		// www/jury/clarifications.php
global $options;		// lib/judge/judgedaemon.main.php
global $orig_verdicts;		// www/jury/rejudging.php
global $output;		// lib/judge/judgedaemon.main.php
global $oversize;		// www/jury/checkconfig.php
global $pagename;		// www/jury/init.php, www/public/init.php, www/team/init.php, www/team/scoreboard.php
global $partCat;		// www/jury/statistics.php
global $participants;		// www/jury/impexp_baylor.php
global $pattern_dateorneg;		// lib/www/checkers.jury.php
global $pattern_dateorpos;		// lib/www/checkers.jury.php
global $pattern_datetime;		// lib/www/checkers.jury.php
global $pattern_offset;		// lib/www/checkers.jury.php
global $pattern_timezone;		// lib/www/checkers.jury.php
global $postmaxvars;		// www/jury/checkconfig.php
global $precision;		// lib/init.php
global $prepopulate;		// www/jury/contest.php, www/jury/judgehost_restriction.php
global $printercss;		// www/jury/scoreboard.php
global $private_contests;		// www/jury/team.php
global $probid;		// www/jury/testcase.php, www/team/upload.php
global $problem_name_mapping;		// www/jury/contest.php
global $problem_result_matchstrings;		// lib/lib.misc.php
global $problem_result_remap;		// lib/lib.misc.php
global $problems;		// www/jury/judgehost_restriction.php, www/jury/statistics.php
global $problem;		// www/jury/export_problem.php
global $probs;		// www/feed/ext.php, www/jury/checkconfig.php, www/jury/edit_source.php
global $prob;		// www/jury/testcase.php, www/team/upload.php
global $probyaml;		// www/jury/export_problem.php
global $query;		// www/jury/judgehosts.php
global $reason;		// www/jury/rejudge.php
global $referer;		// www/team/change_contest.php
global $referrer;		// www/jury/delete.php, www/jury/edit.php
global $refresh_cookie;		// lib/www/header.php
global $refresh_flag;		// www/jury/menu.php
global $refreshtime;		// www/team/index.php
global $refresh;		// www/jury/balloons.php, www/jury/internal_error.php, www/jury/internal_errors.php, www/jury/rejudging.php, www/jury/rejudgings.php, www/jury/scoreboard.php, www/jury/submissions.php, www/team/scoreboard.php
global $rejdata;		// www/jury/rejudging.php
global $RELATIONS;		// lib/relations.php
global $reltime;		// www/jury/judgehost.php
global $requests;		// www/team/index.php
global $REQUIRED_ROLES;		// www/jury/balloons.php, www/jury/change_contest.php, www/jury/index.php
global $reset;		// www/feed/ext.php
global $response;		// www/jury/impexp_baylor.php
global $restrictions;		// www/jury/judgehost_restriction.php, www/jury/language.php, www/jury/problem.php, www/jury/rejudging.php, www/jury/submissions.php, www/jury/team.php, www/team/index.php
global $resturl;		// lib/judge/judgedaemon.main.php
global $RESULTS;		// www/jury/checkconfig.php
global $resulttext;		// www/jury/checkconfig.php
global $resultno;		// www/jury/checkconfig.php
global $result;		// www/jury/testcase.php
global $res;		// www/jury/auditlog.php, www/jury/balloons.php, www/jury/checkconfig.php, www/jury/check_judgings.php, www/jury/contest.php, www/jury/contests.php, www/jury/executables.php, www/jury/export_problem.php, www/jury/internal_errors.php, www/jury/judgehost_restrictions.php, www/jury/judgehosts.php, www/jury/languages.php, www/jury/problems.php, www/jury/rejudge.php, www/jury/rejudgings.php, www/jury/statistics.php, www/jury/team_affiliations.php, www/jury/team_categories.php
global $roles;		// www/jury/user.php
global $rooms;		// www/jury/balloons.php
global $root;		// www/feed/ext.php
global $row;		// www/jury/team_output.php, www/jury/team.php, www/jury/user.php, www/team/submission_details.php
global $runid;		// www/jury/team_output.php
global $runs;		// www/jury/submission.php
global $runuser;		// lib/judge/judgedaemon.main.php
global $sdata;		// www/jury/ignore.php
global $section;		// www/jury/check_judgings.php
global $show_compile;		// www/team/submission_details.php
global $show_sample;		// www/team/submission_details.php
global $sid;		// www/team/upload.php
global $sizes;		// www/jury/checkconfig.php
global $skippedBinary;		// www/jury/show_executable.php
global $skipwhenempty;		// www/jury/edit.php
global $solutions;		// www/jury/export_problem.php
global $sources;		// www/jury/edit_source.php, www/jury/show_source.php
global $sqlbody;		// www/jury/clarifications.php
global $started;		// www/feed/ext.php
global $start;		// www/jury/auditlog.php, www/jury/statistics.php
global $state;		// www/jury/submission.php
global $status;		// www/jury/impexp_baylor.php, www/jury/judgehost.php
global $submdata;		// www/jury/submission.php
global $submissions_filter;		// www/jury/submissions.php
global $submission;		// www/jury/edit_source.php, www/jury/show_source.php
global $submitted;		// www/team/index.php
global $submnote;		// www/jury/checkconfig.php
global $submres;		// www/jury/checkconfig.php
global $tablemap;		// www/jury/rejudge.php
global $table;		// www/jury/rejudge.php, www/jury/rejudging.php
global $target;		// www/index.php
global $tclist;		// www/jury/submission.php
global $teamdata;		// lib/www/auth.php
global $teamid;		// lib/www/auth.php
global $teamimage;		// www/jury/team.php
global $teamrole;		// www/jury/impexp_baylor.php
global $teams;		// www/feed/ext.php, www/jury/ajax_teams.php, www/jury/contest.php, www/jury/team_affiliation.php, www/jury/team_category.php, www/jury/teams.php
global $testcases;		// www/jury/export_problem.php
global $time_end;		// www/jury/checkconfig.php, www/jury/refresh_cache.php
global $time_start;		// www/jury/checkconfig.php, www/jury/refresh_cache.php
global $times;		// www/jury/contests.php
global $timezone_php;		// www/jury/checkconfig.php
global $timezone_sys;		// www/jury/checkconfig.php
global $title;		// www/jury/auditlog.php, www/jury/balloons.php, www/jury/checkconfig.php, www/jury/check_judgings.php, www/jury/clarification.php, www/jury/clarifications.php, www/jury/config.php, www/jury/contest.php, www/jury/contests.php, www/jury/delete.php, www/jury/edit_source.php, www/jury/executable.php, www/jury/executables.php, www/jury/genpasswds.php, www/jury/impexp_contestyaml.php, www/jury/impexp.php, www/jury/impexp_tsv.php, www/jury/index.php, www/jury/internal_error.php, www/jury/internal_errors.php, www/jury/judgehost_restriction.php, www/jury/judgehost_restrictions.php, www/jury/judgehosts.php, www/jury/language.php, www/jury/languages.php, www/jury/print.php, www/jury/problem.php, www/jury/problems.php, www/jury/refresh_cache.php, www/jury/rejudging.php, www/jury/rejudgings.php, www/jury/scoreboard.php, www/jury/show_executable.php, www/jury/show_source.php, www/jury/statistics.php, www/jury/submission.php, www/jury/submissions.php, www/jury/team_affiliation.php, www/jury/team_affiliations.php, www/jury/team_categories.php, www/jury/team_category.php, www/jury/team.php, www/jury/teams.php, www/jury/testcase.php, www/jury/user.php, www/jury/users.php, www/public/problems.php, www/public/team.php, www/team/clarification.php, www/team/index.php, www/team/print.php, www/team/problems.php, www/team/scoreboard.php, www/team/submission_details.php, www/team/team.php, www/team/upload.php
global $tmap;		// www/jury/user.php
global $todo;		// www/jury/rejudging.php
global $token;		// www/jury/impexp_baylor.php
global $twig_safe;		// www/jury/init.php, www/jury/judgehost.php
global $twig;		// www/jury/init.php
global $t;		// www/jury/delete.php, www/jury/edit.php
global $types;		// www/jury/judgehost_restriction.php
global $unexpected;		// www/jury/check_judgings.php
global $unset;		// www/jury/edit.php
global $updated_teams;		// www/jury/impexp_baylor.php
global $updates;		// www/jury/init.php, www/team/init.php
global $used;		// www/jury/executable.php, www/jury/rejudging.php
global $userdata;		// lib/www/auth.php, www/jury/rejudging.php
global $userimage;		// www/jury/user.php
global $username;		// lib/www/auth.php
global $users;		// www/jury/team.php, www/jury/users.php
global $val;		// www/jury/ignore.php, www/jury/verify.php
global $verbose;		// lib/judge/judgedaemon.main.php, lib/lib.error.php
global $verdicts;		// www/jury/rejudging.php
global $verified;		// www/jury/check_judgings.php
global $verifier;		// www/jury/check_judgings.php
global $verify_multiple;		// www/jury/check_judgings.php
global $viewall;		// www/jury/balloons.php
global $viewtypes;		// www/jury/rejudging.php, www/jury/submissions.php
global $view;		// www/jury/rejudging.php, www/jury/submissions.php
global $waittime;		// lib/judge/judgedaemon.main.php
global $warnings;		// www/jury/delete.php
global $work10min;		// www/jury/judgehosts.php
global $work2min;		// www/jury/judgehosts.php
global $workcontest;		// www/jury/judgehosts.php
global $xmldoc;		// www/feed/ext.php
global $yamlstring;		// www/jury/export_problem.php
global $zip;		// www/jury/export_problem.php, www/jury/show_executable.php
