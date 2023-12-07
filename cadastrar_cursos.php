<?php
    if(isset($_POST['submit']))
    {
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $nivel = $_POST['nivel'];
        $duracao = $_POST['duracao'];
        $periodo = $_POST['periodo'];
        $result = mysqli_query($conexao, "INSERT INTO cursos(nome,nivel,duracao,periodo)
            VALUES('$nome','$nivel','$duracao','$periodo')");

            header('Location: home.php');
    }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cursos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>















<a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastrar_cursos.php" method = "POST">
            <fieldset>
                <legend><b>Cadastrar cursos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do curso</label>
                </div>                
                <p>Nível:</p>
                <input type="radio" id="tecnico" name="nivel" value="tecnico" required>
                <label for="tecnico">Técnico</label>
                <br>
                <input type="radio" id="graducacao" name="nivel" value="graducacao" required>
                <label for="graducacao">Graducaçãoo</label>
                <br>
                <input type="radio" id="posgraduacao" name="nivel" value="posgraduacao" required>
                <label for="posgraduacao">Pós-Graducaçãoo</label>
                <br><br>        

                <div class="inputBox">
                    <input type="duracao" name="duracao" id="telefone" class="inputUser" required>
                    <label for="duracao" class="labelInput">Duracao</label>
                </div>

                <p>Período:</p>
                <input type="radio" id="vespertino" name="periodo" value="vespertino" required>
                <label for="vespertino">Vespertino</label>
                <br>
                <input type="radio" id="matutino" name="periodo" value="matutino" required>
                <label for="matutino">Matutino</label>
                <br>
                <input type="radio" id="noturno" name="periodo" value="noturno" required>
                <label for="noturno">noturno</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
