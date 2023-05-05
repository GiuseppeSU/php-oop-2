<?php

require_once __DIR__ . '/Model/animali.php';


$cane = new animali($name);
$cane->name = 'Cane';
$gatto = new animali($name);
$gatto->name = 'Gatto';
echo $cane->getName();
echo $gatto->getName();