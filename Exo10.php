<?php
$list=[];
$init=0;
$number=0;
while ($init==0){
    $list[]=trim(fgets(STDIN));
    $number++;
    if ($list[$number-1]=="STOP"){
        $init=1;
        unset($list[$number-1]);
        
    }   
}
croissant($list);
function croissant($tableau){
    $i=1;
    $f=0;
    while($i<count($tableau)){
        $t=$i-1;
        if ($tableau[$i]<$tableau[$t]){
            $f=1;
            print "la liste est décroissante\n";
            break;
        
        }
        else if ($tableau[$i]==$tableau[$t]){
            print "bien joué, mais je ne suis pas débile ;) \n";
            $f=1;
            break;
        }   
        $i++;
    }
    if ($f==0){
        print "la liste est croissante\n";
    }
}
