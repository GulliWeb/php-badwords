<?php
// prendo il valore che si trova nella chiave paragraph 
$paragrafo = $_GET["paragraph"];
// prendo il valore che si trova nella chiave censored-word 
$cens = $_GET["censored-word"];

// Una volta preso la parola la trasforomo in * grzie al metodo php str_replace
?> 

<!-- HTML -->
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         <?php echo strlen($paragrafo) ?>;

        <!-- Stampo il testo da censurare tramte **** -->
        Il paragrafo censurato è: <br>
        <?php echo nl2br(htmlspecialchars($cens)); ?>;
    
        </h1>  
      </div>
    </div>
  </div>
</body>
</html>