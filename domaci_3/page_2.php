<?php 
require_once './autoload.php';
use Amplitudo\Renderable;
use Amplitudo\MenuItem;
use Amplitudo\Menu;
?>  

<html lang="en">
<head>
    <title>Page 2</title>
</head>


<body>

    <h1>Page two</h1>

</body>

</html>


<?php
    $menu_1 = new Menu();
    $menu_1->render();
?>