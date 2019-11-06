<?php
$i=0;
$chiffre_precedent=0;
$chiffre_actuel=0;
$list=[];
while ($i<=50){
    $resultat=$chiffre_actuel+$chiffre_precedent;
    $list[]=$resultat . "\n";
    $chiffre_precedent=$chiffre_actuel;
    $chiffre_actuel=$resultat;
    $i++;
    if ($chiffre_actuel==0){
        $list[]=1 ."\n";
        $chiffre_actuel=1;
    }


}
foreach ($list as $values){
    print $values;
}
 