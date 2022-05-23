<?php
/* 
## Snack 1
Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
Ad ogni refresh della pagina visualizzare una 
pubblicità a schermo, tenendo conto che possono 
essere sorteggiate solo quelle is_active true.
*/

$ads = [
    [
        'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
        'link' => 'https://www.google.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
        'link' => 'https://www.facebook.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
        'link' => 'https://codepen.io',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
        'link' => 'https://laravel.com',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
        'link' => 'https://www.php.net',
        'is_active' => true,
    ],

];

$i = 0;
while ($i < count($ads)) {
    $i = rand(0, count($ads));
    //var_dump($i);
    $ad = $ads[$i];
    if ($ad['is_active']) {
        var_dump($ad);
        break;
    } else {
        $i = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <style>
        img {
            max-width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $i = 0;
    while ($i < count($ads)) :
        $i = rand(0, count($ads));
        $ad = $ads[$i];
        if ($ad['is_active']) : ?>
            <img src="<?= $ad['image_path'] ?>" alt="">
            <?php break; ?>

        <?php else :
            $i = 0; ?>
        <?php endif ?>
    <?php endwhile ?>
</body>

</html>