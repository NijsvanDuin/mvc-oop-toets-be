<?php require(APPROOT . '/views/includes/header.php') ?>
<table border=1>
    <thead>
        <tr>
            <th>Id</th>
            <th>Datum</th>
            <th>Naam Leerling</th>
            <th>opmerking</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data["rows"] == null) {
            echo "<tr><td colspan='4'>Geen opmerkingen gevonden</td></tr>";
        } else {
            echo $data["rows"];
        } ?>
    </tbody>
</table>
<?php require(APPROOT . '/views/includes/footer.php') ?>