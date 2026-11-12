<?php

require_once 'Funcionario.php';
require_once 'FuncionarioInterface.php';

// Criando a classe FuncionarioPJ
class FuncionarioPJ extends Funcionario implements FuncionarioInterface{

    // Atributos
    private string $cnpj;
    private float $valorContrato;
    private string $prestacaoServicos;

    // Método construtor
    public function __construct(string $nome,string $cpf,string $cargo,float $salario,string $cnpj,float $valorContrato,string $prestacaoServicos){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
        $this->salario = $salario;

        $this->cnpj = $cnpj;
        $this->valorContrato = $valorContrato;
        $this->prestacaoServicos = $prestacaoServicos;
    }

    // Calculando o pagamento
    public function calcularPagamento(){
        return $this->valorContrato;
    }

    // Método da interface
    public function contratar(){
        echo "Funcionário PJ contratado.\n";
    }

    // Método da interface
    public function demitir(){
        echo "Funcionário PJ demitido.\n";
    }
}