<?php
require_once('./Env/Time.php');
require_once('./Env/Events.php');
require_once('./Env/Demographic.php');
require_once('./Env/Touristic.php');
require_once('./Env/Transport.php');
require_once('./Places/EventPlace.php');
require_once('./Places/TouristicPlace.php');
require_once('./Places/EventPlace.php');
require_once('./Places/LivingPlace.php');
require_once('./Tools/generatePlageBase.php');
$PointsBase = [[48.864299,2.332401], [48.865169, 2.331256], [48.864733, 2.331735], [48.86526, 2.331778], [48.864733, 2.331735]];// Base de lieux contenant des points des quatres types réunis préalablement généré côté back via un CRON
$PlageBase = $generatedPlageBase;
$fp = fopen('./Outputs/generate.txt', 'w');

foreach($PlageBase as $creneau){

    $Events = new Events($creneau);
    $Time = new Time($creneau);
    $Tourists = new Touristic($creneau);
    $Peoples = new Demographic($creneau);
    $Transports = new Transport($creneau);

    foreach($PointsBase as $place){
        fwrite($fp,'#Point: '.$place[0].','.$place[1].'; '.date('d M Y H', $creneau[0]).'h ->'.date(' H', $creneau[1]).'h: '.PHP_EOL);
        switch ($place->type) {
            case 0: // EventPlace
                $point = new EventPlace($place->location, $Events);
                fwrite($fp, $point->getFrequentation());
                unset($point);
                break;
            case 1: // StationPlace
                $point = new TransportPlace($place->location, $Transports);
                fwrite($fp, $point->getFrequentation());
                unset($point);
                break;
            case 2: // TouristicPlace
                $point = new TouristicPlace($place->location, $Tourists);
                fwrite($fp, $point->getFrequentation());
                unset($point);
                break;
            case 3: // LivingPlace
                $point = new LivingPlace($place->location,  $Peoples,  $Tourists, $Transports);
                fwrite($fp, $point->getFrequentation());
                unset($point);
                break;
        }
        fwrite($fp, PHP_EOL);
    }
}

fclose($fp);

?>