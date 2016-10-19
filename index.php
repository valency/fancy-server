<html>
<head>
    <link rel="shortcut icon" href="favicon.ico"/>
    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 50px;
            background-color: black;
            color: white;
            font-size: 16px;
        }

        a {
            text-decoration: none;
            background: red;
            color: white;
            padding: 5px;
        }

        a:hover {
            background: white;
            color: red;
        }

        .footer {
            color: white;
            position: fixed;
            bottom: 50px;
            right: 50px;
            font-size: 12px;
        }

        .footer a {
            background: none;
            font-size: 12px;
            padding: 0;
        }
    </style>
</head>
<body>
<?php
foreach (preg_grep('/^([^.])/', scandir(".")) as $f) {
    $ext = pathinfo($f, PATHINFO_EXTENSION);
    if ($f != "." && $f != ".." && $ext != "php") {
        echo "<p><a href='" . $f . "'>" . $f . "</a></p>";
    }
}
?>
<span class="footer">(C) 2013 - 2017 Themed by <a href="http://www.cse.ust.hk/~valency/" target="_blank">Valency</a></span>
</body>
</html>

