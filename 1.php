<!-- 
    Creiamo una struttura dati che rappresenta le partite di basket
    di un’ipotetica tappa del calendario.
    Ogni array interno conterrà le seguenti informazioni:
    - una squadra di casa
    - una squadra ospite
    - punti fatti dalla squadra di casa
    - punti fatti dalla squadra ospite
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <?php
        $partite = [

            [
                "casa" => "Olimpia Milano",
                "ospie" => "Cantu",
                "casaPunti" => 55,
                "ospitePunti" => 60,
            ],
            [
                "casa" => "Varese",
                "ospie" => "Libertas Livorno",
                "casaPunti" => 50,
                "ospitePunti" => 56,
            ],
            [
                "casa" => "Reyer Venezia",
                "ospie" => "Fortitudo Bologna",
                "casaPunti" => 100,
                "ospitePunti" => 80,
            ]
        ];

        for ($i = 0; $i < count($partite); $i++){
            $string = "{$partite[$i]['casa']} - {$partite[$i]['ospie']} | {$partite[$i]['casaPunti']}-{$partite[$i]['ospitePunti']} <br>";
            echo $string;
        }


    ?>
    
</body>
</html>