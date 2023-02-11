
<?php

require("homepage_login.php");
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
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
            position: absolute;
        }

        #inserida{
            margin-left: 41%;
            width: 350px;
            height: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            border: 1px solid white;
            border-radius: 10px;
            font-family: verdana;
            text-align: center;
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

        form{
            text-align: center;
            margin-left: 41%;
            margin-top: 2%;
            font-family: verdana;
            width: 350px;
            height: 350px;
            background-color: rgba(0, 0, 0, 0.2);
            border: 1px solid white;
            border-radius: 10px;
        }
        input[type=file]{
            /* opacity: 0; */
            overflow: hidden;
            cursor: pointer;
        }
        textarea{
            width: 200px;
            height: 50px;
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
    <title>Homepage</title>
</head>
<body>
    
    <br><br><br><br><br><br><br><br><br><br>
    <form method="post" enctype="multipart/form-data">
    <p>Fotografia: <input type="file" name="imagens" required><br><br>
    <p>Categorias que se enquadra: <br><input type="text" name="categoria" required><br><br></p>
    <p>Legenda: <br><textarea name="legenda" placeholder="Coloque aqui a legenda que acha que se encondra na sua imagem." required></textarea><br><br><br>
    <p><button>Adicionar</button></p>
    </form>

</body>
</html>

<?php
    
if (!empty($_POST["categoria"]))
{    
    

    $idutilizadorFK = $_SESSION["idutilizador"];
    $legenda = $_POST["legenda"];
    $imagem_url = "img/".$_FILES["imagens"]["name"];
    
    $categoria = $_POST["categoria"];
            
        
            $sql2 = "SELECT idcategoria FROM categoria WHERE categoria LIKE '%$categoria%'";
            $idcategoria = 0;
            $result = $conn->query("$sql2");

            if($registo = $result->fetch_assoc()){
                $idcategoria = $registo["idcategoria"];
            }

            if($idcategoria){
                
                $sql = "INSERT INTO fotografia(legenda, imagem_url, idcategoria, idutilizadorFK) VALUES ('$legenda', '$imagem_url', '$idcategoria', '$idutilizadorFK')";
                //echo $sql;
                $conn->query($sql);
            }
            else {  
                $sqlcategoria = "INSERT INTO categoria(categoria) VALUES ('$categoria')";
                //echo $sqlcategoria;
                $conn -> query("$sqlcategoria");
                $idcategoria = $conn->insert_id;

                $sql = "INSERT INTO fotografia(legenda, imagem_url, idcategoria, idutilizadorFK) VALUES ('$legenda', '$imagem_url', '$idcategoria', '$idutilizadorFK')";
                //echo $sql;     
                $conn -> query("$sql");
            }
       
        $conn -> close();

    
    move_uploaded_file($_FILES["imagens"]["tmp_name"],"img/".$_FILES["imagens"]["name"]);

    echo "<br><br><br>
    <div id='inserida'>Fotografia inserida com sucesso</div>";

    //header("location: inserir_fotos.php");

}

?>
