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
$title = 'NewTopics';

// This reads and sets a cookie, so must be called before headers are sent.
$filter = initScorefilter();

require(LIBWWWDIR . '/header.php');

// call the general putScoreBoard function from scoreboad.php
//putScoreBoard($cdata, $teamid, false, $filter);

//putforum();
require(LIBWWWDIR . '/footer.php');

//$select = mysqli_query("SELECT * FROM categories");
//$select = $DB->q("SELECT cat_id FROM categories");


error_reporting(E_ALL);
?>
<?php

//add new topic
    //echo "<div class = 'content'><p><a href='/team/newtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>
        //add new topic</a></p></div>";
?>

<div class="content">
    <?php
    ///////////////
        echo "<form action='/team/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
            method='POST'>
            <p>Title:</p>
            <input type='text' id='topic' name='topic' size='100'/>
            <p>Content:</p>
            <textarea id='content' name='content'></textarea><br/>
            <input type='submit' value='add new post'/></form>";
    ?>
</div>



