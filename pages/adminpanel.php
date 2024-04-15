<?php
session_start();

require_once '../connection\conn.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE products SET name = :name, category = :category, description = :description WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':description', $description);
    $stmt->execute();

    header('Location: adminpanel.php');
}

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/main.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
        <h1>Detele Users</h1>
        <form action="../functions/delete_user.php" method="post">
            <div class="form-group">
                <label for="username_or_id">Username or ID:</label>
                <input type="text" name="username_or_id" id="username_or_id" required>
            </div>
            <div class="form-group">
                <button type="submit">Delete User</button>
            </div>
        </form>
        <form action="pages\adminpanel.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="category">Catogorie:</label>
                <select name="category" id="category" required>
                    <option value="pizza">Pizza</option>
                    <option value="pasta">Pasta</option>
                    <option value="kapsalon">Kapsalon</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Beschrijving:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Voeg product toe</button>
            </div>
        </form>

        <h2>Bestaande producten</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars($product['id']) ?></td>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td><?= htmlspecialchars($product['category']) ?></td>
                        <td><?= htmlspecialchars($product['description']) ?></td>
                        <td>
                            <form action="pages\adminpanel.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name"
                                        value="<?= htmlspecialchars($product['name']) ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Catogorie:</label>
                                    <select name="category" id="category" required>
                                        <option value="pizza" <?= $product['category'] == 'pizza' ? 'selected' : '' ?>>Pizza
                                        </option>
                                        <option value="pasta" <?= $product['category'] == 'pasta' ? 'selected' : '' ?>>Pasta
                                        </option>
                                        <option value="kapsalon" <?= $product['category'] == 'kapsalon' ? 'selected' : '' ?>>
                                            Kapsalon</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Beschrijving:</label>
                                    <textarea name="description" id="description"
                                        required><?= htmlspecialchars($product['description']) ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="update">Update</button>
                                </div>
                            </form>
                        </td>
                    </tr> <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>