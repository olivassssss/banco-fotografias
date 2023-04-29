
<?php

    if(array_key_exists('login', $_POST)){
        login();
    }
    else if(array_key_exists('register', $_POST)){
        register();
    }

    function login(){
        header("location: login.php");
    }
    function register(){
        header("location: register.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
    <script src="app.js"></script>
    <style>
        #header{
            text-align: center;
            width: 70%;
            height: 15%;
            border: 2px solid white;
            background-color: rgb(0,0,0,0.2);
            margin-top: 10px;
            margin-left: 280px;
            position: absolute;
            display: block;
            border-radius: 5px;
        }

        form {
            text-align: right;
        }
        .button:hover{
            background-color: gray;
            color: lightcoral;
        }

        .columns{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }

        .column{
            flex: 25%;
        }

        input[type=submit]{
            color: white; 
            font-size: 15px; 
            margin-top: 0; 
            margin-left: 0%; 
            border-bottom: 2px solid white; 
            border-top: 0;
            border-right: 0;
            border-left: 0; 
            background-color: rgb(34,131,181,0.05); 
            padding: 5px; 
            cursor: pointer; 
            font-family: verdana;
        }

        input[type=submit]:hover{
            color: lightcoral; 
            font-size: 15px; 
            margin-top: 0; 
            margin-left: 0%; 
            border-bottom: 2px solid white; 
            border-top: 0;
            border-right: 0;
            border-left: 0; 
            background-color: rgb(34,131,181,0.05); 
            padding: 5px; 
            cursor: pointer; 
            font-family: verdana;
        }

    </style>
    <title>Homepage</title>
</head>
<body onload="displayImage()">
        <form method="post">
            <input type="submit" name="login" class="button" value="Login">
            <input type="submit" name="register" class="button" value="Registar">
        </form>
            <div id="header">
                <h1>Banco Fotográfico</h1>
                <h4>Podes registar-te na nossa página e adicionar todas as fotografias que queiras desde que detenhas os direitos da imagem</h4>
            </div>
            <br><br><br><br><br><br><br><br><br>
           

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

            <div id="footer">
                <p>Copyright © Diogo Oliveira. 2023</p>
            </div>

</body>
</html>