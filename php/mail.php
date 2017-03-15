<?php

   $recepient = "shtinda98@ukr.net";
   $sitename = "Ternop";

   $name = trim($_POST['inputName']);
   $email = trim($_POST['inputEmail']);
   $text = trim($_POST['inputMessage']);
   $message  = "Ім'я: $name \n Email: $email \n Повідомлення: $text";

   $pagetitle = "Нове повідомлення з сайту \"$sitename\"";
   mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset = \"utf-8\" \n From: $recepient");

?>