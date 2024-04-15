<?php

require 'connection\conn.php';

$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];


$image = file_get_contents($_FILES['image']['tmp_name']);


$stmt = $conn->prepare("INSERT INTO products (name, category, description, image) VALUES (:name, :category, :description, :image)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':category', $category);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':image', $image, PDO::PARAM_LOB);
$stmt->execute();

echo 'Product added successfully!';



$conn = null;

?>