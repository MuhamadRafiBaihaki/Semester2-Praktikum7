<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function dekor1() {
            dekor_1 = document.getElementById("home");
            dekor_1.style.color = "aqua";
        }

        function dekor2() {
            dekor_2 = document.getElementById("home");
            dekor_2.style.color = "black";
        }
    </script>
    <style>
        h2 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        p {
            color: red;
            float: left;
            margin-left: 1.5em;
        }
    </style>
</head>
<body>
<header role="banner">
    <h2>Student Activity Score - STTNF</h2>
    <a href="#">Home</a> | <a href="#">Activity</a> | <a href="#">My Score</a> | <a href="#">Login</a>
    <hr/>
    </header>