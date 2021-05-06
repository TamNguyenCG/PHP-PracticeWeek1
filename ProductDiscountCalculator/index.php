<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <h1>Product</h1><hr>
    <label>
        Product Description:
        <input type="text" name="product">
    </label>
    <br><br>
    <label>
        List Price:
        <input type="text" name="price">
    </label>
    <br><br>
    <label>
        Discount Percent:
        <input type="text" name="discount">
    </label>
    <br><br>
    <input type="submit" name="" value="Discount Calculator">
</form>
</body>
</html>
