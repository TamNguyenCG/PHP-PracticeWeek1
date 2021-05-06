
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <label>
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    </label>
    <button type="submit" id="submit"> Find</button> <br>
</form>
<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "sách",
    "computer" => "máy tính",
    "girl" => "con gái",
    "boy" => "con trai",
    "english" => "tiếng Anh",
    "vietnamese" => "tiếng Việt"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$searchWord = $_POST["search"];
$flag = 0;
foreach ($dictionary as $word => $description) {
if ($word == $searchWord) {
echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
echo "<br/>";
$flag = 1;
}
}

if ($flag == 0) {
echo "Không tìm thấy từ cần tra.";
}
}
?>
</body>
</html>
