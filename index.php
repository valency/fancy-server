<html>
<head>
    <style>
        * { 
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        body {
            padding: 50px;
            background-color: black;
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
    </style>
</head>
<body>
<?php
foreach (scandir(".") as $f) {
    if ($f != "." && $f != "..") {
        print "<p><a href='" . $f . "'>" . $f . "</a></p>";
    }
}
?>
</body>
</html>

