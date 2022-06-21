<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Piłka nożna</title>
</head>
<body>
    <header><h3>Reprezentacja polski</h3>
    <img src='obraz1.jpg' alt="reprezentacja">
    <header>
    <?php
    $napis = 'Programowanie w PHP';
    $test = substr($napis, 3, 5);
    echo $test;
    ?>
    <div id="lewy">
        <form method="POST">
            <select name="task"> 
                <option value="1" name="1"> bramkarz </option> 
                <option value="2" name="2"> obrońca </option> 
                <option value="3" name="3"> pomocnik </option> 
                <option value="4" name="4"> napastnik </option> 
            </select>
            <input type="submit"/>
        </form>

        <?php 
        /*
        $db = mysqli_connect('localhost', 'root', '', 'egzamin1');

        // sdfdfs

        # fdsfsd 

   
        //sdfsd
    
        

        if (mysqli_error($db) == true) {
            echo 'error';
        } else {
            $pozyjca = $_POST['task'];
            $zapytanie = "SELECT imie, nazwisko FROM zawodnik where pozycja_id = $pozyjca";
            $wynik = $db -> query($zapytanie);

            foreach ($wynik as $row) {
                echo $row['imie'].$row['nazwisko'];
            }
            
           $przygotowanie = $db -> prepare($zapytanie);
            $przygotowanie -> execute();
           

            echo 'jest polaczenie';
            // echo $przygotowanie;
        }

        $zapytanie1="select zespol, punkty, grupa from liga where punkty = 34 order by punkty asc ";
        $wynik1 = $db -> query($zapytanie1);
        foreach($wynik1 as $row)
        {
            echo '<div style="background-color: aqua;">';
            echo '<h2>'.$row['zespol'].'</h2>';
            echo '</div>';
        }
        mysqli_close($db);
        */
        ?>
    </div> 
    <div id="prawy">
    </div>
    <div id="glowny">
    </div>
    <div id="liga">
    </div>

   
</body>
</html>