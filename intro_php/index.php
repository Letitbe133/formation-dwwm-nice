<?php

// déclaration d'une variable en php
// commence toujours par $
// attention le nom des variables est sensible à la casse (majuscules)
$title = 'PHP par la pratique';
$number = 10;
$number2 = 2.5;
$bool = true;
$array = ['perso1', 'perso2', 'perso3'];
$associativeArray = [
    'name' => 'John',
    'age' => 28,
    'skills' => ['html, js, css'],
];

// déclaration d'une constante
// 1er param nom de la constante
// 2ème param valeur de la constante

// recommandé pour assurer une compatibilité avec les versions antérieures de PHP
define('DOCUMENT_TITLE', 'Intro à PHP');
const PAGE_TITLE = 'Test constante';

// pour le debug des variables
// plutôt pour les string, int, float, function
// var_dump($title, PAGE_TITLE, $number, $number2, $bool, $array);

// pour les tableaux
// echo '<pre>';
// print_r($associativeArray);
// echo '</pre>';

$books = [
    [
        'author' => 'John',
        'title' => " John's book",
    ],
    [
        'author' => 'Jane',
        'title' => " Jane's book",
    ],
    [
        'author' => 'Jim',
        'title' => " Jim's book",
    ],
];

// echo '<pre>';
// print_r($books);
// echo '</pre>';

// je veux afficher le nom de l'auteur du 3ème livre
var_dump($books[2]['author']);
// print_r($books[0]);

$books[2]['author'] = 'Bob';
// echo '<pre>';
// print_r($books);
// echo '</pre>';

// pour ajouter un élément au tableau $books
$books[] = [
    'author' => 'Tom',
    'title' => "Tom's book",
];

// echo '<pre>';
// print_r($books);
// echo '</pre>';

array_push($books, [
    'author' => 'Dim',
    'title' => "Dim's book",
]);
// echo '<pre>';
// print_r($books);
// echo '</pre>';

// calculs en PHP
// addition
// echo 2 + 1;
// echo '<br>';
// // soustraction
// echo 10 - 5;
// echo '<br>';
// // division
// echo 30 / 2;
// echo '<br>';
// // modulo
// echo 10 % 3;
// echo '<br>';
// // multiplication
// echo 2 * 3;
// echo '<br>';

$n1 = 5;
$n2 = 3;

// addition
echo $n1 + $n2;
echo '<br>';
// soustraction
echo $n1 - $n2;
echo '<br>';
// division
echo $n1 / $n2;
echo '<br>';
// modulo
echo $n1 % $n2;
echo '<br>';
// multiplication
echo $n1 * $n2;
echo '<br>';

// concaténation de strings
echo 'Hello la '.'team';

// concaténation avec variable
$str1 = 'Hello ';
$str2 = 'World';
echo '<br>';

echo $str1.$str2;
echo '<br>';

echo '$str1 $str2';
echo '<br>';

echo "{$str1} everybody in the {$str2}";
echo '<br>';

echo $str1.' everybody in the '.$str2;
echo '<br>';

// les fonction en php
$name2 = 'Mary';
// function greet($name = 'John')
// {
//     global $name2;

//     return "Hello {$name} and {$name2}";
// }

// echo greet('Jane');

$add = function ($n1, $n2) {
    return $n1 + $n2;
};

$result = $add(10, 2);

$coeff = $result / 100;

// echo $coeff;

// utilisation du heredoc
// $html = <<<'MULTILIGNES'
// <div>
//     <h1>Titre</h1>
//     <p>Paragraphe</p>
// </div>
// MULTILIGNES;

$persons = [
    [
        'name' => 'Abdiel',
        'country' => 'Mexico',
    ],
    [
        'name' => 'Loic',
        'country' => 'Suisse',
    ],
    [
        'name' => 'Luke',
        'country' => 'Ireland',
    ],
];

// foreach ($persons as $key => $value) {
//     foreach ($value as $key => $content) {
//         echo "Key is {$key} and value is {$content} <br>";
//     }
// }

$fruits = ['orange', 'banane', 'pomme', 'kiwi'];

// foreach ($fruits as $name) {
//     echo "{$name} <br>";
// }

function pluralize($item)
{
    return "{$item}s";
}

$fruitsModified = array_map('pluralize', $fruits);

// $fruitsModified = array_map(function($item) {
//     return "{$item}s";
// }, $fruits)

print_r($fruitsModified);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo DOCUMENT_TITLE; ?></title>
</head>
<body>
    <h1>Intro à <?php echo $title; ?></h1>
    <?php

    for ($i = 0; $i < count($persons); ++$i) {
        // print_r($persons[$i]);
        $output = <<<OUTPUT
        <div>
            <h3>{$persons[$i]['name']}</h3>
            <p>{$persons[$i]['country']}</p>
        </div>
OUTPUT;
        echo $output;
    }
    ?>

</body>
</html>