<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php 
        $cookie_name = 'user';
        $cookie_value = 'Lepsze jutro było wczoraj';

        setcookie($cookie_name, $cookie_value, time() + 7200, '/');
    ?>

<body>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'egzamin');

    $sql = "SELECT typ, linie FROM samoloty";

    $zapitanie = $db -> query($sql);
    echo '<table>';
    foreach($zapitanie as $row) {
        echo '<tr>';
        echo '<td>';
        echo $row['typ'];
        echo '</td>';
        echo '<td>';
        echo $row['linie'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>

        <form method="post">
            <input type="text" name="imie" class="form-control">
            <input type="text" name="nazwisko" class="form-control">
            <input type="submit" name="submit" value="submit">
            </form>
            <?php
              $db = new mysqli('localhost', 'root', '', 'pilkarze');


              $imie = $_POST['imie'];
              $nazwisko = $_POST['nazwisko'];
              $sql = "INSERT INTO zawodnik (imie,nazwisko)  VALUES ('$imie','$nazwisko')";
            
              if ($db -> connect_error) {
                error_log('blad polaczenia'.$mysqli -> connect_error);
              } else {
                $stmt = $db -> prepare($sql);
                $stmt -> execute();
                echo 'Succes';
                $stmt -> close();
                $db -> close(); 
                }

            ?>
        <div>
                <?php
                if(!isset($_COOKIE[$cookie_name])) {
                    echo 'ciasko';
                } else {
                    echo $cookie_value;
                }

                ?>
        </div>

</body>
</html>