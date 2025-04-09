<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit User</h2>
    <form action="../controller/UserController.php?action=update" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <div class="mb-3">
            <label>Lastname:</label>
            <input type="text" name="lastname" class="form-control" value="<?= $_GET['lastname'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Firstname:</label>
            <input type="text" name="firstname" class="form-control" value="<?= $_GET['firstname'] ?>" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>