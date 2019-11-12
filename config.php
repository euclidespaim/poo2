<?php

/**
 * Configurações de acesso ao banco de dados
 *
 */

$host       = "localhost";
$username   = "paim";
$password   = "123mudar";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);