<?php

 use N4m\DigitalCep\Search;
 require_once "vendor/autoload.php";

 $busca = new Search;
 
 $resultado = $busca->getAddressFromZipcode('15155000');
 
 print_r($resultado);