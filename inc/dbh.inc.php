<?php 

$servername = "shareddb-o.hosting.stackcp.net";
$dBUsername = "userspractice-313039ad60";
$dBPassword = "0y9zo8eckq";
$dBName = "userspractice-313039ad60";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());  //kill connection
}
