<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--Daremos la bienvenida al usuario por su nombre de login-->
        <h1>Benvingut <?php echo $_COOKIE["cookielogin"];?> </h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
        <?php
        //Creamos lo que nos printara la hora y dia de inici0
        $visita = "Última visita a las ". $_COOKIE["lasthourvisit1"] . " del ". $_COOKIE["lastdayvisit2"];
        //la printamos
        echo $visita;
        echo "<br><br>";
        //ara que haya una pagina dentro de la nuestra en este caso he optado por el index
        $url = "../index.php";
               
        ?>
        <!--Para cambiar la url que se muestra-->
        <label>Indicar la url</label><br>
        <input type="text" name="url"/><br><br>
        <iframe src=<?php echo $url;?>></iframe><br><br>
        <a href="logout.php">Log out</a>
        </form>
        
    </body>
</html>