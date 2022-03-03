<?php


$connect = mysqli_connect('localhost', 'root', '', 'reg');

$connectnew = new PDO("mysql:localhost; dbname=reg", "root", "");

if (!$connect) {
    die('Error connect to DataBase');
}