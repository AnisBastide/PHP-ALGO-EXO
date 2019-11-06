<?php
$init=0;
$list=[];
$number=0;
print "Ajoutez vos nombres ou ecrivez stop si vous voules arreter:";
while ($init==0){
    $list[]=trim(fgets(STDIN));
    $number++;
    if ($list[$number-1]=="STOP"){
        $init=1;
        unset($list[$number-1]);
        
    }   
}
$number=$number-1;
print "Il y a " . $number . " valeurs dans votre liste.\n";
$number=0;
foreach ($list as $number){
    $add=$add+$number;
}
$moy=$add/$number;
print "La moyenne de vos valeurs est " . $moy . ".\n";

