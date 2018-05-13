<?php

namespace Anax\View;

if (!$resultset) {
    return;
}

$tf = new \Rasb14\Util\TextFilter();

?>
<article>
    <?php
    foreach ($resultset as $content) :
        $filters = explode(",", $content->filter);
        $page = $tf->parse($tf->esc($content->data), $filters);
    ?>
        <section>
            <header>
                <a href="?route=<?= $content->slug ?>"><h1><?= $tf->esc($content->title) ?></h1></a>
                <p><i>Published: <time datetime="<?= $tf->esc($content->updated) ?>" pubdate><?= $tf->esc($content->published) ?></time></i></p>
            </header>
            <?= $page ?>
        </section>
    <?php
    endforeach;
    ?>
</article>
