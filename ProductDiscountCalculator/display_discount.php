<?php
    include_once 'index.php';
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $product = $_POST["product"];
        $price = $_POST["price"];
        $discountPercent = $_POST["discount"];
        $percent = 100;
        $discountAmount = $price * ($discountPercent/$percent);
        $discountPrice = $price - $discountAmount;
        echo "<hr>"."Product Description is : "."$product"."<br>";
        echo "Price is : "."$price"."<br>";
        echo "Discount Percent is : "."$discountPercent"." % "."<br>";
        echo "Discount Amount is : "."$discountAmount"."<br>";
        echo "Discount Price is : "."$discountPrice";
    }

