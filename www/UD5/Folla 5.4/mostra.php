<?php
session_start();

echo "Conectado como ".$_SESSION['usuario']." con rol ".$_SESSION['rol'];