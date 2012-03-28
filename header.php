<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Snowshoe - About</title>
    <base href="/" />
    <script src="jquery.min.js"></script>
    <script src="slides.min.jquery.js"></script>
    <link href="intern.css" rel="stylesheet" type="text/css" />

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
</style>
</head>
<body>
<div id="main">
    <div id="top">
        <div class="content">
            <div id="slides">
                <div class="slides_container">
                    <div><a href="./"><img src="img/interna_text_01.png" /></a></div>
                    <div><a href="./"><img src="img/interna_text_02.png" /></a></div>
                    <div><a href="./"><img src="img/interna_text_03.png" /></a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="middle">
        <div class="content">
<!-- Contents -->
<?php echo $contents; ?>
<!-- End of contents -->
        </div>
    </div>
</div>
