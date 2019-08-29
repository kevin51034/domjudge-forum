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



<iframe id ='hkmd' width="100%" height="500" src="https://hackmd.io/new" frameborder="0"></iframe>
    
<div class="content">
    <?php
        ///////////////
        //$html->find('input.form-control ui-share-field');
        /*$html = file_get_html('http://127.0.0.1:9090/team/newtopic.php?cid=1&scid=1');
        $dom = new DOMDocument;
        $dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $tags = $xpath->query('//*[@class="form-control ui-share-field"]');*/

        //$fhname = $dom->getElementsByClassName('form-control ui-share-field');
    //print $fhname->getAttribute('value');
        //$html->find('input[class=.form-control ui-share-field]'); 
        //echo "<p>'$tags'</p>";
            
        
            /*echo "<form action='/team/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
                method='POST'>
                <p>Title:</p>
                <input type='text' id='topic' name='topic' size='100'/>
                <p>Content:</p>
                <textarea id='content' name='content'></textarea><br/>
                <input type='submit' value='add new post'/></form>"; */

        $cid = $_GET['cid'];
        $scid = $_GET['scid'];
        //$tid = $_GET['tid'];

        echo "<p>'$cid'</p>";
        echo "<p>'$scid'</p>";
        //echo "<p>'$tid'</p>";


    ?>
</div>

<script type ="text/javascript">
    geturlfromhkmd();
</script>



