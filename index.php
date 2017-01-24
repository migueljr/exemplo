<?php 

require_once "vendor/autoload.php";

use App\Teste;
use App\Clientes;
use Code\Lost;

$app = new Teste();
echo $app->getVer();

echo (new Clientes)->getCliente();
echo (new Lost)->getMsg();

//classe