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
// echo (strtolower('KAYAK') === strrev((strtolower('Kayak')))) ? 'Passed' : ' Failed';

// PHP EXO 6
// Vous devez créer une fonction qui prend en paramètre un integer et qui renvoie le même integer inversé.
function reverseInteger($number)
{
    $revString = strrev($number);

    // on utilise la méthode intval() pour passer en entier

    // return intval($revString);

    // on utilise le principe du casting qui va nous permettre de typer une variable

    return (int) $revString;
}

// echo reverseInteger(249);

// Méthode Souhir / Emma / Vinicio / Bianca
function inverseInteger($n)
{
    $inverse = 0;
    while (0 != $n) {
        $inverse = ($inverse * 10) + ($n % 10);
        //echo $inverse;
        $n = (int) ($n / 10);
        //echo ($n);
    }

    return $inverse;
}
//  echo inverseInteger(249);

// PHP EXO 7
// Vous devez créer une fonction qui affiche tous les entiers entre 0 et 100. :warning: si l'entier est divisible par 3 elle doit afficher fizz, s'il est divisible par 5 elle doit afficher buzz, s'il est divisible par 3 et 5 elle doit afficher fizzbuzz. Sinon elle affiche l'entier.
function display($n)
{
    if (0 === $n) {
        return $n;
    }
    if (0 === $n % 3 && 0 === $n % 5) {
        return 'fizzbuzz';
    }
    if (0 === $n % 3) {
        return 'fizz';
    }
    if (0 === $n % 5) {
        return 'buzz';
    }

    return $n;
}

for ($i = 0; $i < 101; ++$i) {
    // echo display($i).'<br>';
}

// PHP EXO 8 pour les chauds de chez chauds
// Vous devez créer une fonction qui affiche un calendrier du mois en cours (au moins le numéro des jours, sinon vous pouvez aussi afficher le nom et le numéro du jour.
function calendar()
{
    $daysInMonth = date('t'); // pour Juillet par exemple on aura 31
        $month = date('n'); // pour Juillet on aura 7
        $year = date('Y'); // pour l'année on aura 2021

        for ($i = 1; $i <= $daysInMonth; ++$i) {
            // code...
            $date = date('j', mktime(0, 0, 0, $month, $i, $year)).'<br>'; // 0heures, 0minutes, 0secondes, mois, jour, année
            echo $date;
        }
}

// calendar();

// Méthode Abdiel avec paramètres utilisateur

// on spécifie la langue d'affichage
setlocale(LC_TIME, 'fr_FR.utf8');

// on donne une valeur par défaut aux paramètres
// on pourra appeler la fonction sans lui passer de paramètres et afficher les jours pour le mois en cours
function calendrier($month = '', $year = '')
{
    if (empty($month)) {
        $month = date('m');
    }
    if (empty($year)) {
        $year = date('Y');
    }

    // on affiche le mois et l'année
    echo ucfirst(strftime('%B %Y', mktime(0, 0, 0, $month, 1, $year)));
    echo '<br>';
    // on récupère le mois en cours
    $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
    // on boucle sur les jours du mois en cours
    for ($d = 1; $d <= $daysInMonth; ++$d) {
        // on affiche la date
        echo strftime('%d %a', mktime(0, 0, 0, $month, $d, $year));
        echo '<br>';
    }
}

calendrier(5, 2012);
