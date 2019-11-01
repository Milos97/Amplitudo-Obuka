<?php


$voce = ['jabuka', 'kruska', 'kivi'];
$voce[] = 'banana';

function printArray(array $array, bool $newline = true): void 
{
    foreach($array as $item) {
        echo $item . ' ';
    }

    if($newline) {
        echo '<br/>';
    }
} 

$printNthElement = function (array $array, $index) {
    for($i = 0; $i < count($array); $i++) {
        if($i == $index) {
            echo $array[$i] . ' ';
        }
    }
};

printArray($voce);
$printNthElement($voce, 2);

function forEachElement($array, $callback) {
    foreach($array as $item) {
        $callback($item);
    }
}

forEachElement($voce, function($item){
    echo $item . ' je kul.';
});

$novoVoce = array_map(function ($item) {
    return $item . ' * ';
}, $voce);
echo '<br/>';
printArray($novoVoce);


function zatvorenje() { 
    $a = 10;

    $unutrasnja = function() use($a) {
        echo $a;
    };

    return $unutrasnja;
}

$mojaFunkcija = zatvorenje();
$mojaFunkcija();