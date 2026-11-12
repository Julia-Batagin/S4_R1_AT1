<?php

require_once 'Funcionario.php';
require_once 'FuncionarioInterface.php';

// Criando a classe FuncionarioCLT
class FuncionarioCLT extends Funcionario implements FuncionarioInterface{

    // Atributos
    private float $fgts;
    private string $descontos;
    private string $beneficios;
    private string $ferias;

    // Método construtor
    public function __construct(string $nome,string $cpf,string $cargo,float $salario,float $fgts,string $descontos,string $beneficios,string $ferias){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
        $this->salario = $salario;

        $this->fgts = $fgts;
        $this->descontos = $descontos;
        $this->beneficios = $beneficios;
        $this->ferias = $ferias;
    }

    // Calculando o pagamento
    public function calcularPagamento(){
        $descontos = (float)$this->descontos / 100;
        $bruto = $this->salario + (float)$this->beneficios;
        $liquido = $bruto - ($bruto * $descontos);

         return $liquido;
}

    // Método da interface
    public function contratar(){
        echo "Funcionário CLT contratado.\n";
    }

    // Método da interface
    public function demitir(){
        echo "Funcionário CLT demitido.\n";
    }
}