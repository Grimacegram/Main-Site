<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modal</title>
  <link rel="stylesheet" href="./CSS/styleModal.css">
  <link rel="stylesheet" href="./CSS/style.css">
    <script defer src="./JS/upldPrmt.js"></script>
    <script defer src="./JS/cssChange.js"></script>
</head>
<body class="dark">
  <button data-modal-target="#modal" class="upl-bttn">Upload</button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Upload</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <?php
    include "ddupl.html";
    ?>
    </div>
  </div>
  <div id="overlay"></div>
</body>
</html>




