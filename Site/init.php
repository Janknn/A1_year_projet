<?php 



try {
    $pdo = new PDO('mysql:host=localhost;dbname=pulse','root','root');
} catch (PDOException $e) {
    die('Site indisponible : ' . $e->getMessage());
}



?>