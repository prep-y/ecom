<?php
$mysqli = @new mysqli('localhost', 'root', '', 'giftbox');

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
?>