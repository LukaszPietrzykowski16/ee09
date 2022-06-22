function second(){
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
}
