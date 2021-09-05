<?php
require_once 'conn.php';

$clientesArray = selectClientes('clientes');
 
//var_dump($clientesArray);

 exibirClientes($clientesArray);

//phpinfo();