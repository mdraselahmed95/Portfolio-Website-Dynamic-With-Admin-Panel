<?php
session_start();
error_reporting(1);
$db = mysqli_connect('localhost', 'root', '', 'rabbiwebsite') or die("database not connected !");
