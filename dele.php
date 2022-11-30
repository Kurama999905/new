<?php
$sciezka= $_GET['sciezka_do_pliku'];
unlink($sciezka);
header("Location: http://localhost/php-import/php/strona/index2.php");
?>