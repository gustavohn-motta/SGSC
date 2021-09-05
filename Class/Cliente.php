<?php

//declare(strict_types=1);

class Cliente{

    public $Nome;
    
    public  $SobreNome;
    
    public  $CpfCnpj;
    
    public  $Endereco;
    
    public  $NumReside;

    public $Cidade;
    
    public  $Bairro;
    
    public  $Uf;
    
    public  $Telefone;

    public  $Email;

    public function Exibir(){
        echo "Nome: ". $this->Nome . '</br>';
        echo "Sobrenome: ". $this->SobreNome . '</br>';
        echo "CpfCnpj: ". $this->CpfCnpj . '</br>';
        echo "Endereco: ". $this->Endereco . ' ';
        echo "Nº: ". $this->NumReside . ' ';
        echo "Bairro: " . $this->Bairro . ' ';
        echo "Estado: " . $this->Uf . '</br>';
        echo "Cidadde: " . $this->Cidade . '</br>';
        echo  "Tel. " . $this->Telefone . ' ';
        echo "Email: " . $this->Email;
    }

    public static function listaCliente( array $dados){
        $cliente =  new Cliente();
        $cliente->Nome = $dados['id'];
        $cliente->SobreNome = $dados['nome'];
        $cliente->Nome = $dados['sobreNome'];
        $cliente->Nome = $dados['cpfCnpj'];
        $cliente->Nome = $dados['endereco'];
        $cliente->Nome = $dados['numResid'];
        $cliente->Nome = $dados['bairro'];
        $cliente->Nome = $dados['cidade'];
        $cliente->Nome = $dados['estado'];
        $cliente->Nome = $dados['telefone'];
        $cliente->Nome = $dados['email'];

        return $cliente;


    }


}