<?php

namespace Anax\View;

if (!$resultset) {
    return;
}

$tf = new \Rasb14\Util\TextFilter();

?>
<table>
    <tr class="first">
        <th>Rad</th>
        <th>Id</th>
        <th>Title</th>
        <th>Type</th>
        <th>Published</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Deleted</th>
        <th>Actions</th>
    </tr>
    <?php
    $id = -1;
    foreach ($resultset as $row) : $id++;
    ?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $row->id ?></td>
            <td><?= $tf->esc($row->title) ?></td>
            <td><?= $tf->esc($row->type) ?></td>
            <td><?= $tf->esc($row->published) ?></td>
            <td><?= $row->created ?></td>
            <td><?= $row->updated ?></td>
            <td><?= $row->deleted ?></td>
            <td>
                <a href="dbcontent/edit?id=<?= $row->id ?>"><i class="fas fa-edit"></i></a>
                <a href="dbcontent/delete?id=<?= $row->id ?>"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
