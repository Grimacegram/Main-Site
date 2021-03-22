<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styleAcc.css">
    <link rel="stylesheet" href="./CSS/styleRegister.css">
    <link rel="shortcut icon" type="image/png" href="./icons/favicon.png">
    <title>NitLyn | Sign-Up</title>
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
    <div id="con">
    <div id="signup-container">
        <div id="collan321">
        <h2>SIGN-UP</h2>
            <form action="login" method="POST">
        <label class="Label-fn" >First Name</label>
        <input class="fName" style="color: black;" type="text" name="uFirstname">
        <label class="Label-ln" >Last Name</label>
        <input class="lName" style="color: black;" type="text" name="uLastname">
        <label class="Label-un" >Username</label>
        <input class="uName"  style="color: black;" type="text" name="uId">
        <label class="Label-email" >Email</label>
        <input class="Email" style="color: black;" type="email" name="uEmail">
        <label class="Label-pwd" >Password</label>
        <input class="pwd" style="color: black;" type="password" name="pwd">
        <label class="Label-pwdRe">Password Repeat</label>
        <input class="pwdRe" style="color: black;" type="password" name="pwdRe">
        <label class="Label-uCI" >Channel Icon</label>
        <input class="Ch-icon" type="file" name="uCI">
        <label class="Country">Country</label>
        <select class="Country">
            <optgroup label="North America">
            <option value="Canada">Canada</option>
            <option value="United-States">United States</option>
            <option value="Mexico">Mexico</option>
            </optgroup>
            <optgroup label="South-America">

            </optgroup>
        </select>
        <select style="color: black;" id="gender">
            <option style="color: black;" value="male">MALE</option>
            <option style="color: black;" value="female">FEMALE</option>
        </select>
        <section class="bday">
        <input type="month" value="January">
        <input class="day" type="number" value="1">
        <input class="year" type="number" value="1999">
        </section>
        <button class="submit-bttn" style="color:black;" type="submit" name="signUp-submit">Sign-Up</button>
        <p class="err-msg"></p>
        <p>NOTE: <i>Your Gender <b>IS NOT</b> Based On Your Sexuality.</i></p>
            </form>
            <p>If You Already Have An Account Click <a style="color: red;" href="login">HERE</a></p>
        </div>
    </div>    
    </div>
    <div id="footer">
    <?php
    include "footer.php";
    ?>
    </div>
    <script type="text/javascript">
    // Put This in an external file when done
    const uFirst = document.getElementsByName('uFirstname');
    const uLast = document.getElementsByName('uLastname');
    const uId = document.getElementsByName('uId');
    const uEmail = document.getElementsByName('uEmail');
    const pwd = document.getElementsByName('pwd');
    const pwdRe = document.getElementsByName('pwdRe');
    const errmsg = document.getElementsByClassName('err-msg');
    if (uFirst == NULL){
        document.errmsg("First Name Cannot Be Left Empty!");
    } else if (uLast == NULL) {
        document.errmsg("Last Name Cannot Be Left Empty!");
    } else if (uId == NULL) {
        document.errmsg("The Username Field Is Required!");
    } else if (uEmail == NULL) {
        document.errmsg("The Email Field Is Required!");
    } else if (pwd == NULL) {
        document.errmsg("The Password Field Is Required!");
    } else if (pwdRe == NULL) {
        document.errmsg("Repeat Your Password Please.");
    } else {
        document.errmsg("");
    }
    document.errmsg("Hi This Will Work");

    </script>
</body>
</html>