<?php
 require_once 'Class\servico.php';
 require_once 'conn.php';
$nomeCliente = $_POST['cliente'];
$responsavel = $_POST['responsavel'];
//data
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$endereco = $_POST['endereco'];
$numResid = $_POST['numResidencia'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];

$horaInicial = $_POST['horaInicial'] . ':00';
$horaFinal = $_POST['horaFinal'] . ':00';
$totalHoras = '';
$quantidade = $_POST['quantidade'];

$valorTipo = $_POST['valorTipo'];
$valor = $_POST['valor'];

$metodoPag = $_POST['pagamento'];
$ValorTotal = 0;

if ($valorTipo == 'hora') {
    $horaIniSec = horasParaSec($horaInicial);
    $horaFinalsec = horasParaSec($horaFinal);

    $resultado = $horaFinalsec - $horaIniSec;
    $HorasCalculo = secParaHoras($resultado);
    $totalHoras = formatParaHoras($resultado);
    // var_dump($totalHoras);

    $ValorTotal = $HorasCalculo * floatval($valor);
    // echo $ValorTotal;
    $quantidade = NULL;
    
}
else{
    $ValorTotal = floatval($quantidade) * floatval($valor);
    $horaInicial = NULL;
    $horaFinal = NULL;
    $totalHoras = NULL;
}
$tabela = 'clientes';
$id = 'id';
$idcli = idByNome($id, $tabela, $nomeCliente);
$idcli = $idcli[0]['id'];

$tabela = 'categorias';
$id = 'id_cat';
$categoria = idByNome($id, $tabela, $categoria);
$categoria = $categoria[0]['id_cat'];
var_dump($categoria, $idcli);

$cdtServico = new Servico();
$cdtServico->IdCliente = $idcli;
$cdtServico->Responsavel = $responsavel;
$cdtServico->Endereco = $endereco;
$cdtServico->NumResid = $numResid;
$cdtServico->Bairro = $bairro;
$cdtServico->Estado = $estado;
$cdtServico->dtServico = $ano . '-' . $mes . '-'. $dia;
$cdtServico->Cidade = $cidade;
$cdtServico->descricao = $descricao;
$cdtServico->categoria = $categoria;
$cdtServico->hrInicio = $horaInicial;
$cdtServico->hrFim = $horaFinal;
$cdtServico->totalhr = $totalHoras;
$cdtServico->qtd = $quantidade;
$cdtServico->tipo = $valorTipo;
$cdtServico->valorQtd = $valor;
$cdtServico->valorTotal = number_format($ValorTotal, 2, '.', '');
$cdtServico->metodoPagamento = $metodoPag;

inserirServico($cdtServico);