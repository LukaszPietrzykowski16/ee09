<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style> 

    #nagalowek {
        text-align: center;
        background-color: darkgreen;
        color: white;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .container h4 {
        text-align: center;
        background-color: darkgreen;
    }
    
    .intrest {
        width: 90vw;
        
    }
    .intrest h4 {
        text-align: center;
        background-color: darkgreen;
    }
    .osoba {
       

    }

    #sekcja {
        display: flex; 
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

   
    </style> 
<body>
    <?php

    $serwer = 'localhost';
    $user = 'root';
    $pass = '';
    $baza = 'ukasz';
    $db = new mysqli($serwer, $user, $pass, $baza);

    if ($db -> connect_error) {
        error_log('blad polaczenia'.$mysqli -> connect_error);
    } else {
        echo 'polaczenie nawiazano';
    }
    $pytanie = "SELECT imie, nazwisko FROM osoby WHERE Hobby_id=1 OR Hobby_id=2"; 
    

    $wynik = $db -> query($pytanie);
    
    

   ?>
    <h1 id="nagalowek"> Portal społecznościowy </h1>
<div class="container">
   
    <div class="intrest">
    <h4 class="ha"> Moje zainteresowania </h4>
    <ul>
        <li> muzyka </li>
        <li> filmy </li>
        <li> komputer </li>
    </div>
    <h4 class="ha"> Moi znajomi </h4>
    <div id="sekcja">
    <?php
foreach($wynik as $row) {
    $osoba = $row["imie"].$row["nazwisko"];
    echo "<div class='osoba'> $osoba </div> <br> ";
}
?>
</div>

</div>
</body>
</html>