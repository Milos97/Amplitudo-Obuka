<?php

$niz = array(1, 2, 3);
$niz = [1, 2, 3];

// $niz1 = [
//     0 => 'Jedan',
//     1 => 'Dva',
// ];

?>

<pre>
    <?php
        // print_r($niz);
        // var_dump($niz);
        // die "Gone!";

        $element = current($niz);
        $element = current($niz);
        reset($niz);
        echo $element;
    ?>
</pre>