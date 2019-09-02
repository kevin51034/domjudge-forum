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

require(LIBWWWDIR . '/footer.php');


error_reporting(E_ALL);
?>

<!-- 
    <iframe id ='hkmd' width="100%" height="500" src="https://hackmd.io/new" frameborder="0"></iframe>
-->
<div class="content">
    <?php
        echo "<form action='/team/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
            method='POST'>
            <p>Title:</p>
            <input type='text' id='topic' name='topic' size='100'/>
            <p>Content:</p>
            <textarea id='content' name='content'></textarea><br/>
            <input type='submit' value='add new post'/></form>";
    ?>
</div>



