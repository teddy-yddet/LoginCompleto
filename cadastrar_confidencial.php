<?php

    if(isset($_POST['submit']))
    {
    
        include_once('config.php');

        $conteudo = $_POST['conteudo'];
        $result = mysqli_query($conexao, "INSERT INTO confidencial(conteudo)
            VALUES('$conteudo')");

            header('Location: home.php');
    }
       
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confidencial</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(
          to right,
          rgb(20, 147, 220),
          rgb(17, 54, 71)
        );
      }
      .box {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
      }
      fieldset {
        border: 3px solid dodgerblue;
      }
      legend {
        border: 1px solid dodgerblue;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 8px;
      }
      .inputBox {
        position: relative;
      }
      .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
      }
      .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: 0.5s;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput {
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
      }
      #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
      }
      #submit {
        background-image: linear-gradient(
          to right,
          rgb(0, 92, 197),
          rgb(90, 20, 220)
        );
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
      }
      #submit:hover {
        background-image: linear-gradient(
          to right,
          rgb(0, 80, 172),
          rgb(80, 19, 195)
        );
      }
    </style>
  </head>
  <body>









    <a href="home.php">Voltar</a>
    <div class="box">
      <form action="cadastrar_confidencial.php" method="POST">
        <fieldset>
          <legend><b>Cadastrar avaliação</b></legend>
          <br />



          <div class="inputBox">
            <input
              type="text"
              name="materia"
              id="materia"
              class="inputUser"
              required
            />

            <label for="conteudo" class="labelInput">Matéria</label>



          <br><br>
            <div class="inputBox">
            <input
              type="text"
              name="observacao"
              id="observacao"
              class="inputUser"
              required
            />





            <label for="conteudo" class="labelInput">Observação</label>
          </div>


          <p>Tipo de avaliação:</p>
                <input type="radio" id="prova" name="tipo" value="prova" required>
                <label for="prova">Prova</label>
                <br>
                <input type="radio" id="trabalho" name="tipo" value="trabalho" required>
                <label for="trabalho">Trabalho</label>
                <br>
                <input type="radio" id="outro" name="tipo" value="Outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="submit" name="submit" id="submit">









        </fieldset>
      </form>
    </div>
  </body>
</html>
