<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="/update/<?= $user['id']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($user['name']); ?>" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']); ?>" required>
        <br><br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>
