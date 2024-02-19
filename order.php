<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Podsumowanie zamówienia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
        echo "<h1>Podsumowanie zamówienia</h1>";

        $paczki=$_POST['paczki'];
        $grzebienie=$_POST['grzebienie'];
        $cenaP=0.99;
        $cenaG=1.29;
        $Suma=$cenaP*$paczki+$cenaG*$grzebienie;

        // <tr> - wiersz, <td> - kolumna
        echo '<table border="1" cellpadding="10">';
        
        echo "<tr>";
        echo "<td>Pączek (0.99 PLN/szt)</td>";
        echo "<td>$paczki</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Grzebień (1.29 PLN/szt)</td>";
        echo "<td>$grzebienie</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>SUMA</td>";
        echo "<td>$Suma</td>";
        echo "</tr>";

        echo "</table>";
        echo "<br>";
        echo '<a href="main.php">Powrót do strony głównej</a>'
    ?>
        
    </body>
</html>