<!-- Mengupdate data dengan mengisi data baru -->
<form action="/todolist/Todo" method="post">
    <input type="hidden" name="id" value=<?= $_POST["id"]; ?> />
    <input type="text" name="changeList" placeholder="Change TodoList" value=<?= $_POST["list"]; ?>>
    <input type="submit" value="Change">
</form>