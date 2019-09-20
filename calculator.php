<?php

$actie = readline("> Welke operatie wil je uitvoeren? (+, -, %)" .PHP_EOL);
if($actie !== '+' and $actie !== '-' and $actie !== '%') {
    echo "> '$actie' is geen geldige operatie";
    exit;
}
$getal1 = readline("> Eerste getal?" .PHP_EOL);
if(is_numeric($getal1));
else{
    echo"> '$getal1' is geen getal";
    exit;
}

$getal2 = readline("> Tweede getal?" .PHP_EOL);
if(is_numeric($getal2));
else{
    echo"> '$getal2' is geen getal";
    exit;
}

if ($actie == '+'){
$antwoord = $getal1 + $getal2;
echo $antwoord;}

elseif ($actie == '-'){
$antwoord = $getal1 - $getal2;
echo $antwoord;}

elseif ($actie == '%'){
$antwoord = $getal1 % $getal2;
echo $antwoord;}

else(exit);