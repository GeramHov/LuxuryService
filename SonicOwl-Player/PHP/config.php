<?php

    try {
        $dataBase = new PDO('mysql:host=127.0.0.1; dbname=sonicowlplayer', 'root', '');
    }
    catch (PDOException $e) {
        die('An error occured while connecting to the database: ' . $e->getMessage());
    }

?>