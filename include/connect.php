<?php
try {
$db = new PDO('mysql:host=127.0.0.1;dbname=bdshop;charset=utf8;', 'root', 'mnsforever');
}catch(Exception $e){
    die('Erreur: ' . $e->getMessage());
} 

 