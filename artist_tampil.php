<?php

$artis = new App\artist();
$rows = $artis->tampil();

?>

<h2>Rekomendasi Artist</h2>

<a href="index.php?page=artist_input">Tambah</a>
<table>

    <tr>
        <th>NAMA</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['artist_name']; ?></td>
            <td><a href="index.php?page=artist_update&id=<?php echo $row['artist_id']; ?>">Edit</a></td>
        </tr>
    <?php } ?>

</table>

