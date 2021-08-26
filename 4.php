<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà i seguenti dati:
-nome
-cognome
-un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 4</title>
</head>
<body>
    <?php
        $class = [
            [
                "nome" => "Mario",
                "cognome" => "Rossi",
                "voti" => [6,6,6,6],
            ],
            [
                "nome" => "Carlo",
                "cognome" => "Bianchi",
                "voti" => [1,6,8,10],
            ],
            [
                "nome" => "Luca",
                "cognome" => "Verdi",
                "voti" => [10,10,8,7],
            ]
        ];


        for ($i = 0; $i < count($class); $i++){
            // calcolo la somma dei voti
            $sum = array_sum($class[$i]["voti"]);

            // calcolo la media dei voti
            $media = $sum / count($class[$i]["voti"]);

            //compongo la mia srtinga
            $string = "{$class[$i]['nome']} {$class[$i]['cognome']}, la media dei voti è: $media<br>";

            //visualizzo
            echo $string;
        }

    ?>
    
</body>
</html>