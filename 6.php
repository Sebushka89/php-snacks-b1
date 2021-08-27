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
        <!--<?php// foreach ($db as $ruolo => $persone) {
                 //if ($ruolo == 'teachers') { ?>
                    <div class="grey">
                    <?php
                    //} else { ?>
                    <div class="green">
                    <?php// }
                    //echo $ruolo . '<br>';
                    //echo '<br>';
                    //foreach ($persone as $persona) {
                    //echo $persona['name'] . ' ';
                    //echo $persona['lastname'] . '<br>';
                    //echo '<br>';
                    //}?>
                </div>
            <?php
                //}
            ?>-->

            <div class=grey>
            <?php
                for ($i=0; $i < count($db['teachers']); $i++) {
                echo "{$db['teachers'][$i]['name']} {$db['teachers'][$i]['lastname']} <br/>";
                }
            ?>
            </div>

            <div class=green>
            <?php
            for ($x=0; $x < count($db['pm']); $x++) {
                echo "{$db['pm'][$x]['name']} {$db['pm'][$x]['lastname']} <br/>";
                }
            ?>

            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing:border-box;
                }
                .green {
                    background-color: lightgreen;
                    width: 50%;
                    float: left;
                }
                .grey {
                    background-color: lightgrey;
                    width: 50%;
                    float: left;
                }
            </style>
     </body>
 </html>