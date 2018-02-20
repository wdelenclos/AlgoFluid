<?php
//CONFIG
$dateDuDebut = 1722643201; //vendredi 2 aout 2024 à 00:01
$tailleDesPlages = 2; // en heure
$nbDeJours = 9;
// --
$taillePlageSec = $tailleDesPlages*3600;
$max = $nbDeJours*(24/$tailleDesPlages);
$last=$dateDuDebut;
$baseOfPlages = [];

$DaysToExclude= ['00','02','04', '06', '08', '10', '12', '14', '16', '22'];

for ($i = 0; $i <= $max; $i++){
    if(in_array(date('H', $last),$DaysToExclude)){
    // Do nothing FDP
    }else{
        array_push($baseOfPlages, $last);
    }
    $last = $last+$taillePlageSec;
}
echo(json_encode($baseOfPlages));

