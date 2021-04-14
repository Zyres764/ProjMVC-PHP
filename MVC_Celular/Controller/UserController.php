<?php
include '../Model/User.php';
include '../Include/UserValidate.php';


//var_dump($_POST);
if ((!empty($_POST['txtid'])) &&
    (!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtMarca'])) &&
    (!empty($_POST['txtPreco'])) &&
    (!empty($_POST['txtDescricao']))
) {
    $erros = array();

    if (!UserValidate::testarId($_POST['txtIdade'])) {
        $erros[] = 'Id inválido';
    }
    /*if (!UserValidate::testarEmail($_POST['txtEmail'])) {
        $erros[] = 'E-mail inválido';
    }*/

    if (count($erros) == 0) {
        $user = new User();
        $user->id = $_POST['txtid'];
        $user->nome = $_POST['txtNome'];
        $user->Marca = $_POST['txtMarca'];
        $user->Preco = $_POST['txtPreco'];
        $user->email = $_POST['txtEmail'];
        $user->Descricao = $_POST['txtDescricao'];

        echo "Usuario $user->id $user->nome criado com sucesso";
    } else {
        echo "Erro ao cadastrar o novo usuário";
    }
} else {
    echo "informe todos os campos";
}
?>