<?php
error_reporting(-1);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require ('index.php');
$testRubric1 = new Rubric;
$testRubric1->RubricId =2;
$testRubric1->RubricName = 'Общество';
//var_dump($testRubric1);
//var_dump($testRubric1->RubricId);
Rubric::saveModel($testRubric1);
$testRubric2 = Rubric::getModel(2);
var_dump($testRubric2);