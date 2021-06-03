<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charmander Card</title>

    <link rel="stylesheet" href="style/style.css">
</head>


<?php
$pokemon = array(
    'Nombre'    => 'Charmander',
    'Tipo'    => 'Fuego',
    'Debilidad'    => 'Agua',
    'Altura'    => '0,60 m',
    'Peso'    => '8,5Kg',
    'Descripción'    => 'Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de
        piel anaranjado y su cola con la punta envuelta en llamas. Charmander, como sus evoluciones Charmeleon y
        Charizard, tiene una pequeña llama en la punta de su cola. La intensidad con la que esta arde es un
        indicador del estado físico y emocional de este Pokémon.',
    'Imagen'        => 'img/charmander.png'
);
?>

<body>
    <main>
        <?php
            echo '<h2>' . $pokemon['Nombre'] . '</h2>';
            
            echo '<figure><img src=' . $pokemon['Imagen'] . '></img></figure>'; 

            echo '<article>';
            
            foreach ($pokemon as $key => $value) {
                if ($key == 'Nombre') {
                    continue;
                }
                else if ($key != 'Imagen') {                
                    echo '<p><strong>' . $key . ': </strong> ' . $value . '</p>';
                }  
            };

            echo '</article>'
        ?>
    </main>

</body>

</html>