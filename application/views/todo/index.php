<!-- Mencari data -->
<form action="/todolist/Todo" method="post">
    <?php
    $searchVal = $_POST["searchList"] ?? "";
    ?>
    <input type="text" placeholder="search..." name="searchList" value=<?= $searchVal ?>>
    <button> Search </button>
</form>
<br>

<!-- Menginput data sebagai data baru -->
<form action="/todolist/Todo" method="post">
    <input type="text" placeholder="What Todo" name="list">
    <input type="submit" value="Add">
</form>

<!-- Menampilkan Data -->
<ul>
    <?php
    foreach ($todo as $elem) {
    ?>
        <li>
            <?= $elem->list; ?>
        </li>
        <!-- untuk mengupdate data -->
        <form action="/todolist/Todo/change" method="post">
            <input type="hidden" name="id" value=<?= $elem->id; ?> />
            <input type="hidden" name="list" value=<?= $elem->list; ?> />
            <button name="changeList" value="true"> Change </button>
        </form>

        <!-- untuk menghapus data -->
        <form action=" /todolist/Todo" method="post">
            <input type="hidden" name="id" value=<?= $elem->id; ?> />
            <button name="delList" value="true"> Delete </button>
        </form>

        <br>
    <?php
    }
    ?>
</ul>

<!-- Kembali ke Homepage -->
<a href="/todolist/home"> Homepage </a>