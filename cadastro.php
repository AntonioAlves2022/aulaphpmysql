<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de usuario</h1>
    <div>
        <form method="post" action="insert.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <br>

            <label for="email">E-mail</label>
            <input type="text" name="email">
            <br>

            <label for="senha">Senha</label>
            <input type="password" name="senha">
            <br>

            <label for="nivel">Nivel</label>
            <select name="nivel" id="nivel">
                <option value="">Selecione o nível de acesso</option>
                <option value="admin">Admin</option>
                <option value="usuario">Usuário</option>
            </select>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </div>


</body>

</html>