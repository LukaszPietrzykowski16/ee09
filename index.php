<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 
    body {
        background-color: black;
        color: white;
    }

    .tabela {
        display: flex;
        justify-content: center;
    }
    </style>

</head>


<body>
    <div class="tabela">
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'sklep');


        if (mysqli_error($db) == true) {
            echo 'error';
        } else {
            echo 'good working';
        }

        echo "<table>
        <tr>
            <th> numer </th>
            <th> nazwa podzespolu </th>
            <th> opis </th>
            <th> cena </th>
        </tr>
        ";

        $zapytanie = 'SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < "1000"';

        $wynik = $db -> query($zapytanie);

        foreach ($wynik as $row) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nazwa']."</td>";
            echo "<td>".$row['opis']."</td>";
            echo "<td>".$row['cena']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($db);
        ?>
    </div>



</body>
</html>