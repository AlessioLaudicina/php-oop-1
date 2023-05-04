<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e
 metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php 
include 'movies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOTSTRAP -->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

     <!-- CSS -->
     <link rel="stylesheet" href="css/style.css">

      <!-- VUE -->
      <script src="https://unpkg.com/vue@3"></script>
      <title>Movies</title>
</head>
<body>
    
    <div id="app">

    <header class="bg-dark">
      <div class="container d-flex align-items-center justify-content-center py-2">
        <div div class="row text-white">
          <div class="col">
            <h1>My movies list</h1>
          </div>
        </div>



      </div>
    </header>







    </div>
   
    






    <script src="js/script.js"></script>
</body>
</html>