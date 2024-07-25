<?php

// apro la sessione
session_start();

// se esiste la variabile in sessione la salvo in una mia variabile altrimenti rendirizzo alla home
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
}else{
  header('Location: ./index.php');
}

include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>
  <div class="container my-5">
    <h1>Grazie!</h1>
      <p>Il tuo indirizzo email <strong><?php echo $email ?></strong> è stato registrato correttamente</p>
  </div>

<?php 
  include __DIR__ . '/partials/footer.php';
?>