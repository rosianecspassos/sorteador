<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Sorteador</title>
</head>
<body>
<main> 
    <?php 
    //Mínimo 0 máximo 100. 
  $numero = mt_rand(0,100); 
  echo "<p> Número: <strong>$numero </strong></p> "
    ?> 
    <button onclick="javascript:document.location.reload()">Sortear</button> 
    </main>
</body>
</html>