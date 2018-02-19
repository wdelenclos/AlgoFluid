<?php
//CONFIG
$dateDuDebut = 1709856001; //vendredi 2 aout 2024 à 00:01
$tailleDesPlages = 2; // en heure
$nbDeJours = 11;
// --
$taillePlageSec = $tailleDesPlages*3600;
$max = $nbDeJours*(24/$tailleDesPlages);
$last=$dateDuDebut;
$baseOfPlages = [];

$DaysToExclude= ['00','02','04', '06', '08','22'];

for ($i = 0; $i <= $max; $i++){
    if(in_array(date('H', $last),$DaysToExclude)){
    // Do nothing FDP
    }else{
        array_push($baseOfPlages, $last);
    }
    $last = $last+$taillePlageSec;
}
echo(json_encode($baseOfPlages));

