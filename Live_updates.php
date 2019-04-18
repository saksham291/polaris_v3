<!-- <b>This page is not auto refresh enabled. Keep refreshing this page manually.</b>
<br><br> -->
<?php 
$text = file_get_contents('https://docs.google.com/document/u/1/d/1RvDB_aho5oKb1-YuE_0JbTd_ApOmyXkLohNYjDJIyJQ/export?format=txt');

$lines=explode("\r\n",$text);
foreach ($lines as $one_line) {
    echo "<li>$one_line</li>";
    // @sharad ^^^nthis is the line you need to edit
}
?>