<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            border: none;
            outline: none;
            border-radius: 10px;
            padding: 15px;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }

    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Tela de login</h1>
        <form action="testeLogin.php" method="POST">            
        
        <input type="text" name="usuario" placeholder="Usuário">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <p>Usuario: maria<br>Senha: 123 - diretor</p>
        <p>Usuario: sidnei<br>Senha: 123 - aluno</p>
        <p>Usuario: jose<br>Senha: 123 - professor</p>
    </div>
</body>
</html>