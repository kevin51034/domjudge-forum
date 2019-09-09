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
$title = 'ReadTopic';

// This reads and sets a cookie, so must be called before headers are sent.
//$filter = initScorefilter();

require(LIBWWWDIR . '/header.php');
require(LIBWWWDIR . '/footer.php');

addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>

<div class ="forumdesc">
    <?php
       replylink($_GET['cid'], $_GET['scid'], $_GET['tid']);
    ?>
    
</div>


<?php
    echo "<a id='backtotopics' href='/team/topics.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>back</a>";
    disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);

    echo "<div class ='content'><p class ='topiccontent'>All Replies (".countReplies($_GET['cid'], $_GET['scid'], $_GET['tid']).")
        </p></div>";

    dispreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);

    replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);

    if (isset($_GET['delete'])) {
        deletetopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
      }
?>


