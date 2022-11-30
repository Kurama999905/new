<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
<?php
$docelowy_katalog = "uploads/";
$nazwa_wprowadzona=$_POST['tekst'];
$nazwa_pliku=$nazwa_wprowadzona.mb_substr($_FILES['plik']['name'],-4);
$sciezka_pliku = $docelowy_katalog . basename($nazwa_pliku);
$error=0;
$nazwa_lista_wprowadzona=str_split($nazwa_wprowadzona);
if(strlen($nazwa_wprowadzona)<3){
    echo "Za krótka nazwa pliku. Podaj nazwę która, będzie miała conajmniej 3 znaki";
    $error=1;
}
foreach($nazwa_lista_wprowadzona as $litera){
    if(!(ord($litera)>=97 && ord($litera)<=122) and !(ord($litera)>=65 && ord($litera)<=90)){
        echo "Nazwa pliku musi składać się ze znaków a-Z <br/>";
        $error=1;
        break;
    }
}
if($_FILES['plik']['size']>2*1024*1024){
    echo "Twój plik jest większy niż 4 MB";
    $error=1;
}
if(!$_FILES['plik']['type']=="image/png" || !$_FILES['plik']['type']=="image/jpg"){
    echo "Zły typ pliku. Akceptowane typy to: JPG, PNG";
    $error=1;
}
if($error!=0){
echo '<h1><a href="http://localhost/php-import/php/strona/index1.html">Ponowne przesyłanie.</a></h1>';
}
else{
    move_uploaded_file($_FILES["plik"]["tmp_name"], $sciezka_pliku);
    echo "<h1>Udało się przesłać!</h1>
    <a style='text-decoration: none;' href='http://localhost/php-import/php/strona/index2.php'>
    <button>Zobacz pliki</button></a>";
}
?>
</body>
</html>