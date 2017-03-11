<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require("../vendor/autoload.php");
use engines\DrawEngine;
use models\Tree;

$tree = new Tree();
$tree->setHight(7)->setRepetition(7);
//$tree->setHight(10);
$engine = new DrawEngine();
$engine->draw($tree);
