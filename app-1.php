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
        $links = array("https://github.com", "https://www.php.net");

        for ($i=0; $i<count($links);$i++){
            echo '<a href="' . $links[$i] . '">' . ($i+1) . '</a><br>';
        }


    ?>


</body>
</html>