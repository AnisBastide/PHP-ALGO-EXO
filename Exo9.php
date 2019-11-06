<?php
$input=trim(fgets(STDIN));

nombre_voyelle($input);
function nombre_voyelle(string $chaine){
$j=0;
$i=0;
while ($i<strlen($chaine)){
    if (strstr("a",$chaine[$i]) || strstr("e",$chaine[$i]) || strstr("i",$chaine[$i]) || strstr("o",$chaine[$i]) || strstr("u",$chaine[$i]) || strstr("y",$chaine[$i]) )
    $j++;
    $i++;
    

}
Print $j."\n";
}