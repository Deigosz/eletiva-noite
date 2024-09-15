<?php

abstract class Telefone {
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    protected $custoPorMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoPorMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinutoBase = $custoPorMinutoBase;
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular {
    public function calculaCusto($tempo) {
        $custoComAcrescimo = $this->custoPorMinutoBase * 1.4;
        return $tempo * $custoComAcrescimo;
    }
}

class PosPago extends Celular {
    public function calculaCusto($tempo) {
        $custoComDesconto = $this->custoPorMinutoBase * 0.9;
        return $tempo * $custoComDesconto;
    }
}

$telefoneFixo = new Fixo(11, '1234-5678', 0.5);
$celularPrePago = new PrePago(21, '9876-5432', 0.7, 'Operadora1');
$celularPosPago = new PosPago(31, '9988-7766', 0.7, 'Operadora2');

echo "Custo da ligação no telefone fixo (10 minutos): R$ " . formatarNumeroBR($telefoneFixo->calculaCusto(10)) . "<br>";
echo "Custo da ligação no celular pré-pago (10 minutos): R$ " . formatarNumeroBR($celularPrePago->calculaCusto(10)) . "<br>";
echo "Custo da ligação no celular pós-pago (10 minutos): R$ " . formatarNumeroBR($celularPosPago->calculaCusto(10)) . "<br>";

function formatarNumeroBR($numero) {
    return number_format($numero, 2, ',', '.');
}
?>
