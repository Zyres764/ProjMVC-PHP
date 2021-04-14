<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
        <form action="../Controller/UserController.php" method="POST" name="form_user">
        <input type="number" name="txtid" id="txtId" placeholder="Id"></input><br><br>
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input type="text" name="txtMarca" id="txtMarca" placeholder="Marca"></input><br><br>
        <input type="text" name="txtPreco" id="txtPreco" placeholder="Preço"></input><br><br>
        <input type="text" name="txtDescricao" id="txtDescricao" placeholder="Descrição"></input><br><br>
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
</body>
</html>