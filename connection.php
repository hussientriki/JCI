<?php

$dbhost = "localhost";
$dbuser = "id21120763_jceasy";
$dbpass = "JCI2023-24easy";
$dbname = "id21120763_jceasy";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect!");
}