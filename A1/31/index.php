 <?php
$email = "manueellopez@gmailcom";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email es valido");
} else {
  echo("$email no es valido como email");
}
?> 