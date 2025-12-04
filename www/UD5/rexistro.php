<?php

//REXISTRO.php

// Formulario usuario contrasinal que leva a rexistroUsuario.php

// REXISTRAUSUARIO.PHP
$contrasinalTecleada = $_GET['passwd'];
$usuario = $_GET['usuario'];

$contrasinalHasheado = password_hash($contrasinalTecleada, PASSWORD_DEFAULT);

//GARDO : Insert into usuario (nome,passwd) VALUES ($usuario, $contrasinalHasheada);