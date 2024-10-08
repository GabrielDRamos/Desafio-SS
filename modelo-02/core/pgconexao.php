<?php
$endereco = 'localhost';
$bdnome = 'Gabriel';
$usuario = 'postgres';
$senha = 'uchiha123';

//Conexão banco de dados
try{
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$bdnome", $usuario,$senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
     

}catch(PDOException $e){
    
    die();
}