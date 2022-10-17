<?php

echo $data["title"];
?>

<table>
    <thead>
        <th>Id</th>
        <th>Naam</th>
        <th>Net Worth</th>
        <th>Leeftijd</th>
        <th>Land</th>
        <th>delete</th>
    </thead>
    <tbody>
        <?= $data['richestpeoples'] ?>
    </tbody>
</table>
<a href="<?= URLROOT; ?>/homepages/index">terug</a>