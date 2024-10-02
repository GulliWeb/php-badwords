<?php
?> 

<!-- HTML -->
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> <!-- Link al file CSS -->
  <title>PHP BADWORDS</title>
</head>
<body>
  <div class="wrapper">
    <h1>Gestore di Parole Censurate</h1>
    <form action="./call.php" method="GET">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Paragrafo</label>
        <input type="text" class="form-control" name="paragraph" placeholder="Inserisci il paragrafo" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Parola da censurare</label>
        <textarea class="form-control" name="censored-word" id="censored-word" rows="3" placeholder="Inserisci la parola da censurare" required></textarea>
      </div>
      <!-- Bottoni per inviare e resettare il form -->
      <button type="submit" class="btn btn-primary btn-xl">
        Invia
      </button>
      <button type="reset" class="btn btn-warning btn-xl">
        Reset
      </button>
    </form>
  </div>
</body>
</html>