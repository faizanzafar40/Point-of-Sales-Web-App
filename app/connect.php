<?php
// Single place I open the database connection. Every page includes this and
// then talks to the `sales` MySQL database through the shared $db handle.
// The defaults match a stock local XAMPP/MAMP setup (root user, no password);
// change them here for any other environment.

$db_host     = 'localhost';
$db_user     = 'root';
$db_pass     = '';
$db_database = 'sales';

$db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass);

// Surface query problems as exceptions instead of silent failures.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
