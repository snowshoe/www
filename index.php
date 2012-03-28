<?php

$keys = array_keys($_GET);
$isIndex = sizeof($keys) === 0;
$page = "";

if ($isIndex) {
    // index
    include("_index.html");
} else {
    // some intern page
    $page = $keys[0];
    $badArg = preg_match("/[\/\.\\\]/", $page);
    if ($badArg || !file_exists("contents/$page.html")) {
        header("HTTP/1.0 404 Not Found");
        header("Status: 404 Not Found");
        $page = "404";
    }
    $contents = file_get_contents("contents/$page.html", false);
    include("header.php");
}

include("bottom.php");
if ($isIndex)
    echo "<h1 id=\"browser\">browser</h1>";
?>
</body>
</html>
