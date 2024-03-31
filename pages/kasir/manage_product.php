<?php
session_start();
require_once('../../db/db_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true) {
    header ('Location: ../../index.php'); 
    exit;
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
<Link rel="stylesheet" href="../../assets/style/manage_product.css">
<Link rel="stylesheet" href="../../assets/style/navbar.css">
</head>
<body>
<?php include '../navbar.php';?>
<div class="header">
        <h1>Hello, <?php echo htmlspecialchars($_SESSION['nama']); ?>! Welcome to product management!</h1>
</div>
<div class="form-container">
    <form action="../../db/db_add_product.php" method="post">
        <label for="nama_produk">Produk Name:</label>
        <input type="text" name="nama produk" required>
        <br>
        <label for="harga_produk">Product Price:</label> 
        <input type="number" name="harga_produk" required>
        <br>
        <label for="jumlah">Quantity</label>
        <input type="number" name="jumlah" required>
        <br>
        <button type="submit" name="add_product">Add Product</button>
    </form>
</đtv>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Terakhir di Update</th>
    </tr>
<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['nama_produk']); ?></td>
        <td>Rp. <?php echo number_format($row['harga_produk']); ?></td>
        <td><?php echo number_format($row['jumlah']); ?> pcs</td>
        <td><?php echo date('d F Y H:i:s', strtotime($row['created_at'])); ?></td>
        <td class="actton-buttons">
            <form action="./update_product.php" method="get">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="update-button" types="submit">Updates</button> 
            </form>
            <form action="../../db/db_delete_product.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="delete-button" name="delete_product" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
            </form> 
            <form action="../../db/db_process_checkout.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="checkout-button" name="checkout_product">Print</button>
            </form>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>