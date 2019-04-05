<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>   <h1>Product Discount Calculator</h1>
<form method="post">
    <tr>
        <td>Product Description:<input type="text" name="valueProduct"/></td>
    </tr>
    <br>
    <tr>
        <td>List Price:<input type="text" name="valueList"/></td>
    </tr>
    <br>
    <tr>
        <td>Discount Percent:<input type="text" name="valueDiscount">%</td>
    </tr>
    <input type="submit" value="Calculate Discount" id="calculator"/>
</form>
</table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["valueProduct"];
    $price = $_POST["valueList"];
    $discount = $_POST["valueDiscount"];

    $discountAmount = $price * $discount/100 * 0.1;
    echo $discountAmount . "<br>";
    $discountPrice = $price - $discountAmount;
    echo $discountPrice;
}
?>
</body>
</html>
