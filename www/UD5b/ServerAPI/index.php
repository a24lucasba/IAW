<?php

declare(strict_types=1);

require_once 'flight/Flight.php';
// require 'flight/autoload.php';

Flight::route('/', function () {
    echo 'hello world!';
});

Flight::route('/saudar', function () {
    echo 'Hola hijos de puta';
});

Flight::register(
    'db',
    'PDO',
    array('mysql:host=db;dbname=serverapi', 'root', 'root')
);

Flight::route('GET /clientes', function () {
    if (!isset($_GET['nome'])){
        $setencia = Flight::db()->prepare("SELECT * from clientes");
    }else{
        $nome = $_GET['nome'];
        $setencia = Flight::db()->prepare("SELECT * from clientes where nombre like '%$nome%'");
    }
    $setencia->execute();
    $datos=$setencia->fetchAll();
    Flight::json($datos);
});

Flight::route('POST /clientes', function () {
    
});

Flight::start();
