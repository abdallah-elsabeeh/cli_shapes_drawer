<?php
require("../vendor/autoload.php");
use engines\DrawEngine;
use models\Tree;

$tree = new Tree();
$tree->setHight(5)->setRepetition(2);
$engine = new DrawEngine();
//create json file
$engine->draw($tree,'json','test');
//draw to cli
//$engine->draw($tree);
