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
  <title>PHP BADWORDS</title>
</head>
<body>
  <div class="wrapper">
    <div class="row">
      <div class="col-12">
        <h1>
         <form action="./call.php" method="GET">
           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label" id="paragraph">Paragrafo</label>
             <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
             <div class="mb-3">
               <label for="exampleFormControlTextarea1" class="form-label" id="censured-word">Parola da censurare</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
           </div>
         </form>
        </h1>  
      </div>
    </div>
  </div>
</body>
</html> 