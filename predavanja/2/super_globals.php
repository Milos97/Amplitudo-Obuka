<?php 

// $_GET;
// $_POST;
// $_COOKIE;

if(isset($_GET['name'])) 
{
    echo 'Name =>' . $_GET['name'];
}
echo '<br/>';

if(isset($_POST['last_name'])) 
{
    echo 'Last Name =>' . $_POST['last_name'];
}
// echo urlencode('Marko Markovic');
// echo '<br/>';
// echo rawurlencode('Marko Markovic');

?>

<a href="./petlje.php">Pogledajte petlje</a> 