<?php
print "Jour de naissance". "\n";
$day=trim(fgets(STDIN));
Print "Mois de naissance". "\n";
$month=trim(fgets(STDIN));
Print "Année de naissance". "\n";
$year=trim(fgets(STDIN));
$actual_day=date("d");
$actual_month=date("m");
$actual_year=date("Y");
//Print $day . $month . $year. "\n";
//Print $actual_day . $actual_month . $actual_year ."\n";
if ($actual_year-$year<0){
    print "hey rentrez une valeur existante manant"."\n";
    print "nique"."\n";
    exit;
}
print " Votre age est de ".abs($actual_day-$day). " jour " . abs($actual_month-$month) ." mois et " .abs($actual_year-$year) ." ans \n";
