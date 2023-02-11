<?php
    
    session_start();

    if (!empty($_SESSION["idutilizador"])){
        echo "";
    }
    else{

        header("location: login.php"); // ou para o login

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script>

        var imagensUser = [];

        <?php
            include("config.php");
            $idutilizadorFK = $_SESSION["idutilizador"];

            $result = $conn -> query ("SELECT DISTINCT * FROM fotografia WHERE idutilizadorFK = $idutilizadorFK");

            while($registo = $result -> fetch_assoc()){

                echo "imagensUser.push('".$registo['imagem_url']."');\n";
            }
            $conn -> close();

        ?>


        function displayImageHomepage() {
            var img = document.getElementsByTagName("img");

            for (let i = 0; i < img.length; i++) {

            var num = Math.floor(Math.random() * (imagensUser.length));
            img[i].src = imagensUser[num];
            imagensUser.splice(num, 1);
            }

        }
    </script>
    <style>
        #header{
            text-align: center;
            width: 1500px;
            height: 200px;
            border: 2px solid white;
            margin-top: 0;
            margin-left: 200px;
            position: absolute;
            display: block;
            background-color: rgb(0,0,0,0.2);
            border-radius: 5px;
        }
        h4{
            font-size: 19px;
        }
        a {
            color: white;
            font-weight: bold;
            font-size: 20px;
            border: none;
            transition: color 1s;
            padding: 20px;
            text-decoration: none !important;
        }
        a:hover{
            color: lightcoral;
        }


    </style>
    <title>Homepage</title>
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body onload="displayImageHomepage()">
    <div id="fixed">
        <div id="header">
            <h1>Banco Fotográfico</h1>
            <h4>Bem-vindo/a de volta! Esperamos pelas tuas obras de arte no nosso albúm. O que vais adicionar hoje?</h4>
            <p><a href="homepage_sessao.php">Homepage</a> <a href="inserir_fotos.php">Inserir fotos</a> <a href="procurar.php">Procurar</a> 
            <a href="index.php">Log out</a></p>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        
            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div>
             
            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div>
<!--
            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div>

            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                   <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div>

            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div>

            <div id="columns">
                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>

                <div id="column">
                    <img src="">
                </div>
            </div> -->
</body>
</html>