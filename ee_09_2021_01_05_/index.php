<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="styl5.css"/> 
</head>
    <?php
    // cookies need to be declared up here !!! 
    $cookie_name = 'user';
    $cookie_value = 'Witaj ponownie na stronie lotniska';

    setcookie($cookie_name, $cookie_value, time() + 7200, '/');
    ?>

<body>

   
    <div class="container"> 
        <div class="zdjecie"> 
            <img src="zad52.png"> 
        </div> 
        <div class="przyloty-h1"> 
            <h1> Przyloty </h1> 
        </div>
        <div class="przyloty"> 
            <h3> przydatne linki </h3> 
            <a href="kwerendy.txt"> Pobierz </a>
        </div>
    </div>

    <div class="main">
        <?php
 
        $db = mysqli_connect('localhost', 'root', '', 'egzamin');

        if ($db -> connect_error){
            error_log('blad polaczenia'.$mysqli -> connect_error);
        } else {
            echo 'jest polaczenie';
        }

        $pytanie = 'SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty order by czas';

        $wynik = $db -> query($pytanie);

        ?>
        <table> 
            <tr>
                <th> CZAS </th>
                <th> KIERUNEK </th>
                <th> NUMER REJSU </th>
                <th> STATUS </th>
            </tr>
            <?php 
            foreach ($wynik as $row){
                echo '<tr>';
                echo '<td>';
                echo $row['czas'], $row['kierunek'], $row['nr_rejsu'], $row['status_lotu'];
                echo '</td>';
                echo '</tr>';

            }


            mysqli_close($db);
            ?> 
               
        
           
            
             
            
          
        </table>
    </div>

    <footer>
        <div class="powitanie">
            <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo 'Ta strona uzywa ciasteczek';
            } else {
                echo $cookie_value;
            }

            ?>
        </div>
        <div class="autor">
            Witaj na stronie
        </div>
    </footer>
</body>
</html>