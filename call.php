<?php
// prendo il valore che si trova nella chiave paragraph 
$paragrafo = $_GET["paragraph"];
// Prendo il numeor dei caratteri nella stringa del campo paragrafo
$paragraphLength = strlen($paragrafo);
// prendo il valore che si trova nella chiave censored-word 
$cens = $_GET["censored-word"];
$censLength = strlen($cens)
// Una volta preso la parola la trasforomo in * grzie al metodo php str_replace
?> 

<!-- HTML -->
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/call.css">
  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <title>PHP BADWORDS</title>
</head>
<body>
  <div class="wrapper">
    <div class="row">
      <div class="col-12">
        <h1>
        <!-- Stampo il paragrafo censurato con la sua relativa lunghezza -->
         <?php echo $paragrafo; ?> questo paragrafo ha una lunghezza di: 
         <?php echo $paragraphLength ?>;
        </h1>
    </div>
    <div class="col-12">
        <!-- Stampo il testo da censurare tramte **** -->
        <h1>
        Il paragrafo censurato è: <br>
        <!-- Tramite il metodo str_replace & str_Repeat inserisco al posto della stringa data tanti * quanto è la lunghezza della stringa. -->
        <?php echo str_replace($cens, str_repeat("*", $censLength -1), $cens)?>
        </h1>  
    </div>
    </div>
  </div>
</body>
</html>