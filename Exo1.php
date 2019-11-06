<?php
$naissance= 2.7;
$deces=1.9;
print "Il y a " . (($naissance*60)-($deces*60)) . " personne en plus par minute" . "\n";
print "Il y a " . (($naissance*60*60)-($deces*60*60)) . " personne en plus par heure" . "\n";
print "Il y a " . (($naissance*60*60*24)-($deces*60*60*24)) . " personne en plus par jour" . "\n";
print "Il y a " . (($naissance*60*60*24*365)-($deces*60*60*24*365)) . " personne en plus par année" . "\n";