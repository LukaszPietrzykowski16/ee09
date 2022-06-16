<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='first-script'>
        <?php 
            $db = mysqli_connect('localhost', 'root', '', 'ptaki');

            $sql = "SELECT id, Gromady_id, gatunek, wystepowanie FROM `zwierzeta` WHERE Gromady_id=4 OR Gromady_id=5";

            $zapytanie = $db -> query($sql);

            foreach ($zapytanie as $row) {
                echo '<div>';
                echo $row['id'];
                echo $row['gatunek'];
                echo 'Wystepowanie:'.$row['wystepowanie'];
                echo '</div>';
            }

            mysqli_close($db);
        ?>

        <?php 
            $db2 = mysqli_connect('localhost', 'root', '', 'ptaki');

            $sql2 = "SELECT gatunek, obraz FROM `zwierzeta` WHERE Gromady_id=4";

            $zapytanie2 = $db2 -> query($sql2);

            foreach ($zapytanie2 as $row2) {
                echo '<div>';
                echo $row2['gatunek'];
                echo "<img src=".$row2['obraz']."/>";
                echo '</div>';
            }

            mysqli_close($db2);
        ?>

        <img src="wrona.jpg"/>
    </div>
</body>
</html>