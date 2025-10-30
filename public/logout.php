<?php

defined('CONTROL') or die('Acesso negado!');
session_start();
session_destroy();
header("Location: index.php?rota=login.php");
exit;
?>