<?php

function inserirCliente($cliente){
    
 $nome = $cliente->Nome;
 $sobreNome = $cliente->SobreNome;
 $cpfCnpj = $cliente->CpfCnpj;
 $endereco = $cliente->Endereco;
 $numResid = $cliente->NumReside;
 $cidade = $cliente->Cidade;
 $bairro= $cliente->Bairro;
 $uf = $cliente->Uf;
 $tel =  $cliente->Telefone;
 $email = $cliente->Email;

    try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
        $query = $conn->prepare("INSERT INTO clientes VALUES(null, :nome, :sobreNome, :cpf, :endereco,
         :numResid, :bairro, :cidade, :uf, :tel, :email)");

         $query->bindParam(':nome', $nome, PDO::PARAM_STR);
         $query->bindParam(':sobreNome', $sobreNome, PDO::PARAM_STR);
         $query->bindParam(':cpf', $cpfCnpj, PDO::PARAM_STR);
         $query->bindParam(':endereco', $endereco, PDO::PARAM_STR);
         $query->bindParam(':numResid', $numResid, PDO::PARAM_STR);
         $query->bindParam(':bairro', $bairro, PDO::PARAM_STR);
         $query->bindParam(':cidade', $cidade, PDO::PARAM_STR);
         $query->bindParam(':uf', $uf, PDO::PARAM_STR);
         $query->bindParam(':tel', $tel, PDO::PARAM_STR);
         $query->bindParam(':email', $email, PDO::PARAM_STR);

         $query->execute();

         header('Location: clientes.php');
         die();
    
    }catch(\PDOException $e){
        echo $e->getMessage() . '</br>';
        var_dump($nome,  $sobreNome, $cpfCnpj, $endereco, $numResid, $bairro
        , $uf, $tel, $email);
    }
}

function inserirServico($servico){

$idCliente = $servico->IdCliente;
$responsavel = $servico->Responsavel;


$endereco = $servico->Endereco;
$numResid = $servico->NumResid;
$bairro = $servico->Bairro;
$cidade = $servico->Cidade;
$estado = $servico->Estado;

//data convertida
$data = $servico->dtServico;
$descricao = $servico->descricao;
$categoria = $servico->categoria;

$horaInicial = $servico->hrInicio;
$horaFinal = $servico->hrFim;
$totalHoras = $servico->totalhr;
$quantidade = $servico->qtd;

$valorTipo = $servico->tipo;
$valor = floatval($servico->valorQtd);
$valorTotal = floatval($servico->valorTotal);

$metodoPag = $servico->metodoPagamento;
    

   
       try{
           $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
           $query = $conn->prepare("INSERT INTO servicos VALUES(null, :IdCliente, :responsavel, :enderecoServ, :numResid,
            :bairro, :cidade, :estado, :dataServ, :descrption, :hrIni, :hrFim, :totalHr, :qtd, :valorQtd, :valorTotal, :tipo, :metodPag, :cat)");
   
            $query->bindParam(':IdCliente', $idCliente, PDO::PARAM_STR);
            $query->bindParam(':responsavel', $responsavel, PDO::PARAM_STR);
            $query->bindParam(':enderecoServ', $endereco, PDO::PARAM_STR);
            $query->bindParam(':numResid', $numResid, PDO::PARAM_STR);
            $query->bindParam(':bairro', $bairro, PDO::PARAM_STR);
            $query->bindParam(':cidade', $cidade, PDO::PARAM_STR);
            $query->bindParam(':estado', $estado, PDO::PARAM_STR);
            $query->bindParam(':dataServ', $data, PDO::PARAM_STR);
            $query->bindParam(':descrption', $descricao, PDO::PARAM_STR);
            $query->bindParam(':hrIni', $horaInicial, PDO::PARAM_STR);
            $query->bindParam(':hrFim', $horaFinal, PDO::PARAM_STR);
            $query->bindParam(':totalHr', $totalHoras, PDO::PARAM_STR);
            $query->bindParam(':qtd', $quantidade, PDO::PARAM_STR);
            $query->bindParam(':valorQtd', $valor, PDO::PARAM_STR);
            $query->bindParam(':valorTotal', $valorTotal, PDO::PARAM_STR);
            $query->bindParam(':tipo', $valorTipo, PDO::PARAM_STR);
            $query->bindParam(':metodPag', $metodoPag, PDO::PARAM_STR);
            $query->bindParam(':cat', $categoria, PDO::PARAM_STR);
   
            $query->execute();
   
            header('Location: servicos.php');
            die();
       
       }catch(\PDOException $e){
           echo $e->getMessage() . '</br>';
           var_dump($servico);
       }
   }

   function somaServico(){
    $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
    $query = ("SELECT SUM(valor_total) as somatoria FROM servicos");
    $resultado = $conn->query($query);

    $rest = $resultado->fetchAll(\PDO::FETCH_ASSOC);
    return $rest[0]['somatoria'];
   }

function selectFull(string $tabela){
    $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
    $query = ("SELECT * FROM $tabela");


    $resultado = $conn->query($query);

    return $resultado->fetchAll(\PDO::FETCH_ASSOC);
}

function selectFulllimited(string $tabela){
    $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
    $query = ("SELECT * FROM $tabela ORDER BY id desc LIMIT 10");


    $resultado = $conn->query($query);

    return $resultado->fetchAll(\PDO::FETCH_ASSOC);
}



function selectCatgoria(){
    $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
    $query = ("SELECT * FROM categorias");


    $resultado = $conn->query($query);

    return $resultado->fetchAll(\PDO::FETCH_ASSOC);
}

function deletarCliente($id){
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
        $query = $conn->prepare("DELETE FROM CLIENTES WHERE id = :idCliente");

        $query->bindParam(':idCliente', $id);
       
        $query->execute();
       
        header('Location: clientes.php');
        die();

    } catch (\PDOException $e) {
        echo $e->getMessage() . '</br>';
    }
}

function unicoCliente($id){
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
        $query = ("SELECT * FROM CLIENTES WHERE id = $id");
       
        $resultado = $conn->query($query);

        return $resultado->fetchAll(\PDO ::FETCH_ASSOC);
    
    } catch (\PDOException $e) {
        echo $e->getMessage() . '</br>';
    }
}

function horasParaSec($horaCompleta){

    list($hora,$min,$sec) = explode(':', $horaCompleta);
    $calc = ($hora * 3600) + ($min * 60) + $sec;

    return $calc;
}
function secParaHoras($segundos){

    $horas = $segundos/3600;
    $resto = $segundos % 3600;
    $min = $resto / 60;
    $resultado = $horas;

    return $resultado;

}

function formatParaHoras($segundos){
    $horas = $segundos/3600;
    $horas = intval($horas);
    $resto = $segundos % 3600;
    $min = $resto / 60;
    $resultado = sprintf("%02d", $horas) . ':' . sprintf("%02d", $min) .':' . '00';

    return $resultado;

}

function idByNome($id, $tabela, $nome){
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
        $query = ("SELECT $id FROM $tabela WHERE nome = '$nome' ");
       
        $resultado = $conn->query($query);

        return $resultado->fetchAll(\PDO ::FETCH_ASSOC);
     
    
    } catch (\PDOException $e) {
        echo $e->getMessage() . '</br>';
    }

}

function NomeById($idCli){
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=sgsc_bd", "root", '');
        $query = ("SELECT nome FROM clientes WHERE id = '$idCli' ");
       
        $resultado = $conn->query($query);

        $rest = $resultado->fetchAll(\PDO ::FETCH_ASSOC);
        return $rest[0]['nome'];
    
    } catch (\PDOException $e) {
        echo $e->getMessage() . '</br>';
    }

}