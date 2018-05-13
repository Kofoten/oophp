<?php

namespace Anax\View;

$imgPrefix = $_SERVER["SERVER_NAME"] == "www.student.bth.se" ? "/~rasb14/dbwebb-kurser/oophp/me/redovisa/htdocs/image/" : "/image/";

if (!$resultset) {
    return;
}

$id = -1;
?>
<table>
    <tr>
        <th>Rad</th>
        <th>Id</th>
        <th>Bild</th>
        <th>Titel</th>
        <th>År</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($resultset as $row) :$id++ ?>
    <tr>
        <td><?= $id ?></td>
        <td><?= $row->id ?></td>
        <td><img src="<?= $imgPrefix . $row->image ?>?w=200" alt="<?= $row->image ?>"></td>
        <td><?= $row->title ?></td>
        <td><?= $row->year ?></td>
        <td><a href="movie/edit?id=<?= $row->id ?>"><i class="fas fa-edit"></i></a></td>
        <td><a href="movie/delete?id=<?= $row->id ?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach; ?>
</table>
