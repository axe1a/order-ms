<!DOCTYPE html>
<html>
<head>
    <title>Tuhugin mo beybe</title>
</head>
<body>

<h2>Tuhugan ni Tomas</h2>
<p>magbayad ka naman pagkatuhog mo nahiya naman ako sayo</p>
<p>barya na din sa umaga, kahiya naman sayong bagong sahod ibabayad mo 1k</p>
<table>
    <li>Fishball (3pcs) - ₱5</li>
    <li>Kikiam - ₱1</li>
    <li>Kwek-Kwek - ₱12</li>
    <li>Palamig - ₱10</li>
</table>
<p> </p>
<form method="post" action="">
    <label for="order">Select Item:</label>
    <select id="order" name="order">
        <option value="fishball">Fishball (3pcs)</option>
        <option value="kikiam">Kikiam</option>
        <option value="kwek-kwek">Kwek-Kwek</option>
        <option value="palamig">Palamig</option>
    </select><br><br>
    
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" required><br><br>
    
    <label for="cash">Cash Amount:</label>
    <input type="number" id="cash" name="cash" min="1" required><br><br>
    
    <input type="submit" name="submit" value="Place Order">
</form>

<?php
if(isset($_POST['submit'])){
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    $menu = array(
        "fishball" => 5,
        "kikiam" => 1,
        "kwek-kwek" => 12,
        "palamig" => 10,
    );
    
    $total_cost = $menu[$order] * $quantity;
    $change = $cash - $total_cost;
    
    if($cash < $total_cost) {
        echo "<p style='color:red;'>Insufficient payment! Please input sufficient cash.</p>";
    } else {
        echo "<h3>Order Summary:</h3>";
        echo "Item: $order<br>";
        echo "Quantity: $quantity<br>";
        echo "Total Cost: ₱$total_cost<br>";
        echo "Cash Paid: ₱$cash<br>";
        echo "Change: ₱$change<br>";
        echo "<p>Thank you for ordering!</p>";
    }
}
?>

</body>
</html>
