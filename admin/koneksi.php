<?php
$k = new mysqli("localhost", "root", "", "khailabs");

if ($k->connect_error) {
    die("Connection failed: " . $k->connect_error);
}
?><?php
$k = mysqli_connect("localhost", "root", "", "khailabs");
?>