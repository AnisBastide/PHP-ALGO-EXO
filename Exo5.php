<?php
$i=0;
$chiffre_precedent=0;
$chiffre_actuel=0;
while ($i<=50){
    $resultat=$chiffre_actuel+$chiffre_precedent;
    print $resultat. "\n";
    $chiffre_precedent=$chiffre_actuel;
    $chiffre_actuel=$resultat;
    $i++;
    if ($chiffre_actuel==0){
        print 1 ."\n";
        $chiffre_actuel=1;
    }
    
}