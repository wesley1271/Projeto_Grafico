<?php

session_start();

define('CONTROL', true);

$usuario_logado = $_SESSION['usuario'] ?? null;
$rota = $_GET['rota'] ?? null; 


if (empty($usuario_logado) && !in_array($rota, ['login', 'cadastro', 'create'])) {
    $rota = 'login';
} 

if (!empty($usuario_logado) && $rota == 'login') {
    $rota = 'home';
}

$rotas = [
    'login' => 'login.php',
    'cadastro' => 'cadastro.php',
    'home' => 'home.php',
    'logout' => 'logout.php',
    'dashboard' => 'dashboard.php',
    'create' => 'create.php'
];

if (!key_exists($rota, $rotas)) {
    die('Acesso negado!');
}
require_once $rotas[$rota];
 