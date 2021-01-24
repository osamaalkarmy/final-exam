<?php
echo "<pre>\n";
$pdo=new PDO('mysql:host=localhost;dbname=main;','osama','osama');
$pdo->setAttribute(PDO:: ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
?>
