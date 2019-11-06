<?php
$année=trim(fgets(STDIN));
if($année%4==0 && ($année%100!=0 || $année%400==0)){
    print $année . " est bissextile". "\n";
}
else {
    print $année . " n'est pas bissextile ". "\n";
}