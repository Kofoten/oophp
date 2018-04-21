<?php

namespace Anax\View;

?>
<style>
    .gameRow {
        display: flex;
        flex-direction: row;
    }

    .gameBox {
        flex-grow: 1;
    }

    .mainBox {
        flex-grow: 9
    }

    .histogramList {
        padding: 0;
        list-style-type: none;
    }

    .low {
        margin-bottom: 0;
    }

    .dice-sprite {
        display: inline-block;
        padding: 0;
        margin: 0 4px 0 0;
        width: 32px;
        height: 32px;
        background: url(img/dice-faces.jpg) no-repeat;
    }

    .dice-sprite.dice-1 { background-position: -160px 0; }
    .dice-sprite.dice-2 { background-position: -128px 0; }
    .dice-sprite.dice-3 { background-position: -96px 0; }
    .dice-sprite.dice-4 { background-position: -64px 0; }
    .dice-sprite.dice-5 { background-position: -32px 0; }
    .dice-sprite.dice-6 { background-position: 0 0; }
</style>
<h1><?= $title ?></h1>
<div class="gameRow">
    <div class="mainBox">
        <p>Current unsaved points: <?= $unsaved ?></p>
        <p>
            <?php foreach ($graphic as $value) : ?>
                <i class="dice-sprite <?= $value ?>"></i>
            <?php endforeach; ?>
        </p>
        <form method="POST">
            <input type="submit" name="roll" value="Roll"/>
            <input type="submit" name="save" value="Save"/>
        </form>
    </div>
    <div class="gameBox">
        <?= $standings ?>
    </div>
</div>
<div>
    <h4 class="low">Histogram</h4>
    <?= $histogram ?>
</div>
