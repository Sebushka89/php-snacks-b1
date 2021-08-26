<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
$class = [
  [
    'name' => 'John',
    'last_name' => 'Smith',
    'votes' => [
      9,8,7,6
    ]
  ],
  [
    'name' => 'Sara',
    'last_name' => 'Powels',
    'votes' => [
      5,8,2,5
    ]
  ],
  [
    'name' => 'Eric',
    'last_name' => 'Scott',
    'votes' => [
      6,9,8,4
    ]
  ],
];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 4</title>
  </head>
  <body>
    <?php
       for ($x = 0; $x < count($class); $x++) {
        // faccio la media dei voti
        $average = array_sum($class[$x]['votes']) / count($class[$x]['votes']);
        // stampo il tutto
        echo "Name: {$class[$x]['name']} <br> Surname: {$class[$x]['surname']} <br> Average votes: {$average} <br> <hr>";
      };
    ?>
  </body>
</html>