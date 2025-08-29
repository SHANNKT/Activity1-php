<?php
// Gadget Grove Catalog

// Array of products
$products = [
    ["name" => "Wireless Mouse", "brand" => "LogiX", "price" => 25.99, "stock" => true, "warranty" => "1 year"],
    ["name" => "Mechanical Keyboard", "brand" => "KeyTech", "price" => 79.99, "stock" => true, "warranty" => "2 years"],
    ["name" => "USB-C Hub", "brand" => "HyperConnect", "price" => 34.50, "stock" => false, "warranty" => "6 months"],
    ["name" => "Portable Speaker", "brand" => "SoundMax", "price" => 49.99, "stock" => true, "warranty" => "1 year"],
];

// Show product names
echo "<h3>Product Names: ";
echo $products[0]['name'] . ", ";
echo $products[1]['name'] . ", ";
echo $products[2]['name'] . ", ";
echo $products[3]['name'];
echo "</h3>";

// Show first and last price
echo "<p>First product price: ₱" . number_format($products[0]['price'], 2) . "</p>";
echo "<p>Last product price: ₱" . number_format($products[3]['price'], 2) . "</p>";

// Show details of Mechanical Keyboard
echo "<h3>Product: " . $products[1]['name'] . "</h3>";
echo "<p>Brand: " . $products[1]['brand'] . "</p>";
echo "<p>Price: ₱" . number_format($products[1]['price'], 2) . "</p>";
echo "<p>In Stock: " . ($products[1]['stock'] ? "Yes" : "No") . "</p>";
echo "<p>Warranty: " . $products[1]['warranty'] . "</p>";

// Full Catalog
echo "<h3>--- Full Catalog ---</h3>";
foreach ($products as $p) {
    echo "Product: {$p['name']} - Price: ₱" . number_format($p['price'], 2) . "<br>";
}
?>
S