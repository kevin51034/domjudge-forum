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
$title = 'editTopics';

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
/*
global $DB, $pagename , $username;
    //echo "<div id='edittopic'>edit</div>";
    echo "<p>'$cid'</p>";
    echo "<p>'$scid'</p>";
    echo "<p>'$tid'</p>";
    $res = $DB->q("SELECT cat_id , subcat_id , topic_id , author , title , content , date_posted
                    FROM categories , subcategories , topics
                    WHERE($cid = categories.cat_id)
                    AND ($scid = subcategories.subcat_id)
                    AND ($tid = topics.topic_id)");
    
    $row = $res->next();
    echo "<form action='/team/edittopicpost.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."&tid=".$_GET['tid']."
            method='get'>
            <p>Title:</p>
            <input type='text' id='topic' name='topic' size='100' value='".$row['title']."'/>
            <p>Content:</p>
            <textarea id='content' name='content'>".$row['content']."</textarea><br/>
            <input type='submit' value='post' /></form>";*/
?>

<div class="content">
    <?php
    ///////////////
    /*
        echo "<form action='/team/edittopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
            method='POST'>
            <p>Title:</p>
            <input type='text' id='topic' name='topic' size='100'/>
            <p>Content:</p>
            <textarea id='content' name='content'></textarea><br/>
            <input type='submit' value='add new post'/></form>";
    */
        edittopic($_GET['cid'], $_GET['scid'], $_GET['tid']);

        /*if($_POST['topic'] || $_POST['content']){
            edittopicpost($_GET['cid'], $_GET['scid'], $_GET['tid']);
        }*/
    ?>
</div>




