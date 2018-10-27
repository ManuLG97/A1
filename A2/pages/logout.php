<?php
    
     //borrar cookies del navegador
     setcookie('cookielogin',null, time()-3600, '/');
     setcookie('cookiepass',null, time()-3600, '/');
     setcookie('lasthourvisit1',null, time()-3600, '/');
     setcookie('lastdayvisit2',null, time()-3600, '/');
      //servidor
     // Borra todas las variables de sesión 
     unset($_COOKIE['cookielogin']);
     unset($_COOKIE['cookiepass']);
     unset($_COOKIE['lasthourvisit1']);
     unset($_COOKIE['lastdayvisit2']);
     session_destroy();
     
     //Te lleva a index.php
     header("Location: ..\index.php");
     
?>