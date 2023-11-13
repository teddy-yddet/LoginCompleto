<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
        //$result = $conexao->query($sql);
        $result = $conexao->query($sql) or die($conexao->error);
        $usuario = $result->fetch_assoc();
        //$tipo = $result['tipo'];

        // print_r($sql);
        // print_r($result);

        /*
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['tipo'] = $tipo;
            header('Location: sistema.php');
        }
        */

        if(password_verify($senha, $usuario['senha']))
        {
            echo "Usuário logado!";
        }
        else
        {
            echo "Falha ao logar. Senha ou usuário incorretos!";
            print_r('Senha: ' . $senha);
            print_r('Boolean: ' . $usuario['senha']);


        }






    }
    else
    {
        // Não acessa
        echo "Falha ao logar";
        //header('Location: login.php');
    }
?>