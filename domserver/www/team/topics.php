<?php
/**
 * Scoreboard
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */

$pagename = basename($_SERVER['PHP_SELF']);

require('init.php');
//$refresh = array(
//    'after' => 30,
//    'url' => 'forum.php',
//);
$title = 'Topics';

// This reads and sets a cookie, so must be called before headers are sent.
$filter = initScorefilter();

require(LIBWWWDIR . '/header.php');

// call the general putScoreBoard function from scoreboad.php
//putScoreBoard($cdata, $teamid, false, $filter);

//putforum();
require(LIBWWWDIR . '/footer.php');

//$select = mysqli_query("SELECT * FROM categories");
//$select = $DB->q("SELECT cat_id FROM categories");



?>

<div class="content">
    <?php puttopics($_GET['cid'] , $_GET['scid']); ?>
</div>



