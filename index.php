<?php

 use N4mWard\DigitalCep\Search;
 require_once "vendor/autoload.php";

 $busca = new Search;
 
 $resultado = $busca->getAddressFromZipcode('15155000');
 
 print_r($resultado);