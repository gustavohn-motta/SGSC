<?php
 require_once 'Class\Cliente.php';
 require_once 'conn.php';

$nomeCli = $_POST["nome"];
$sobreNomeCli = $_POST["sobreNome"];
$cpfCnpjCli = $_POST["cpfCnpj"];
$enderecoCli = $_POST["endereco"];
$numResiCli = $_POST["numResidencia"];
$bairroCli = $_POST["bairro"];
$estadoCli = $_POST["estado"];
$cidadeCli = $_POST["cidade"];
$telCli = $_POST["ddd"] . $_POST["telefone"];
$emailCli = $_POST["email"];


//var_dump($nomeCli,  $sobreNomeCli, $cpfCnpjCli, $enderecoCli, $numResiCli, $bairroCli, $estadoCli, $telCli, $emailCli);

 $CdtCliente = new Cliente();
 
 $CdtCliente->Nome = $nomeCli;
 $CdtCliente->SobreNome =$sobreNomeCli;
 $CdtCliente->CpfCnpj = $cpfCnpjCli;
 $CdtCliente->Endereco = $enderecoCli;
 $CdtCliente->NumReside = $numResiCli;
 $CdtCliente->Bairro = $bairroCli;
 $CdtCliente->Uf = $estadoCli;
 $CdtCliente->Cidade = $cidadeCli;
 $CdtCliente->Telefone = $telCli;
 $CdtCliente->Email = $emailCli;
 
 //var_dump($CdtCliente);
 //$CdtCliente->Exibir();
 inserirCliente($CdtCliente);