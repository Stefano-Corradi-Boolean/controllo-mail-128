<?php


// ricevo come parametro una stringa
// se è formattata correttamente restituisco true altrimenti false
function checkValidEmail($email){
  $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  return preg_match($pattern, $email);
}


// se viene inviata la chiave email e se non è vuota
if(isset($_POST['email']) && !empty($_POST['email'])){
  $response = checkValidEmail($_POST['email']);
  $message = $response ? 'Complimenti, ti sei iscritto' : 'Inserisci un indirizzo email corretto';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

  <title>Controllo email</title>
</head>
<body>

  <div class="container my-5">
    <?php if(!isset($response)): ?>
      <h1>Iscriviti alla newsletter</h1>
      <form action="index.php" method="POST">
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
        <button class="btn btn-primary">Invia</button>
      </form>
    <?php else: ?>
      <h1><?php echo $message ?></h1>
    <?php endif; ?>
  </div>
  
</body>
</html>