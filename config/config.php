<?php

const BASEDIR = 'C:\MAMP\htdocs\todoapp';
const URL = 'http://localhost/todoapp/';
const DEV_MODE = true;

try {
    $db = new PDO('mysql:host=localhost;dbname=todoapp;','root','root');
}catch (PDOException $e){
    echo $e->getMessage();
}