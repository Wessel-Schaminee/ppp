<div class="product-container">
    <?php foreach ($products as $product): ?>
        <div class="product-block" data-label="<?php echo $product['category']; ?>">
            <div class="product-image"
                style="background-image: url('<?php echo 'data:image/jpeg;base64,' . base64_encode($product['image']); ?>');">

            </div>
            <div class="product-details">
                <p class="product-name">
                    <?php echo $product['name']; ?>
                </p>
                <p class="product-description">
                    <?php echo $product['description']; ?>
                </p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="add-to-cart-button">Bestel Product</button>
            </div>

        </div>
    <?php endforeach; ?>