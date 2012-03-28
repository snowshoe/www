<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Snowshoe</title>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="slides.min.jquery.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />

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
            <h1 id="welcome">Welcome<br/><span style="white-space: nowrap">to <strong>SnowShoe</strong></span></h1>
            <div class="slides_container">
                <div id="screen1">
                    <h1>The first<br/>Q<span style="text-transform: none">t</span>5</h1>
                    <p>The power of QML declarative language. <strong>INdT</strong> was able to quickly take
                    advantage of all <strong>Qt5</strong> and <strong>WebKit2</strong> awesome features.</p>
                </div>
                <div id="screen2">
                    <h1>A truly<br/>open source</h1>
                    <p>Everybody together. Snowshoe is developed in the open, contributions
                    are always welcome.<br/>
                    <a href="https://github.com/snowshoe/snowshoe/wiki">Join us!</a></p>
                </div>
                <div id="screen3">
                    <h1>Mobile<br/>&amp; Desktop</h1>
                    <p><strong>Chameleon</strong>. Snowshoe mobile and desktop UI share the <strong>same code base</strong>.
                    New features, code updates, everything shared between all versions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
