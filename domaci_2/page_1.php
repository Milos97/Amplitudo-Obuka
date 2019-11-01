<?php 

include 'helpers.php';

formatGetParams();

$testExamples = array("123.123.1.2", "146.132.2.1", "270.5.232.1", "34.325.3.4");
foreach($testExamples as $addres) {
    validateIP($addres);
}