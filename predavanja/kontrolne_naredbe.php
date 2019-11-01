<?php

$a = 10;
$b = 15;

if ($a < $b) {

} elseif ($a == $b) {

} else {

}

switch($a) {
    case 10:
        echo "10";
        break;
    default:
        echo "Default";
        break;
}
echo "<br/>";

$niz = [1, 2, 3, 4, 5];

$i = 0;

while($i < count($niz)) {
    echo $niz[$i++] . '<br/>';
}

if(isset($niz[100])) {
    echo 'Setovana';
} else {
    echo 'Nije setovana';
}
echo "<br/>";

if(empty($niz[100])) {
    echo 'Prazno';
} else {
    echo 'Nije prazno';
}

$a = null;

if(!$a) { // provjerava kao i empty

}

$prva = 0;
$druga = '0';

echo '<br/>';
if($prva == $druga) {
    echo 'Jednake';
} else {
    echo 'Nisu jednake';
}

