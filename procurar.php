
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
    <title>Procurar</title>

    <style>
        #div1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            margin-top: 5%;
            margin-left: 40%;
            text-align: center;
            width: 400px;
            height: 120px;
            margin-bottom: 30%;
            border: 2px solid white;
            border-radius: 10px;
            padding-top: 50px;
            background-color: rgb(0,0,0,0.2);
            font-size: 25px;
            position: absolute;
        }

        #foto{
            margin-top: 15%;
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
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body onload="displayImageSearch()">
    <br><br><br><br><br><br><br><br>
    <div id="div1">
        <form method="post">
            Pesquisar fotografias: <input type="text" name="pesquisa">
            <br><br>
            <button>Pesquisar</button>

        </form>
    </div>
</body>
</html>

<?php

    
if (isset($_POST["pesquisa"])){

    require("config.php");

    $pesquisa=$_POST["pesquisa"];
    $idutilizadorFK = $_SESSION["idutilizador"];

    $sql = "SELECT DISTINCT imagem_url from fotografia inner join categoria on categoria.idcategoria= fotografia.idcategoria
    where legenda like '%$pesquisa%' or categoria like '%$pesquisa%'";

    echo "<hr>$sql<hr>";
    $result=$conn->query($sql);

    while($registo = $result->fetch_assoc())
    {
    echo "<div id='pesquisa'>\n";
    $foto=$registo["imagem_url"];
    
    echo "<div id='foto'><img src='$foto'></div>";

    echo "</div>\n";
    }
}


?>

