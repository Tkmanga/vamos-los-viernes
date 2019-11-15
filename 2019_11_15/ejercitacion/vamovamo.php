<?php

$user = [
    'nombre' => 'Alejandra',
    'apellido' => 'González',
    'edad' => 27,
    'hobbies' => ['Cine','Correr','Leer', 'Cocinar', 'Cantar', 'Volar', 'Tremendo hobbie']
];

$users = [
    [
        'nombre' => 'Alejandra',
        'apellido' => 'González',
        'edad' => 27,
        'hobbies' => ['Cine','Correr','Leer', 'Ir a la cancha', 'Cocinar']
    ],
    [
        'nombre' => 'Herni',
        'apellido' => 'Skywalker',
        'edad' => 29,
        'hobbies' => ['Star Wars','Fútbol','Música']
    ],
    [
        'nombre' => 'Leia',
        'apellido' => 'Organa',
        'edad' => 30,
        'hobbies' => ['Ser princesa','Ser crack','Ser crack']
    ],
    [
        'nombre' => 'Han',
        'apellido' => 'Solo',
        'edad' => 31,
        'hobbies' => ['Manejar el Halcón Milenario','Escuchar Backstreet Boys','Ser crack']
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practicamos PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Usuarios:</h2>
    <hr>
    <h4><?php echo $user['nombre'] . ' ' . $user['apellido'] . ' (' . $user['edad'] . ')'?></h4>
    <ul>
        <?php
            foreach($user['hobbies'] as $hobbie) {
                echo "<li>" . $hobbie . "</li>";
            }
        ?>
    </ul>
    <hr>






    <h2>Usuarios:</h2>
    <?php foreach($users as $user): ?>
        <h4><?= $user['nombre'] . ' ' . $user['apellido'] . ' (' . $user['edad'] . ')'?></h4>
        <span>Sus hobbies son:</span>
        <ul>
            <?php foreach($user['hobbies'] as $hobbie): ?>
                <li><?= $hobbie ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>





</body>
</html>