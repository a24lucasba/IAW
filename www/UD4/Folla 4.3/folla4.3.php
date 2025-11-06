<?php

$servidor="db";
$usuario="root";
$passwd="root";
$base="proba";

//CONECTAMOS
$conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO

if($conexion->connect_error){
    die("Non é posible conectar coa BD: ". $conexion->connect_error);
}

$conexion->set_charset("utf8");

//PREPARAMOS A SENTENCIA:
$sentenciaPrep=$conexion->prepare("INSERT INTO cliente (codCliente,nome,apelidos)
VALUES(?, ?, ?)");

// DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:
$codCliente=103;
$nome="Mariano";
$apelidos="Delgado";
$sentenciaPrep->bind_param('iss',$codCliente, $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES

if(!$sentenciaPrep->execute() ){ //EXECUTAMOS A CONSULTA
    die("Houbo un erro na execución da consulta");
}else{
    echo "Datos inseridos<br>";
}

$codCliente=104;
$nome="Javi";
$apelidos="Hernández";
$sentenciaPrep->bind_param('iss',$codCliente, $nome, $apelidos);
if(!$sentenciaPrep->execute() ){
    die("Houbo un erro na execución da consulta");
}else{
    echo "Datos inseridos<br>";
}

$codCliente=105;
$nome="Juan";
$apelidos="deDios";
$sentenciaPrep->bind_param('iss',$codCliente, $nome, $apelidos);
if(!$sentenciaPrep->execute() ){
    die("Houbo un erro na execución da consulta");
}else{
    echo "Datos inseridos<br>";
}

$conexion->close(); //PECHAMOS AS CONEXIÓNS