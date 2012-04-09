<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Snowshoe</title>
    <meta content="width=480" name="viewport" />
    <link rel="icon" href="img/favicon.gif" />
    <script src="jquery.min.js"></script>
    <script src="slides.min.jquery.js"></script>
    <link href="mob_styles.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        $(function(){
            $('#slides').slides({
                preload: true,
                generateNextPrev: false,
                effect: "fade",
                paginationClass: "pagination",
                play: 8000
            });
        });
    </script>
<?php include("analytics.php"); ?>
</head>
<body>
    <div id="top">
        <div class="content">
            <div id="slides">
                <div class="slides_container">
                    <div id="highlight01"></div>
                    <div id="highlight02"></div>
                    <div id="highlight03"></div>
                </div>
            </div>
        </div>
    </div>
