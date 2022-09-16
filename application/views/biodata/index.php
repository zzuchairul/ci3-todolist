<h2>Biodata Saya</h2>

<?php foreach ($biodata as $d) { ?>

    <?= "Nama: " . $d->nama ?>
    <br>
    <?= "Templat lahir: " . $d->tpt_lahir ?>
    <br>
    <?= "Tanggal lahir: " . date_format(date_create($d->tgl_lahir), "Y/m/d"); ?>
    <br>
    <?= "Motto: " . $d->motto ?>
    <br><br>

<?php } ?>
<a href="/todolist/home">Homepage</a>