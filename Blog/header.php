<?php /* Main header file containing scripts, stylesheets, and config. */ ?>

<?php /* Important things; don't remove or change. */ ?>
<meta coding="utf-8">
<link rel="stylesheet" href="themes/global.css">
<script src="blogload.js" type="text/javascript"></script>
<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="marked/marked.min.js" type="text/javascript"></script>

<?php /* About you */ ?>
<meta name="author"      content="The OpenSprites Team">
<meta name="description" content="A group of pigeons working on OpenSprites.">
<meta name="keywords"    content="OS, OpenSprites, OpenSpites Team, OS Team, Blog">
<?php

    $AUTHOR_NAME    = "The OpenSprites Team";
    $AUTHOR_LINK    = "//opensprites.gwiddle.co.uk";
    $SITE_KEYWORDS  = "OS, OpenSprites, OpenSpites Team, OS Team, Blog";

?>

<?php /* Style option. */
echo '<link rel="stylesheet" href="themes/oslight/global.css">'

/*
Themes:
    beigedark
    beigelight
    blue
    osdark
    oslight
    red
*/
?>

<?php /* Side bar option. Pick one, leave the rest commented. */
echo '<link rel="stylesheet" href="themes/sidebarasnavbar.css">'
/*
Sidebars:
    asnavbar
    left
    right

If using the OpenSprites theme be sure to use asnavbar!
*/
?>