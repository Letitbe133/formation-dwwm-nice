<?php

// Exo 1
// Vous devez créer une fonction qui renvoie la longueur d’une chaîne de caractères passées en paramètre et afficher le résultat

// créer une fonction qui prend un paramètre
function calcLongueur($string)
{
    // la fonction doit retourner un résultat

    return strlen($string);
}

// ici on appelle la fonction et on stocke sa valeur de retour dans une variable
$length = calcLongueur('Ceci est une chaîne de caractères');

// echo "La longueur de la chaîne est de {$length} caractères";

// on peut simplement faire un echo du retour de la fonction
// echo 'La longueur de la chaîne est de '.calcLongueur('Ceci est une chaîne de caractères').' caractères';

// Exo 2
//Vous devez créer une fonction qui prend en paramètre une phrase et qui renvoie cette phrase avec la première lettre de chaque mot en majuscule. Vous l'affichez ensuite à l'écran
function capitalize($string)
{
    // on va retourner un résultat

    return ucwords($string);
}

// echo capitalize('Ceci est une chaîne de caractères');

// Exo 3
// Vous devez créer une fonction qui ajoute un élément au début d’un tableau.
// Puis une seconde qui affiche le tableau.

// on crée le tableau
$arr = ['Emma', 'Souhir', 'Vinicio', 'Chiraz'];

// fonction qui va ajouter un élément au début du tableau
// va en paramètre un élément à ajouter
function addToArray($elem, $array)
{
    // ici on ne retourne rien
    array_unshift($array, $elem);
    displayArray($array);
}

function displayArray($array)
{
    print_r($array);
}

// addToArray('Kevin', $arr);

// passer la référence à une variable
function addToArray2($elem, &$array)
{
    // ici on ne retourne rien
    array_unshift($array, $elem);
}

// addToArray2('Kevin', $arr);

// displayArray($arr);

// PHP EXO 4
//Vous devez créer une fonction qui prend en paramètre une chaîne de caractères et qui renvoie la même chaîne mais inversée.
function reverseString($string)
{
    // suppression des espaces et sauts de lignes
    // $trimmmedString = trim($string);
    // retourne la chaîne de caractères inversée

    // conversion des caractères spéciaux
    $convertedString = htmlspecialchars($string);

    return strrev(trim($convertedString));
}

// echo reverseString('     <h1>Hello World!</h1>   ');

// PHP EXO 5
// Vous devez créer une fonction qui prend en paramètre une chaîne de caractères et qui renvoie "Cette chaîne est un palindrome" si c'en est un ou "Cette chaîne n'est pas un palidrome" dans le cas contraire.
function isPalindrome($string)
{
    // on supprime les espaces avant et après la $string
    $cleanString = trim($string);

    // on passe tout en minuscules
    $mini = strtolower($cleanString);

    // on inverse la chaîne
    $inversed = strrev($mini);

    // if ($mini == $inversed) {
    //     return 'Palindrome';
    // }

    // return 'Pas un palindrome';
    // je compare les 2 méthode Abdiel
    //     $inversed = strrev($cleanString);

    // if (0 === strcasecmp($cleanString, $inversed)) {
    //     return 'Palindrome';
    // }

    // return 'Pas un palindrome';

    // oneliner
    $reversedString = strrev(strtolower(trim($string)));

    // if (trim($string) == $reversedString) {
    //     return 'Palindrome';
    // }

    // return 'Pas un palindrome';

    // André et Dimitri
    // opérateur ternaire pour remplacer le if...else
    return $result = $reversedString === trim($string) ? 'Palindrome' : 'Pas un palindrome';
}

// echo isPalindrome('     test');

// Méthode Souhir
$special = [' ', '!', ':', '?', '.', '/', '$', '&', '%', "'", ','];

function souhirSpecial($string, $arr)
{
    // on passe tout en minuscule et on supprime les caracteres speciaux
    $phrase = strtolower(str_replace($arr, '', $string));

    $reversedString = strrev($phrase);

    return $reversedString == $phrase ? 'Palindrome' : 'Pas un palindrome';
}

// echo souhirSpecial(' !!!    ana', $special);

// Méthode oneliner André
echo (strtolower('KAYAK') === strrev((strtolower('Kayak')))) ? 'Passed' : ' Failed';
