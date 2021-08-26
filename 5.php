<!-- 
Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
nuovo paragrafo.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 5</title>
</head>
<body>
    <?php
        $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, expedita enim! Accusantium aspernatur et voluptatum sint quo vero ea animi cupiditate reprehenderit, blanditiis, beatae atque debitis? Culpa at modi dolor! Sapiente atque natus, repellendus adipisci illum quidem numquam eos voluptate ea vitae soluta voluptates, exercitationem libero quam modi! Dolorum ipsa, reprehenderit sequi veritatis tempora asperiores sed mollitia quia voluptas amet! Quas minima exercitationem obcaecati blanditiis sint cum! Iure, mollitia, natus aliquid nihil eveniet nulla voluptatem ea eos facilis dolorem praesentium molestias odit cum laudantium aspernatur ratione saepe quidem soluta cupiditate? Pariatur magni aspernatur quod est facilis quaerat autem, cumque vero officia! Officiis, velit debitis? Magnam, cum neque tempora tenetur saepe libero eius voluptatibus tempore quibusdam, temporibus modi quas accusantium officia! Eos unde iure dolorem, optio quidem ex nihil magni quod a nam. Reiciendis nostrum praesentium temporibus, eum optio quasi reprehenderit ab vel id sapiente, tempora harum. Eum accusantium tenetur perspiciatis! Molestiae accusamus porro minus iste corrupti inventore dolores itaque officia nostrum illo optio delectus voluptate, earum temporibus, praesentium, voluptatibus facere aspernatur maiores. Deleniti dignissimos iure nostrum alias sed molestiae officia! Error ipsa quibusdam voluptate expedita voluptates sapiente repellendus, dolor qui vitae accusamus amet dignissimos repellat facilis sint molestiae est ex atque nemo vel iusto debitis laborum animi minima alias? Quasi! Eaque labore, expedita molestiae, laboriosam facere libero incidunt molestias commodi eius suscipit, vitae nostrum magnam pariatur laborum non dolorem ea quis illo earum. Ex eligendi eius tempore porro odit error? Voluptatem praesentium officiis, ratione corporis porro adipisci quibusdam atque facilis ad nulla illum impedit et similique expedita numquam laudantium error distinctio! Magnam voluptatem quos nobis, velit assumenda illum ipsam veritatis. Consectetur voluptates fugiat, voluptas eos deserunt impedit optio illo totam voluptatum eveniet tempora neque iure tempore! Nostrum, ipsa officiis molestiae, porro ea similique tempore unde tempora provident fugit dolorem. Velit.";
        $loremArray = explode('.', $lorem);
        var_dump($loremArray);

        for ($i=0; $i < count($loremArray); $i++) { 
            echo "<p>{$loremArray[$i]}</p>";
        }
    ?>    
</body>
</html>
