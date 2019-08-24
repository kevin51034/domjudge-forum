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
$title = 'replyto';

// This reads and sets a cookie, so must be called before headers are sent.
//$filter = initScorefilter();

require(LIBWWWDIR . '/header.php');
require(LIBWWWDIR . '/footer.php');

addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>

<div class ="forumdesc">
    <?php
       
    ?>
</div>
<?php
    replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>

<div class="content">
    <?php
        disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
    ?>
</div>


