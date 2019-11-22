<?php
require 'testes.php';
use function \teste\min as minimo;

var_dump(minimo([3,2,4,1,5]));
echo minimo([3,2,4,1,5])."\n";
echo min([3,2,4,1,5]);

