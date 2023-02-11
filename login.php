<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Banco de Imagens</title>
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />

    <style>

        body {
            overflow-y:hidden;
            overflow-x:hidden;
            display: block;
        }

        #div1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            margin-top: 5%;
            margin-left: 40%;
            text-align: center;
            width: 400px;
            height: 250px;
            margin-bottom: 30%;
            border: 2px solid white;
            border-radius: 10px;
            padding-top: 50px;
            background-color: rgb(0,0,0,0.2);
            font-size: 25px;
        }

        button{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px solid white;
            background-color: rgba(255, 255, 255, 0);
            color: white;
            font-size: 25px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        
        <div id="div1">
                Utilizador: <input type="text" name="utilizador" required placeholder="Nome Utilizador"><br><br>
                Password: <input type="password" name="password" required placeholder="Palavra-passe"><br><br><br><br>
        <button id="login">Login</button>  <!-- homepage.php -->
        <!-- <button id="registar">Registar</button> register.php -->
        </div>
        
    </form>

</body>
</html>

<?php

session_start();
    include("config.php");
    
    if ((!empty($_POST["utilizador"])) && (!empty($_POST["password"]))) {

        $utilizador = $_POST["utilizador"];
        $password = $_POST["password"];
        
        $result = $conn -> query("SELECT * FROM utilizador WHERE username='$utilizador' AND password='$password'");

        if($registo = $result->fetch_assoc()){

            $_SESSION["idutilizador"] = $registo["idutilizador"];
            $_SESSION["utilizador"] = $registo["utilizador"];

            header("location: homepage_login.php");
        }
        $conn -> close();

    }

?>

