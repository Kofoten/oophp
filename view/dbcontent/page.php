<?php

namespace Anax\View;

if (!$content) {
    return;
}

$tf = new \Rasb14\Util\TextFilter();

$filters = explode(",", $content->filter);
$page = $tf->parse($tf->esc($content->data), $filters);

?>
<article>
    <header>
        <h1><?= $tf->esc($content->title) ?></h1>
        <p><i>Latest update: <time datetime="<?= $tf->esc($content->updated) ?>" pubdate><?= $tf->esc($content->published) ?></time></i></p>
    </header>
    <?= $page ?>
</article>
