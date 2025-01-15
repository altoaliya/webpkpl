<?php
// Data produk yang sudah Anda berikan
$products = [
    ["name" => "Micellar Water", "price" => "$50.00", "image" => "images/p/mw.png"],
    ["name" => "Moisturizer", "price" => "$50.00", "image" => "images/p/mo.png"],
    ["name" => "Scrub Exfoliate", "price" => "$78.00", "image" => "images/p/se.png"],
    ["name" => "Oil Cleanser", "price" => "$43.00", "image" => "images/p/oc.png"],
    ["name" => "Toner", "price" => "$50.00", "image" => "images/p/to.png"],
    ["name" => "Serum", "price" => "$50.00", "image" => "images/p/s.png"],
    ["name" => "Paket Acne Fight EasyCare", "price" => "$78.00", "image" => "images/1.png"],
    ["name" => "Paket Brightening EasyCare", "price" => "$43.00", "image" => "images/homee.png"],
    ["name" => "Eye Cream", "price" => "$50.00", "image" => "images/p/ec.png"],
    ["name" => "Sheet Mask", "price" => "$50.00", "image" => "images/p/sm.png"],
    ["name" => "Body Scrub", "price" => "$50.00", "image" => "images/p/bs.png"],
    ["name" => "Acne Foam", "price" => "$50.00", "image" => "images/p/af.png"]
];

// Ambil query pencarian dari URL
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

// Filter produk yang sesuai dengan pencarian
$filteredProducts = array_filter($products, function ($product) use ($searchQuery) {
    return stripos($product['name'], $searchQuery) !== false; // Mengabaikan kapitalisasi
});

// Jika ada produk yang sesuai
if (count($filteredProducts) > 0) {
    foreach ($filteredProducts as $product) {
        echo '<div class="product-item">';
        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" style="width: 50px; height: 50px;">';
        echo '<h4>' . $product['name'] . '</h4>';
        echo '<p>' . $product['price'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>Produk tidak ditemukan.</p>';
}
?>