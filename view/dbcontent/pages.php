<?php

namespace ANax\View;

if (!$resultset) {
    return;
}

$tf = new \Rasb14\Util\TextFilter();

?>
<table>
    <tr class="first">
        <th>Id</th>
        <th>Title</th>
        <th>Type</th>
        <th>Status</th>
        <th>Published</th>
        <th>Deleted</th>
    </tr>
    <?php
    $id = -1;
    foreach ($resultset as $row) : $id++;
    ?>
        <tr>
            <td><?= $row->id ?></td>
            <td><a href="?route=<?= $tf->esc($row->path) ?>"><?= $tf->esc($row->title) ?></a></td>
            <td><?= $tf->esc($row->type) ?></td>
            <td><?= $tf->esc($row->status) ?></td>
            <td><?= $tf->esc($row->published) ?></td>
            <td><?= $tf->esc($row->deleted) ?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
