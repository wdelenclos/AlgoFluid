<?php
//CONFIG
$dateDuDebut = 1722643201; //vendredi 2 aout 2024 à 00:01
$tailleDesPlages = 2; // en heure
$nbDeJours = 10;
// --
$taillePlageSec = $tailleDesPlages*3600;
$max = $nbDeJours*(24/$tailleDesPlages);
$last=$dateDuDebut;
$baseOfPlages = [];
$obj= [1,2,3,4,5,11,12,13,14,15,21,22,23,24,25,31,32,33,34,35,41,42,43,44,45,51,52,53,54,55,61,62,63,64,65,71,72,73,74,75,81,82,83,84,85,91,92,93,94,95];
for ($i = 0; $i <= $max; $i++){
    if (in_array($i, $obj)){
       // do nothing;
    }
    else{
    array_push($baseOfPlages,$last);
    $last = $last+$taillePlageSec;
    }
}
echo(json_encode($baseOfPlages));

