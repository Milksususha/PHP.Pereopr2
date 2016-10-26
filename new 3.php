<?php
require_once "new 1.php";
require_once "new 2.php";
$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();
?>