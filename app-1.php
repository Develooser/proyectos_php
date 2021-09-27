<!-- 
Realizar un array con enlaces de páginas webs, 
mostrar por pantalla 
números que al darle click lleven a esos enlaces.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays, GET y POST</title>
</head>
<body>
    <?php
       
        //var_dump(variable) -> sirve para que te muestre que tipo de dato es, y que contiene esa variable.

        $usuarios[0]['username'] = "user";
        $usuarios[0]['password'] = "0123";
        $usuarios[1]['username'] = "user1";
        $usuarios[1]['password'] = "1234";
        $usuarios[2]['username'] = "user2";
        $usuarios[2]['password'] = "abcd";
        $identificador = 0;


        if (isset($_POST['user'])){
            foreach ($usuarios as $usuario){
                if ($usuario['username'] == $_POST['user']){
                    $identificador = 1;
                    if(isset($_POST['password'])){
                        if ($usuario['password'] == $_POST['password']){
                            echo "<p>Se ha iniciado sesión correctamente</p>";
                    
                        } else {
                            echo "<p>Contraseña incorrecta</p>";
                        }
                    }                
                }
            }
        }

        if ($identificador == 0){
            echo "<p>No existe el usuario</p>";
        }


        //IMAGENES Y ENLACES GET

        $links[0]['url'] = "https://github.com";
        $links[1]['url'] = "https://www.php.net";
        $links[2]['url'] = "https://www.w3schools.com/";

        $links[0]['img'] = "git.jpeg";
        $links[1]['img'] = "php.png";
        $links[2]['img'] = "W3S.png";

        


        if(isset($_GET['id']) && $_GET['id'] <= (count($links)) && $_GET['id'] > 0){
            
                echo '<a href="' . $links[($_GET['id']- 1)]['url'] . '"><img src="' .$links[$_GET['id'] -1 ]['img']. '"  width="100">  </img></a>'; 

        } else {
            foreach ($links as $link){        
                echo '<a href="' . $link['url'] . '"><img src="' .$link['img']. '"  width="100">  </img></a>';                 
            }
        }

        
    ?>

    <p>Formulario con tipo de texto a GET</p>
    <form method="GET" action="app-1.php">
        <input type="text" name="id" placeholder= "id"/>
        <input type="submit"/>
    </form>
    <p>Formulario con botones a GET</p>
    <form method="GET" action="app-1.php">
        <input type="submit" name="id" value="1"/>
        <input type="submit" name="id" value="2"/>
        <input type="submit" name="id" value="3"/>
    </form>

    <p>Formulario con tipo de texto a POST</p>
    <form method= "POST" action="app-1.php">
        <input type="text" name="user" placeholder= "usuario"/>
        <input type="submit"/>
    </form>

    <p>Comprobar usuario y contraseña</p>
    <form method= "POST" action="app-1.php">
        <input type="text" name="user" placeholder= "usuario"/>
        <input type="password" name="password" placeholder= "contraseña"/>
        <input type="submit"/>
    </form>

</body>
</html>