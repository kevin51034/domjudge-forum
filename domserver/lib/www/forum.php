<?php

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