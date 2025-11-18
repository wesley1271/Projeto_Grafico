<?php
class usuarios {

    public $nome;
    public $email;
    private $senha;

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}

defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    $usuario = new usuarios();
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));

    $nome = $usuario->nome;
    $email = $usuario->email;
    $senha = $usuario->getSenha();

    $query = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($conn, $query)) {
        echo "Registro inserido com sucesso";
    } else {
        echo "Erro ao inserir um registro: " . mysqli_error($conn);
    }
}
?>
