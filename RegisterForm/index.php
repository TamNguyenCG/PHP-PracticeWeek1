<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <style>
        fieldset {
            width: 320px;
            border: 2px solid gray;
        }

        legend {
            text-align: center;
            color: red;
            font-size: 40px;
        }

        span {
            color: red;
        }
    </style>
</head>
<body>
<form method="post">
    <h1>Register Form</h1>
    <fieldset>
        <legend>Register</legend>
        <table>
            <tr>
                <td>Username<span>*</span>:</td>
                <td><input type="text" name="name" placeholder="Your name"</td>
            </tr>
            <tr>
                <td>Email<span>*</span>:</td>
                <td><input type="text" name="email" placeholder="Your email"></td>
            </tr>
            <tr>
                <td>Phone<span>*</span>:</td>
                <td><input type="text" name="phone" placeholder="Your phone numbers"</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $contact = [];
    $error = false;
    if (empty($name) || empty($email) || empty($phone)) {
        $error= true;
        echo "You have to fill in all information <br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo "Wrong type of email (xxx@xxx.xxx) <br>";
    }
    if ($error == false) {
        saveDataJSON("users.json", $name, $email, $phone);
        $name = NULL;
        $email = NULL;
        $phone = NULL;
    }
}
function loadRegistrations($filename)
{
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}

function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        // converts json data into array
        $arr_data = loadRegistrations($filename);
        // Push user data to array
        array_push($arr_data, $contact);
        //Convert updated array to JSON
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        //write json data into data.json file
        file_put_contents($filename, $jsondata);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}
?>
<?php
$registrations = loadRegistrations('users.json');
?>
<h1>Registration list</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($registrations as $registration): ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
