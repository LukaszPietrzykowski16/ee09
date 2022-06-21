<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

    <form>


    </form>

    <?php
        $db = mysqli_connect('localhost', 'root', '', 'egzamin');

        $typSamoloty = $_POST['typ'];
        $typLinia = $_POST['linia'];

        $sql = 'INSERT INTO samoloty (typ, linie) VALUES ('$typ', '$typLinia')';


    ?>
</body>
</html>