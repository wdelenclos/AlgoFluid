<?php
//CONFIG
$dateDuDebut = 1722556801; //vendredi 2 aout 2024 à 00:01
$tailleDesPlages = 2; // en heure
$nbDeJours = 16;
// --
$taillePlageSec = $tailleDesPlages*3600;
$max = $nbDeJours*(24/$tailleDesPlages);
$last=$dateDuDebut;
$baseOfPlages = [];
for ($i = 0; $i <= $max; $i++){
    $plage = [$last, $last+$taillePlageSec];
    array_push($baseOfPlages,$plage );
    $last = $last+$taillePlageSec;
}
$generatedPlageBase = $baseOfPlages;

