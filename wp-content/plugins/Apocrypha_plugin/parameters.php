<?php

function openBDD()
{
    
    $connexion_string = "mysql:dbname=Apocrypha;host=127.0.0.1;charset=utf8";
    $login = "root";
    $mdp = "123456789$";

    $bdd = new PDO($connexion_string, $login, $mdp);
    return $bdd;
}

