<?php
include_once 'helpers.php';

$links = [ ['label' => 'page_one', 
            'pageName' => 'page_1.php',
            'param' => ['id' => 23,
                        'sortBy' => 'date',
                        'brand' => 10,
                        'name' => 'M&M\'S' ]],
            ['label' => 'page_two',
            'pageName' => 'page_2.php',
            'param' => ['id' => 24,
                        'sortBy' => 'date',
                        'brand' => 11,
                        'name' => 'N&M\'E' ]] 
];

?>

<html>
    <body>
         <ul>
            <li><a <?php echo generateHref($links[0]['pageName'], $links[0]['param']) ?> > Page One </a></li>
            <li><a <?php echo generateHref($links[1]['pageName'], $links[1]['param']) ?> > Page Two </a></li>
         </ul>
    </body>

</html>