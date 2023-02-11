
<?php

if ((!empty($_POST["utilizador"])) && (!empty($_POST["password"])) && (!empty($_POST["email"]))) {

    include("config.php");

    $utilizador = $_POST["utilizador"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    if (isset($_POST["newsletter"]))
        $newsletter = 1;
    else
        $newsletter=0;

    $conn -> query("INSERT INTO `bancofotografias`.`utilizador` (`username`, `password`, `email`, `newsletter`) VALUES ('$utilizador', '$password', '$email', '$newsletter')");
    $conn -> close();

    //echo "<p>Conta criada com sucesso, bem-vindo/a $utilizador!</p>";

    sleep(2);

    header("location: login.php");
}

?>



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
            height: 350px;
            margin-bottom: 30%;
            border: 2px solid black;
            border-radius: 10px;
            background-color: beige;
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
                Password: <input type="password" name="password" required placeholder="Palavra-passe"><br><br>
                E-mail: <input type="email" name="email" required placeholder="E-mail"><br><br>
                Newsletter <input type="checkbox" name="newsletter" checked><br><br>
        <!-- <button>Login</button>  homepage.php -->
            
        <button>Registar</button> <!-- register.php -->
        </div>
        

    </form>
</body>
</html>


