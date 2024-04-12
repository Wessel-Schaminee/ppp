<?php
function get_products()
{

    $host = '127.0.0.1:3307';
    $user = 'root';
    $password = '';
    $dbname = 'pasta';

    $conn = mysqli_connect($host, $user, $password, $dbname);


    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }


    $sql = 'SELECT * FROM products';
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }


    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }


    mysqli_close($conn);


    return $products;
}
?>