<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Number</title>
</head>
<body>
<form method="get">
    <div>
        <h1>Input Number:</h1>
        <label>
            <input type="text" name="input">
        </label>
        <button type="submit" name="submit">Read</button>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $so = $_GET["input"];


    $tram = floor($so / 100);
    $chuc = floor(($so - ($tram * 100)) / 10);
    $don_vi = $so - $tram * 100 - $chuc * 10;


    $mangDon_vi = ['Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
    $mangChuc = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
    $mang10_19 = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];

    if ($so >= 0 && $so < 1000) {
        // trường hợp số nhập vào là số có 1 chữ số
        if ($tram == 0 && $chuc == 0 && $don_vi < 10) {
            for ($i = 0; $i < count($mangDon_vi); $i++) {
                switch ($don_vi) {
                    case $i:
                        echo "$so" . "=>" . "$mangDon_vi[$i]";
                        break;
                }
            }
        }
        // trường hợp số nhập vào là số có 2 chữ số
        if ($tram == 0 && $chuc >= 1 && $chuc < 10 && $don_vi < 10) {
            // trường hợp từ 10-19
            if ($chuc == 1) {
                for ($i = 0; $i < count($mang10_19); $i++) {
                    switch ($don_vi) {
                        case $i:
                            echo "$so" . "=>" . "$mang10_19[$i]";
                            break;
                        default:
                            break;
                    }
                }
                // trường hợp từ 20 - 100
            } else {
                // trườg hợp các số chẵn chục từ 20 - 100
                if ($don_vi == 0) {
                    for ($i = 0; $i < count($mangChuc); $i++) {
                        switch ($chuc) {
                            case $i:
                                echo "$so" . "=>" . "$mangChuc[$i]";
                                break;
                            default:
                                break;
                        }
                    }
                    // các TH còn lại từ 20 - 100
                } else {
                    for ($i = 0; $i < count($mangChuc); $i++) {
                        for ($y = 0; $y < count($mangDon_vi); $y++) {
                            switch ($chuc) {
                                case $i:
                                    switch ($don_vi) {
                                        case $y:
                                            echo "$so" . "=>" . "$mangChuc[$i]" . '-' . "$mangDon_vi[$y]";
                                            break;
                                        default:
                                            break;
                                    }
                                    break;
                            }
                        }
                    }
                }
            }
        }
        // TH số nhập vào là số có 3 chữ số
        if ($tram >= 1 && $tram < 10 && $chuc < 10 && $don_vi < 10) {
            // TH sô chẵn trăm
            if ($chuc == 0 && $don_vi == 0) {
                for ($i = 0; $i < count($mangDon_vi); $i++) {
                    switch ($tram) {
                        case $i:
                            echo "$so" . "=>" . "$mangDon_vi[$i]" . ' hundred';
                            break;
                    }
                }
            } else {
                // TH số nhập vào có dạng x0x, x0y...
                if ($chuc == 0) {
                    for ($i = 0; $i < count($mangDon_vi); $i++) {
                        for ($y = 0; $y < count($mangDon_vi); $y++) {
                            switch ($tram) {
                                case $i:
                                    switch ($don_vi) {
                                        case $y:
                                            echo "$so" . "=>" . "$mangDon_vi[$i]" . ' hundred and ' . "$mangDon_vi[$y]";
                                            break;
                                    }
                                    break;
                            }
                        }
                    }
                } else {
                    // TH số nhập vào có dạng x1x, x1y...
                    if ($chuc == 1) {
                        for ($i = 0; $i < count($mangDon_vi); $i++) {
                            for ($y = 0; $y < count($mang10_19); $y++) {
                                switch ($tram) {
                                    case $i:
                                        switch ($don_vi) {
                                            case $y:
                                                echo "$so" . "=>" . "$mangDon_vi[$i]" . ' hundred and ' . "$mang10_19[$y]";
                                                break;
                                        }
                                        break;
                                }
                            }
                        }
                    } else {
                        // TH số nhập vào có dạng xx0, xy0...
                        if ($don_vi == 0) {
                            for ($i = 0; $i < count($mangDon_vi); $i++) {
                                for ($y = 0; $y < count($mangChuc); $y++) {
                                    switch ($tram) {
                                        case $i:
                                            switch ($chuc) {
                                                case $y:
                                                    echo "$so" . "=>" . "$mangDon_vi[$i]" . ' hundred and ' . "$mangChuc[$y]";
                                                    break;
                                            }
                                            break;
                                    }
                                }
                            }
                            // các TH còn lại
                        } else {
                            for ($i = 0; $i < count($mangDon_vi); $i++) {
                                for ($u = 0; $u < count($mangChuc); $u++) {
                                    for ($y = 0; $y < count($mangDon_vi); $y++) {
                                        switch ($tram) {
                                            case $i:
                                                switch ($chuc) {
                                                    case $u:
                                                        switch ($don_vi) {
                                                            case $y:
                                                                echo "$so" . "=>" . "$mangDon_vi[$i]" . ' hundred and ' . "$mangChuc[$u]" . ' - ' . "$mangDon_vi[$y]";
                                                                break;

                                                        }
                                                        break;
                                                }
                                                break;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        echo 'Out of ability';
    }
}
?>
</body>
</html>
