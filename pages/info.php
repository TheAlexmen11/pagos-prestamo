<?php
$fechas = ["27/12/2021","27/01/2022","27/01/2022","25/02/2022","27/03/2022","27/04/2022","27/05/2022","27/06/2022","27/07/2022","27/08/2022","27/09/2022","27/10/2022","27/11/2022","27/12/2022","27/01/2023","25/02/2023","27/03/2023","27/04/2023","27/05/2023"];
$pagos= [1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/styles.css">

</head>
<body>
    <nav>
        <div class="cont-btn">
            <button class="btnSalir">salir</button>
        </div>
        <h1>Bienvenido {Usuario}</h1>
    </nav>
    <main>
        <table border="1">
            <tr class="title">
                <td>numero</td>
                <td>fecha</td>
                <td>plazo</td>
                <td>Capital</td>
                <td>Total a Pagar</td>
            </tr>
            <?php
            for ($i=0; $i < 18 ; $i++) { 
                echo("<tr class=".(($pagos[$i]==1)?'pagoComplet':'pagoIncomplet').">
                <td >Nº ".($i+1)."</td>
                <td>".$fechas[$i]."</td>
                <td>fecha</td>
                <td>fecha</td>
                <td>S/.333.00</td>
                </tr>");
            }
            ?>
        </table>
    </main>
</body>
</html>