<?php


// ricevo come parametro una stringa
// se è formattata correttamente restituisco true altrimenti false
function checkValidEmail($email){
  $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  return preg_match($pattern, $email);
}