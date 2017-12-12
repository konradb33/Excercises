<?php 
  $login = $_POST['login'];
  $password = $_POST['haslo'];

  $login1 = "uczen";
  $password1 = "admin";
 
  if ($login != $login1 && $password != $password1){
    echo "Wpisales zla nazwe. Zaloguj sie jeszcze raz !";
  }else{
    echo "Brawo! Zalogowales sie :D";
  }
  
  

  
?>