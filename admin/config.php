<?php

// DB Bağlantı bilgilerimiz....
$databaseHost = 'localhost';
$databaseName = 'myblog';
$databaseUsername = 'root';
$databasePassword = '';

// Veritabanına Bağlanalım...
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
// Veritabanı Kodlamasını UTF8 Yapalım...
$result = mysqli_query($mysqli, "SET NAMES utf8");
