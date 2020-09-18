<?php

/* @var $this yii\web\View */

$this->title = 'Олеся';
?>
<div class="index-wrap">
    <div class="scroll-menu">
        <div id="ScrollMenu" class="scroll-menu-inner">
            <div data-id="1" class="scroll-menu-item" onclick="scrollToBlock(1)">
                <div>Main</div>
            </div>
            <div data-id="2" class="scroll-menu-path">
                <div class="scroll-menu-path-inner"></div>
            </div>
            <div data-id="2" class="scroll-menu-item" onclick="scrollToBlock(2)">
                <div>Social</div>
            </div>
            <div data-id="3" class="scroll-menu-path">
                <div class="scroll-menu-path-inner"></div>
            </div>
            <div data-id="3" class="scroll-menu-item" onclick="scrollToBlock(3)">
                <div>About</div>
            </div>
            <div data-id="4" class="scroll-menu-path">
                <div class="scroll-menu-path-inner"></div>
            </div>
            <div data-id="4" class="scroll-menu-item" onclick="scrollToBlock(4)">
                <div>School</div>
            </div>
            <div data-id="5" class="scroll-menu-path">
                <div class="scroll-menu-path-inner"></div>
            </div>
        </div>
    </div>
    <div class="menu-btn">=</div>

    <div id="First" class="block first">
        <div class="first-img"></div>
        <div class="first-info">
            <div class="first-info-block">
                <h1>Олеся Юдина</h1>
                <h2>Психолог</h2>
                <hr>
                <div class="first-icons">
                    <div class="first-icons-item">vk</div>
                    <div class="first-icons-item">in</div>
                    <div class="first-icons-item">dz</div>
                </div>
                <div class="first-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    At commodi ad minima.
                    Quasi tempore impedit vero? Corrupti reprehenderit vero eum, perferendis,
                    rerum adipisci labore sint tempora voluptatem temporibus at optio.
                </div>
            </div>
        </div>
    </div>
    <div id="Second" class="block second">
        <div class="block-inner">
            <h2>Title #2</h2>
        </div>
    </div>
    <div id="Third" class="block third">
        <div class="block-inner">
            <h2>Title #3</h2>
        </div>
    </div>
    <div id="Fourth" class="block fourth">
        <div class="block-inner">
            <h2>Title #4</h2>
        </div>
    </div>

</div>