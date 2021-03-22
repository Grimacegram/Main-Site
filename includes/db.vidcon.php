<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = " ";
$dbname = "Nvu13";
mysqli_connect($dbhost,$dbuser,$dbpass) or die ('cannot connect to the server');

mysqli_select_db($dbname, $dbpass) or die ('database selection problem');
?>