<?php
//inici de sessió
session_start();
//creació de les cookies
$dades=(array) json_decode(file_get_contents('app/dades.json'));
//recojemos lo enviado por el metodo post desde formulario
$login=$_POST['login'];
$pass=$_POST['pass'];
//Comprueva que la informacion puesta en los input esta en el fichero json
if(!empty($_POST['login']) && !empty($_POST['pass'])){
    if($login == $dades['login'] && $pass ==$dades['pass']){
        
        if($_POST['recuerdame'] == true){
            setcookie("cookielogin",$login);
            setcookie("cookiepass",$pass);
            $recordar1=$_COOKIE["cookielogin"];
            $recordar2=$_COOKIE["cookiepass"];
            
            //Definimos como se guardara la informacion de la variable hora y dia
            $hora = date("h:i:s");
            $dia = date("d/m/Y");
            
            
            //Creamos las cookies
            setcookie("lasthourvisit1",$hora);
            setcookie("lastdayvisit2",$dia);
            
            $recordar3= $_COOKIE['lasthourvisit1'];
            $recordar4= $_COOKIE['lastdayvisit2'];
            
          if(!isset($_SESSION['count'])){
                $_SESSION['count']=1;
            }else{
                $_SESSION['count']++; 
            } 
            
            //nos redijira a la pagina bienvenido
            header("Location: /A2/pages/bienvenido.php");
            
   
        }
        
           
    //Si el login no es correcto  nos dira lo qu contiene el siguiente echo    
    }else{
        echo 'Contraseña incorrecta';
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina de inicio</title>
    </head>
    <body>
        <h1>Inicia sesión</h1>
        <!-- Formulario en metodo post que enviara los registros del usuario"-->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <!--<h1><?= $dades['login'] ?></h1>-->
            <label>Indica tu nombre de usuario</label><br>
            <input type="text" name="login"/><br><br>
            <label>Indica tu contraseña</label><br>
            <input type="password" name="pass"/><br><br>
            <label>Recorda'm</label><br>
            <input type="checkbox" name="recuerdame"/><br><br>
            <input type="submit" name='enviar' value="Iniciar Sesión"/>
        </form>
        
    </body>
</html>