<?php

class Ponto {
    public int $x;
    public int $y;
    private static int $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public function setx($x) {
        $this->x = $x;
    }

    public function getx() {
        return $this->x;
    }

    public function sety($y) {
        $this->y = $y;
    }

    public function gety() {
        return $this->y;
    }

    public static function getContador(): int {
        return self::$contador;
    }

    public function distancia(Ponto $outroPonto): float {
        return sqrt(pow($this->x - $outroPonto->getx(), 2) + pow($this->y - $outroPonto->gety(), 2));
    }

    public function distanciaXY(int $x, int $y): float {
        return sqrt(pow($this->x - $x, 2) + pow($this->y - $y, 2));
    }

    public static function distanciaEntrePontos(int $x1, int $y1, int $x2, int $y2): float {
        return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    }

    public function toString(): string {
        return "Ponto(" . $this->x . ", " . $this->y . ")";
    }
}

$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(6, 8);

echo "Distância entre ponto1 e ponto2: <b>" . $ponto1->distancia($ponto2) . "</b><br>";
echo "Distância entre ponto1 e (10, 10): <b>" . $ponto1->distanciaXY(10, 10) . "</b><br>";
echo "Distância entre os pontos (3, 4) e (7, 1): <b>" . Ponto::distanciaEntrePontos(3, 4, 7, 1) . "</b><br>";
echo "Número de objetos criados: <b>" . Ponto::getContador() . "</b><br><br>";

echo $ponto1->toString() . "<br>";
echo $ponto2->toString() . "<br><br>";
?>
