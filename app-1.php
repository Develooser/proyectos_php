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
    <title>Enlaces</title>
</head>
<body>
    <?php
        /*$links = array("https://github.com", "https://www.php.net");
        $images = array("/img/git.jpeg", "/img/php.png");
        $i = 0;

        for ($i=0; $i<count($links);$i++){
            echo '<a href="' . $links[$i] . '">' . ($i+1) . '</a><br>';
        }*/

        /*foreach ($links as $link){
            echo '<a href="' . $link . '">' . $i++ . '</a><br>'; 
        }*/
        //var_dump(variable) -> sirve para que te muestre que tipo de dato es, y que contiene esa variable.


        $links[0]['url'] = "https://github.com";
        $links[1]['url'] = "https://www.php.net";

        $links[0]['img'] = "git.jpeg";
        $links[1]['img'] = "php.png";

        foreach ($links as $link){        
           echo '<a href="' . $link['url'] . '"><img src="' .$link['img']. '"  width="100">  </img></a><br>'; 
            
        }

    ?>


</body>
</html>