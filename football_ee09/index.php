<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: black;
            color: white;
        }

        .container {
            display: flex;
        }

        .wynik {
            border: 1px solid white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php

        // good
        $db = mysqli_connect('localhost', 'root', '', 'pilkarze');

        if (mysqli_error($db)) {
            echo 'error';
        } else {
            echo 'all good';
        }

        $zapytanie = 'SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = "EVG";';

        $wynik = $db -> query($zapytanie);

        foreach ($wynik as $row) {
            echo '<div class="wynik">';
            echo $row['zespol1'],  $row['zespol1'];
            echo '<br>';
            echo $row['wynik'];
            echo '<br>';
            echo $row['data_rozgrywki'];
            echo '</div>';
        }

        mysqli_close($db);
        ?>
    </div>

    <div class='form-section'>
        <form method="POST"> 
            <input type="text" name='text'>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'pilkarze');
    
    if (mysqli_error($db)) {
        echo 'error';
    } else {
        $valuephp = $_POST['text'];
        $sql = "SELECT imie, nazwisko, pozycja_id FROM zawodnik WHERE pozycja_id='$valuephp'";
        $wynik = $db -> query($sql);
        foreach ($wynik as $row) {
            echo $row['imie'],$row['nazwisko'];
        }
        
    }

    

    ?>
</body>
</html>