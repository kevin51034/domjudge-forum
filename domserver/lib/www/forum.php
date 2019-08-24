<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 1);
/**
 * Functions for calculating the scoreboard.
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */


/**
 * The calcScoreRow is in lib/lib.misc.php because it's used by other
 * parts of the system aswell.
 */
require_once(LIBDIR . '/lib.misc.php');

/**
 * Function to output a complete scoreboard.
 * This takes care of outputting the headings, start/endtimes and footer
 * of the scoreboard. It calls genScoreBoard to generate the data and
 * renderScoreBoardTable for displaying the actual table.
 *
 * Arguments:
 * $cdata       current contest data, as from an index in 'getCurContests(TRUE)'
 * $myteamid    set to highlight that teamid in the scoreboard
 * $static      generate a static scoreboard, e.g. for external use
 * $filter      set to TRUE to generate filter options, or pass array
 *              with keys 'affilid', 'country', 'categoryid' pointing
 *              to array of values to filter on these.
 * $sdata       if not NULL, use this as scoreboard data instead of fetching it locally
 */
function putforum(){

    global $DB, $pagename;
    //echo test;
    $res = $DB->q("SELECT * FROM categories");
    //echo $DB;
    //echo $res;
    while($row = $res->next()){
        //echo "<h1>".$row['category_title']."</h1>";
        echo "<table class='category-table'>";
        echo "<tr><td class='main-category' colspan='2'>".$row['category_title']."</td></tr>";
        putsubcategories($row['cat_id']);
        echo "</table>";
    }
    
    
    return;
}

function putsubcategories($parent_id){

    global $DB, $pagename;
    $res = $DB->q("SELECT cat_id , subcat_id , subcategory_title , subcategory_desc
                    FROM categories , subcategories
                    WHERE ($parent_id = categories.cat_id)
                    AND ($parent_id = subcategories.parent_id) ");

    echo "<tr><th width='90%'>Categories</th><th width='10%'>Topics</th></tr>";
    while($row = $res->next()){
        //cid scid is parameter
        //URL = /team/topics.php.... cuz the function is call from team dir
        echo "<tr><td class='category-title'><a href='/team/topics.php?cid=".$row['cat_id']."&scid=".$row['subcat_id']."'>
            ".$row['subcategory_title']."<br/>";
        echo $row['subcategory_desc']."</a></td>";
        echo "<td class='num-topics'>".getnumtopics($parent_id , $row['subcat_id'])."</td></tr>";
    }
    //echo "<h1>".$row['category_title']."</h1>";

}

function getnumtopics($cat_id , $subcat_id){
    global $DB, $pagename;
    $res = $DB->q("SELECT category_id , subcategory_id
                    FROM topics
                    WHERE ".$cat_id." = category_id 
                    AND ".$subcat_id." = subcategory_id");
    $rownum = $res->count();
    return $rownum;
    //return mysqli_num_rows($res);
}

function puttopics($cid , $scid){
    global $DB, $pagename;
    $res = $DB->q("SELECT topic_id , author , title , date_posted , views , replies
                    FROM categories , subcategories , topics
                    WHERE ($cid = topics.category_id)
                    AND ($scid = topics.subcategory_id)
                    AND ($cid = categories.cat_id)
                    AND ($scid = subcategories.subcat_id)
                    ORDER BY topic_id DESC");
    
    if($res->count() != 0){
        echo "<table class='topic-table'>";
        echo "<tr><th>Title</th><th>Posted By</th><th>Date</th><th>Views</th><th>Replies</th></tr>";
        
        while($row = $res->next()){
            echo "<tr><td><a href='/team/readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$row['topic_id']."'>
                ".$row['title']."</a></td><td>".$row['author']."</td><td>".$row['date_posted']."</td><td>".$row['views']."</td>
                <td>".$row['replies']."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "<p>This category has no topic yet! <a href='/team/newtopic.php?cid=".$cid."&scid=".$scid."'</a></p>";
    }
}

function addnewtopic($cid , $scid){
    global $DB, $pagename , $username;
    //session_start();
    $topic = addslashes($_POST['topic']);
    $content = nl2br(addslashes($_POST['content']));

    //******* views and replies need a default value to insert
    $insert = $DB->q("INSERT INTO `topics`(`category_id`, `subcategory_id`, `author`, 
    `title`, `content`, `date_posted` , `views` ,`replies`) 
    VALUES ('$cid','$scid','$username','$topic','$content',now() , 0,0)");

    //modify the condition
    if(1){
      header("Location: /team/topics.php?cid=".$cid."&scid=".$scid."");
    }
}

function disptopic ($cid, $scid, $tid){
    global $DB, $pagename , $username;

    $res = $DB->q("SELECT cat_id , subcat_id , topic_id , author , title , content , date_posted
                    FROM categories , subcategories , topics
                    WHERE($cid = categories.cat_id)
                    AND ($scid = subcategories.subcat_id)
                    AND ($tid = topics.topic_id)");
    
    $row = $res->next();
    echo nl2br("<div class='content'><h2 class='title'>".$row['title']."</h2>
                <p>".$row['author']."\n".$row['date_posted']."</p></div>");
    echo "<div class='content'><p>".$row['content']."</p></div>";
}

function addview($cid, $scid, $tid){
    global $DB, $pagename , $username;

    $update = $DB->q("UPDATE topics SET views = views+1
                      WHERE category_id = '$cid'
                      AND subcategory_id = '$scid'
                      AND topic_id = '$tid'");
}

function replylink($cid, $scid, $tid){
    echo "<p><a href='/team/replyto.php?cid=".$cid."&scid=".$scid."&tid=".$tid."'>Reply to this post</a></p>";
}

function replytopost($cid, $scid, $tid){
    echo "<div class='content'><form action='/team/addreply.php?cid=".$cid."&scid=".$scid."&tid=".$tid."' method='POST'>
          <p>Comment: </p>
          <textarea cols='80' rows='5' id='comment' name='comment'></textarea><br/>
          <input type='submit' value='add comment' />
          </form></div>";
}

function addreply($cid, $scid, $tid){
    global $DB, $pagename , $username;

    $comment = nl2br(addslashes($_POST['comment']));
    //$content = nl2br(addslashes($_POST['content']));

    echo "<p>$cid</p>";
    echo "<p>$scid</p>";
    echo "<p>$tid</p>";
    echo "<p>$username</p>";
    echo "<p>$comment</p>";
    
    $insert = $DB->q("INSERT INTO `replies` (`category_id`, `subcategory_id`, `topic_id`,
                      `author`, `comment`, `date_posted`)
                      VALUES ('$cid', '$scid', '$tid', '$username', '$comment', now())");

    //modify
    if(1){
        header("Location: /team/readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$tid."");
    }
}

function dispreplies($cid, $scid, $tid){
    global $DB, $pagename , $username;

    $res = $DB->q("SELECT replies.author, comment, replies.date_posted
                   FROM categories, subcategories, topics, replies
                   WHERE ($cid = replies.category_id)
                   AND ($scid = replies.subcategory_id)
                   AND ($tid = replies.topic_id)
                   AND ($cid = categories.cat_id)
                   AND ($scid = subcategories.subcat_id)
                   AND ($tid = topics.topic_id)
                   ORDER BY reply_id DESC");
    
    if($res){
        echo "<div class='content'><table class='reply-table'>";
        while($row = $res->next()){
            echo nl2br("<tr><th width='15%'>".$row['author']."</th><td>".$row['date_posted']."\n
                        ".$row['comment']."\n\n</td></tr>");
        }
        echo "</table></div>";
    }
}

function countReplies($cid, $scid, $tid){
    global $DB, $pagename , $username;

    $res = $DB->q("SELECT category_id, subcategory_id, topic_id
                   FROM replies
                   WHERE ($cid = category_id)
                   AND ($scid = subcategory_id)
                   AND ($tid = topic_id)");
    
    $rownum = $res->count();
    return $rownum;
}