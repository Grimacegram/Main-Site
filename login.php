<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" type="image/png" href="./icons/favicon.png">
    <script defer src="./JS/cssChange.js"></script>
    <title>Nitlyn | Login</title>
</head>
<body class="dark">
    <style type="text/css">
    body{
    background-color: #181a2b;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
*{
    color: rgb(216, 234, 250);
    text-decoration: none;
    list-style: none;
}

    </style>
    <div id="login-container">
    <form action="./includes/login.db" method="POST">
    <label>Username/Email</label>
    <input style="color:black" type="text" name="uidLogin">
    <label>Password</label>
    <input style="color:black" type="password" name="pwdLogin">
    <button style="color:black" type="submit" name="login-bttn">Log-In</button>
    </form>
    </div>
</body>
</html>