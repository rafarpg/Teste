<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<style>
    .cinza{
        background-color:silver;
    }
    .verde
    {
        background-color:green;
    }
</style>
<body>
    <br><br>
    <?php
    
    $valor = $_POST["valor"];

        for($x=1;$x<=10;$x++)
        {
        

            if($x%2 == 0)
            {
                $cor = "cinza";
            }
            else
            {
                $cor = "verde";
            }
            echo("<div class = '$cor'> $valor x $x = " . $valor*$x );
           
        }
    ?>
</body>
</html>