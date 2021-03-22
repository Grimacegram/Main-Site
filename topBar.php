<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/styleTopBar.css">
    <script defer src="./JS/cssChange.js"></script>
    <title></title>
</head>
<body class="dark">
    <style type="text/css">
    .search-bttn{
    position: absolute;
    left: 80%;
    top: -7px;
    height: 30px;
    background-color: #33333a;
    border: none;
    border-style: solid;
    border-width: 1px;
    border-color:  #3b3b3f;
}
    </style>
    <div id="topbar-con">
    <div id="Top-Bar">
    <div id="search-section">
        <form action="results" method="GET">
        <input class="search-bar" type="search" name="search" placeholder="Search">
        <button class="search-bttn" href="results">Search</button>
        <div id="upload">
        <a href="studio">
            <img src="./icons/upload.png" alt="1" width="30" height="30">
        </a>
        </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>