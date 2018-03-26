<?php
$server = "localhost";
$username = "jbisson2";
$passwd = "FReddy@@22";

$conn = new mysqli($server, $username, $passwd);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
?>