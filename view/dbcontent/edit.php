<?php

namespace Anax\View;

if (!$content) {
    return;
}

$tf = new \Rasb14\Util\TextFilter();

?>
<form method="post">
    <fieldset>
        <legend>Edit</legend>
        <input type="hidden" name="contentId" value="<?= $tf->esc($content->id) ?>"/>
        <p>
            <label>Title:<br> 
                <input type="text" name="contentTitle" value="<?= $tf->esc($content->title) ?>"/>
            </label>
        </p>
        <p>
            <label>Path:<br> 
            <input type="text" name="contentPath" value="<?= $tf->esc($content->path) ?>"/>
        </p>
        <p>
            <label>Slug:<br> 
            <input type="text" name="contentSlug" value="<?= $tf->esc($content->slug) ?>"/>
        </p>
        <p>
            <label>Text:<br> 
            <textarea name="contentData"><?= $tf->esc($content->data) ?></textarea>
        </p>
        <p>
            <label>Type:<br> 
            <input type="text" name="contentType" value="<?= $tf->esc($content->type) ?>"/>
        </p>
        <p>
            <label>Filter:<br> 
            <input type="text" name="contentFilter" value="<?= $tf->esc($content->filter) ?>"/>
        </p>
        <p>
            <label>Publish:<br> 
            <input type="datetime" name="contentPublish" value="<?= $tf->esc($content->published) ?>"/>
        </p>
        <p>
            <button type="submit" name="doSave"><i class="far fa-save" aria-hidden="true"></i> Save</button>
            <button type="reset"><i class="fa fa-undo" aria-hidden="true"></i> Reset</button>
        </p>
    </fieldset>
</form>
