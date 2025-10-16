<?php
defined('CONTROL') or die('Acesso negado!');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $link = $_POST['link'];

}
?>