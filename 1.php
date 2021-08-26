<?php
/* */
$partite= [

    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "casaPunti" => 55,
        "ospitePunti" => 60
    ],
    [
        "casa" => "Virtus Bologna",
        "ospite" => "Virtus Roma",
        "casaPunti" => 40,
        "ospitePunti" => 30
    ],
    [
        "casa" => "F.C Matera",
        "ospite" => "Inter",
        "casaPunti" => 55,
        "ospitePunti" => 1
    ],
];
for($i=0; $i< count($partite); $i++){
    //$string= $partite[$i]["casa"]."-" ....
    echo $string = "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['casaPunti']}-{$partite[$i]['ospitePunti']} " ;
};

?>