<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"/>
    <style>
        @font-face {
            font-family: "Fancy Mono";
            font-style: normal;
            font-weight: 400;
            src: url(mono.woff2) format("woff2");
        }

        body {
            font-family: "Fancy Mono", monospace;
            overflow: hidden;
            color: white;
            background: black;
            font-size: 12px;
        }

        a {
            color: white;
            text-decoration: none;
            transition: 0.5s;
        }

        a:hover {
            color: red;
        }

        a.block {
            text-decoration: none;
            background: red;
            padding: 0.3em;
            line-height: 2.5em;
        }

        a.block:hover {
            background: white;
            color: red;
        }

        .main {
            margin-top: 50px;
            margin-left: 50px;
        }

        .footer {
            position: fixed;
            bottom: 50px;
            right: 50px;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    foreach (preg_grep('/^([^.])/', scandir(".")) as $f) {
        $ext = pathinfo($f, PATHINFO_EXTENSION);
        if ($f != "." && $f != ".." && is_dir($f)) {
            echo "<p><a class='block' href='" . $f . "'>" . $f . "</a></p>";
        }
    }
    ?>
</div>
<span class="footer">(C) 2013 - 2018 Themed by <a href="http://www.cse.ust.hk/~valency/" target="_blank">Valency</a></span>
</body>
</html>

