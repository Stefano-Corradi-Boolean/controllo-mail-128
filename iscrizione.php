<?php


// includo il file contenete la/le funzioni
require_once __DIR__  . '/functions.php';

// se viene inviata la chiave email e se non è vuota
if(isset($_POST['email']) && !empty($_POST['email'])){
  $response = checkValidEmail($_POST['email']);
  $message = $response ? 'Complimenti, ti sei iscritto' : 'Inserisci un indirizzo email corretto';

  // se l'indirizzo eamil è valido
  if($response){
    // apro la sessione
    session_start();

    // salvo l'indirizzo in sessione
    $_SESSION['email'] = $_POST['email'];

    // reindirizzo alla pagina success.php
    header('Location: ./success.php');

  }

}


include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

  <div class="container my-5">
    <?php if(!isset($response)): ?>
      <h1>Iscriviti alla newsletter</h1>
      <form action="iscrizione.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input
          id="email"
          class="form-control"
          placeholder="name@example.com"
          type="text"
          name="email"
          >
        </div>
        <button type="submit" class="btn btn-primary me-3">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>
      </form>
    <?php else: ?>
      <h1><?php echo $message ?></h1>
    <?php endif; ?>
  </div>

<?php 
include __DIR__ . '/partials/footer.php';
?>