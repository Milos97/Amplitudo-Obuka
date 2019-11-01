<?php

$voce = ['jabuka', 'kruska', 'kivi'];

for ($i = 0; $i < count($voce); $i++) {
    echo $voce[$i] . ' ';
}

echo '<br/>';

foreach($voce as &$item) {
    
    echo $item . ' ';
    $item = $item . '-';
}
echo '<br/>';

for ($i = 0; $i < count($voce); $i++) {
    echo $voce[$i] . ' ';
}
echo '<br/>';
