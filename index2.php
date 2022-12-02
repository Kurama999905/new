<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border: 3px solid black ;
            border-collapse: collapse;
            margin-left:auto;
            margin-right:auto;
        }
        th,
        td {
            border: 2px solid black ;
            border-collapse: collapse;
        }
        div {text-align: center;}
        body {background-color:grey;}
        button {
            cursor: pointer;
        }
        </style>
</head>
<body>
  <div>
    <table>
        <tr>
          <th>Nazwa pliku</th>
          <th>Miniatura pliku</th>
          <th>Przycisk do wyświetlania podglądu</th>
          <th>Usuń plik</th>
        </tr>
        <tr>
        <?php
        $katalog = "uploads/";
        $pliki = array_diff(scandir($katalog), [".", ".."]);
        if(count($pliki)==0){
          echo "<tr><td colspan='4'>Brak przesłanych plików</td></tr>";
        }
        else{
        $modal="modal";
        $button_open="open";
        $button_close="close";
        $delete="del";
        $button_delete="b_d";
        $button_y="y";
        $button_n="n";
        $wartosc="m";
        foreach ($pliki as $plik) {
          $sciezka_do_pliku=$katalog.$plik;
          echo <<<END
            <tr>
              <td>$plik</td>
              <td >
                <img src='$sciezka_do_pliku' alt='Miniaturka' width='5%' height='5%'>
              </td>
              <td>
                <dialog class='modal' id='$modal'>
                  <header>
                    <button type='button' id='$button_close'>Zamknij</button>
                    <h1>$plik</h1>
                  </header>
                  <img src='$sciezka_do_pliku' alt='obraz'>
                </dialog>
                <button type='button' id='$button_open'>Otwórz</button>
                <script>
                  document.getElementById('$button_open').onclick = () => $modal.showModal();
                  document.getElementById('$button_close').onclick = ()=>$modal.close();
                </script>
              </td>
              <td>
                <dialog class='modal' id='$delete'>
                  <header>
                    <p>Na pewno chcesz usunąć plik $plik?</p>
                    <a style='text-decoration: none;' href='http://localhost/php-import/php/strona/dele.php?sciezka_do_pliku=$sciezka_do_pliku'>
                      <button type='button'>Tak</button>
                    </a>
                    <button type='button' id='$button_n'>Nie</button>
                  </header>
                </dialog>
                <button type='button' id='$button_delete'>Usuń</button>
                <script>
                  document.getElementById('$button_delete').onclick = () => $delete.showModal();
                  document.getElementById('$button_n').onclick = ()=>$delete.close();
                </script>
              </td>
            </tr>
          END;
          $modal.='1';
          $button_close.='1';
          $button_open.='1';
          $delete.='1';
          $button_delete.='1';
          $button_y.="1";
          $button_n.="1";
          $wartosc.='1';
        }
        }
        ?>
        </tr>
      </table>
      </div>
</body>
</html>
