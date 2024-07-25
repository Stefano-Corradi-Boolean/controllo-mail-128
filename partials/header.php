<?php

// controllo se la sessione è già aperta
// altimenti la apro
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

if(isset($_SESSION['email'])){
  $is_registred = true;
}else{
  $is_registred = false;
}


?>

<header>
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="about.php">Chi siamo</a>
    </li>
    <?php if(!$is_registred): ?>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="iscrizione.php">Iscriviti!</a>
      </li>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="logout.php">Cancellati</a>
      </li>
    <?php endif; ?>
  </ul>
</header>
