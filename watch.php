<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <script type="text/javascript" src="./JS/player/player.js"></script>
    <script type="text/javascript" src="./JS/player/watchEle.js"></script>
    <script defer type="text/javascript" src="./JS/player/descCons.js"></script>
    <link rel="stylesheet" href="./CSS/styleVideoTitle.css">
    <link rel="shortcut icon" type="image/png" href="./icons/favicon.png">
    <title></title>
</head>
<body class="dark">
    <script type="text/javascript">
    function ExpandDescription() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("ExpDesc");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "SHOW MORE"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "SHOW LESS"; 
      moreText.style.display = "inline";
    }
  }
    </script>
    <?php
    include "topBar.php";
    ?>
    <div id="watch-container">
        <div class="player">

        </div>
        <div class="title-abt">
            <h3>This Is the Title</h3>
            
            <p>16,695 views • Mar 18, 2021</p>
        </div>
        <div id="description">
            <!-- Channel Image/Name -->
            <a class="whole-" href="#"> 
            <img class="channel-icon" src="./icons/otto.png" alt="2" width="20" height="20">
            GrimGramStudios
            </a>
            <div id="description-content">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
            <button onclick="ExpandDescription()" id="ExpDesc">SHOW LESS</button>
            </div>
            
        </div> 
        <div id="comments">

        </div>
    </div>
</body>
</html>
