<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .active {
        color: red;
    }
</style>

<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
            <td></td>
        </tr>
        <?php foreach ($contactList as $index => $data) { ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['phone'] ?></td>
                <td> <a href="/delete_contact.php?contact=<?= $data['id'] ?>">Remove</a> </td>
            </tr>
        <?php } ?>
    </table>
    <ul>
        <?php for ($page = 1; $page <= $numPages; $page++) { ?>
            <li>
                <a <?= $page === $activePage ? 'class="active"' : ''  ?> href="/admin/index.php?page=<?= $page ?>"> <?= $page ?> </a>
            </li>
        <?php }  ?>
    </ul>

</body>

</html>