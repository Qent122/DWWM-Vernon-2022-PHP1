<?php

/*
//affiche une chaine de caracteres qui contient du html
$toto = '<h1>12</h1>';
echo $toto;

// Affichage de variable
$jour = "lundi";
// echo "Nous somme " . $jour . '.';
echo "<br/>";


// Avec guillemets doubles, la variable est evaluée
echo "Nous somme $jour";
echo "<br/>";

//Avec guillemets simples, la variable ne l'est pas
echo 'Nous somme $jour';
echo "<br/>";

// Obtenir le type d'une variable
echo gettype($jour);
echo "<br/>";


// Afficher le contenu d'une variable
var_dump($jour);
echo "<br/>";

// ou
// print_r($jour)

/* 

Quelque regle :
- toutes les varibles commencent par $
- toutes les variables commencent par une lettre ou '_'
- le nom d'une variable contient, des chiffres ,des underscores et c'est tout
- le nom d'une variable ne contient pas d'espace

*/ /*

$jour ="mardi";
$jourTest = $jour = "mercredi";

// Passage par référence
$a = 1;
$b = &$a;
$b = 2;
echo $a;

/* Les Différents types de variables
- String
- Integer
- Float 
- Boolean
- NULL
- Array
- Object
- Ressource
- Enumeration ou Enums

*/ 

/* Les Operateurs
- additions +
- soustraction -
- multiplication *
- division /
- modulo %
-  ** (10 puissance 2 : 10 ** 2)
*/

$x = $x /4 ;
$x /= 4;

 /* Operateur combinés 
$i = $i + 1;
$i++;
$i +=1;
*/

/* Operateur de comparaison
- == compare la valeur
- === compare la valeur et le type
- != ou <> différent en valeur
- !== different en valeur et en type
- <
- >
- <=
- =>
*/

// Exemple de vérification d'opérateur de comparaison avec la fonction var_dump()
$x=42;
var_dump($x === '42');