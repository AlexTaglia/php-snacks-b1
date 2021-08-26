<!-- 
    Passare 3 parametri GET: name, mail e age.
    Verificare (cercando i metodi che non conosciamo nella documentazione)
    - che name sia più lungo di 3 caratteri
    - che mail contenga un punto e una chiocciola
    - che age sia un numero
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

    https://localhost/es/08.26%20php-snacks-b1/php-snacks-b1/2.php?name=pippo&mail=pippo@gmail.it&age=20

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<body>

    <?php
        $userName = $_GET["name"];
        $userMail = $_GET["mail"];
        $userAge = $_GET["age"];
        // var_dump($userName);
        // var_dump($userMail);
        // var_dump($userAge);

        $nameLen = strlen($userName);
        // var_dump($nameLen);

        if($nameLen > 3 && strpos($userMail, '.') !== false && strpos($userMail, '@') !== false && is_numeric($userAge)){
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
    ?>
                
</body>
</html>