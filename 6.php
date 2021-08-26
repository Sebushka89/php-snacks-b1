<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
 <html lang="it" dir="ltr">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title></title>
     <link rel="stylesheet" href="style.css">
     </head>
     <body>
         <?php foreach ($db as $ruolo => $persone) {
                 if ($ruolo == 'teachers') { ?>
                    <div class="grey">
                    <?php
                    } else { ?>
                    <div class="green">
                    <?php }
                    echo $ruolo . '<br>';
                    echo '<br>';
                    foreach ($persone as $persona) {
                    echo $persona['name'] . ' ';
                    echo $persona['lastname'] . '<br>';
                    echo '<br>';
                    }?>
                </div>
            <?php
                }
            ?>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing:border-box;
                }
                .green {
                    background-color: green;
                    width: 50%;
                    height: 100px;
                    float: left;
                }
                .grey {
                    background-color: grey;
                    width: 50%;
                    height: 100px;
                    float: left;
                }
            </style>
     </body>
 </html>