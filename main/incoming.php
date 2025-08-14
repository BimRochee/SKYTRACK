<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];

$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
$result->bindParam(':userid', $b);
$result->execute();

for($i = 0; $row = $result->fetch(); $i++){
    $asasa = $row['price'];
    $name = $row['product_name'];
    $p = $row['profit'];
}

// Update product quantity
$sql = "UPDATE products 
        SET qty = qty - :qty
        WHERE product_id = :product_id";
$q = $db->prepare($sql);
$q->execute(array(':qty' => $c, ':product_id' => $b));

$asasa = floatval($asasa);
$discount = floatval($discount);
$fffffff = $asasa - $discount;
$d = $fffffff * $c;
$profit = $p * $c;

// Insert into sales_order table
$sql = "INSERT INTO sales_order (invoice, product, qty, amount, name, price, profit,  date)
        VALUES (:invoice, :product, :qty, :amount, :name, :price, :profit,   :date)";
$q = $db->prepare($sql);
$q->execute(array(
    ':invoice' => $a,
    ':product' => $b,
    ':qty' => $c,
    ':amount' => $d,
    ':name' => $name,
    ':price' => $asasa,
    ':profit' => $profit,
    ':date' => $date,
));

header("location: sales.php?id=$w&invoice=$a");
?>