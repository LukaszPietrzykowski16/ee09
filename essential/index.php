<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'newdatabase');

    if ($db -> connect_error) {
        error_log('blad polaczenia'.$mysqli -> connect_error);
    } else {
        echo 'jest polaczenie';
    }

    $pytanie = 'SELECT imie, nazwisko, sex FROM person WHERE id=2';

    $wynik = $db -> query($pytanie);

    ?>
    <div class="container">
        <div class="lewy">
            <?php 
            foreach($wynik as $row){
                 echo $row['imie'];
                 echo $row['nazwisko'];
            }
            $db -> close();
            ?>
            
        </div>
        <div class="prawy">
            <form method="post">
            <input type="text" name="id" class="form-control">
            <input type="text" name="imie" class="form-control">
            <input type="text" name="nazwisko" class="form-control">
            <input type="date" name="date2" class="form-control">
            <input type="submit" name="submit" value="submit">
            </form>
            <?php
              $db = new mysqli('localhost', 'root', '', 'newdatabase');

              $id = $_POST['id'];
              $imie = $_POST['imie'];
              $nazwisko = $_POST['nazwisko'];
              $date2 = $_POST['date2'];
              $sql = "INSERT INTO person (id,imie,nazwisko,sex)  VALUES ('$id','$imie','$nazwisko', $date2)";
            
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
        </div>
    </div>
    <div style="clear: both;"> </div>
    <div class="container">
        <div class="lewy2">

        </div>
        <div class="prawy2">
            
        </div>
    </div>
    


</body>
</html>