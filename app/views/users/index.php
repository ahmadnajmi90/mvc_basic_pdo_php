

<h1>Users</h1>
<a href="/create">Add User</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['name']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
            <a href="/edit/<?= $user['id']; ?>">Edit</a>
            <form action="/delete/<?= $user['id']; ?>" method="POST" style="display:inline;">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
