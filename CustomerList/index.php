<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>CUSTOMER LIST</h1></caption>
    <thead>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $customerList = [
        "1" => [
            "Name" => "Mai Van Anh",
            "Date of Birth" => "2002-08-20",
            "Address" => "Ha Noi"
        ],
        "2" => [
            "Name" => "Nguyen Duc Tam",
            "Date of Birth" => "1991-11-15",
            "Address" => "Ha Noi"
        ],
        "3" => [
            "Name" => "Ngo Quoc Thinh",
            "Date of Birth" => "2000-10-10",
            "Address" => "Ha Noi"
        ],
        "4" => [
            "Name" => "Pham Van Tien",
            "Date of Birth" => "1997-04-30",
            "Address" => "Ha Noi"
        ]
    ]
    ?>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['Name'] ?></td>
            <td><?php echo $value['Date of Birth'] ?></td>
            <td><?php echo $value['Address'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>