<?php

session_start();

define('CONTROL', true);

$usuario_logado = $_SESSION['usuario'] ?? null;

if (empty($usuario_logado)) {
    $rota = 'login'; 
} else {
    $rota = $_GET['rota'] ?? null;
}

if (!empty($usuario_logado) && $rota == 'login') {
    $rota = 'home';
}

$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'logout' => 'logout.php',
    'dashboard' => 'dashboard.php',
    'criar' => 'criar.php'
];

if (!key_exists($rota, $rotas)) {
    die('Acesso negado!');
}
require_once $rotas[$rota];
 