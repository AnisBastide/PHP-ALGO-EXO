<?php
print "quel est l'année: \n";
$année=trim(fgets(STDIN));
print "quel est le mois: \n";
$mois=trim(fgets(STDIN));
$difannée=$année-2010;
$difmois=$mois-1;
$monnaie=0;
$i=0;
while ($i<$difannée){
    $monnaie=$monnaie+1200;
    $monnaie=$monnaie+($monnaie*0.02);
    $i++;
}
$monnaie=$monnaie+(100*$difmois);
print "Votre solde aujourd'hui est de " . $monnaie . " Euros\n";

