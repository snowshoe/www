<?php
$index = $page === "" ? "Snowshoe" : '<a href="./">Snowshoe</a>';
$about = $page === "about" ? '<span class="itsme">About</span>' : '<a href="?about">About</a>';
?>
<div id="bottom">
    <div class="content">
        <a href="http://www.indt.org"><img id="logo_indt" src="img/logo_indt.png" alt="INdT" /></a>
        <img height="30" src="img/line.png" alt="" />
        <a href="http://www.qt-project.org"><img id="logo_qt" src="img/logo_qt.png" alt="Qt Project" title="Qt Project" /></a>
        <div>
            <h2>Contact</h2>
            <ul>
                <li><span class="beloponto">.</span><a href="http://groups.google.com/group/snowshoe-dev">Mailing list</a></li>
                <li><span class="beloponto">.</span>#snowshoe at freenode</li>
            </ul>
        </div>
        <div>
            <h2>Code</h2>
            <ul>
                <li><span class="beloponto">.</span><a href="https://github.com/snowshoe/snowshoe">Git</a></li>
                <li><span class="beloponto">.</span><a href="https://github.com/snowshoe/snowshoe/tarball/master">Latest tarball</a></li>
            </ul>
        </div>
        <div class="lastcol">
            <h2><?php echo $index; ?></h2>
            <ul>
                <li><span class="beloponto">.</span><?php echo $about; ?></li>
                <li><span class="beloponto">.</span><a href="https://github.com/snowshoe/snowshoe/wiki">Wiki</a></li>
            </ul>
        </div>
    </div>
</div>
