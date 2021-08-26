<!-- 
Utilizzare questo array di partenza e
stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
rettangolo verde.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 6</title>

    <style>
        .pm {
            background-color: green;
        }

        .teachers{
            background-color: gray;
        }

    </style>
</head>
<body>
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

    for ($i=0; $i < count($db) ; $i++) { 

    }



?>


</body>
</html>

