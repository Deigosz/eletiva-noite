<?php

class Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0;
        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }
        return $this->salarioBase - $inss - $ir;
    }

    public function toString() {
        return get_class($this) . "<br> Código: " . $this->getCodigo() . 
               "<br> Nome: " . $this->getNome() . 
               "<br> Salário Base: R$" . $this->formatarNumero($this->getSalarioBase()) . 
               "<br> Salário Líquido: R$" . $this->formatarNumero($this->getSalarioLiquido()) . "<br>";
    }

    public function formatarNumero($numero) {
        return number_format($numero, 2, ',', '.');
    }
}

class Servente extends Funcionario {
    public function getSalarioLiquido() {
        $salarioBase = $this->getSalarioBase();
        $salarioBase += $salarioBase * 0.05;
        $inss = $salarioBase * 0.1;
        $ir = 0;
        if ($salarioBase > 2000.0) {
            $ir = ($salarioBase - 2000.0) * 0.12;
        }
        return $salarioBase - $inss - $ir;
    }
}

class Motorista extends Funcionario {
    private $numeroCarteira;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteira) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira() {
        return $this->numeroCarteira;
    }

    public function setNumeroCarteira($numeroCarteira) {
        $this->numeroCarteira = $numeroCarteira;
    }

    public function toString() {
        return parent::toString() . " Número da Carteira: " . $this->getNumeroCarteira() . "<br>";
    }
}

class MestreDeObras extends Servente {
    private $numeroFuncionariosSobComando;

    public function __construct($codigo, $nome, $salarioBase, $numeroFuncionariosSobComando) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroFuncionariosSobComando = $numeroFuncionariosSobComando;
    }

    public function getNumeroFuncionariosSobComando() {
        return $this->numeroFuncionariosSobComando;
    }

    public function setNumeroFuncionariosSobComando($numeroFuncionariosSobComando) {
        $this->numeroFuncionariosSobComando = $numeroFuncionariosSobComando;
    }

    public function getSalarioLiquido() {
        $salarioBase = $this->getSalarioBase();
        $salarioBase += $salarioBase * 0.05;
        $adicionalPorFuncionarios = floor($this->numeroFuncionariosSobComando / 10) * 0.1 * $salarioBase;
        $salarioBase += $adicionalPorFuncionarios;

        $inss = $salarioBase * 0.1;
        $ir = 0;
        if ($salarioBase > 2000.0) {
            $ir = ($salarioBase - 2000.0) * 0.12;
        }
        return $salarioBase - $inss - $ir;
    }

    public function toString() {
        return parent::toString() . " Funcionários Sob Comando: " . $this->getNumeroFuncionariosSobComando() . "<br>";
    }
}

// teste
$servente = new Servente(1, "João", 1500);
$motorista = new Motorista(2, "Carlos", 1800, "123456789");
$mestreDeObras = new MestreDeObras(3, "Pedro", 2500, 25);

echo $servente->toString() . "<br>";
echo $motorista->toString() . "<br>";
echo $mestreDeObras->toString() . "<br>";
?>
