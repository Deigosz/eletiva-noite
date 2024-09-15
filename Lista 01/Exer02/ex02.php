<?php require_once("header.php") ?>

<h1>Exercício 01</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="hora_entrada">
                Hora entrada
            </label>
            <input type="time" id="hora_entrada" name="hora_entrada" class="form-control" />
        </div>
        <div class="col">
            <label for="hora_saida">
                Hora saída
            </label>
            <input type="time" id="hora_saida" name="hora_saida" class="form-control" />
        </div>
        <div class="col">
            <label for="valor_hora">
                Valor da Hora
            </label>
            <input type="number" step="0.01" id="valor_hora" name="valor_hora" class="form-control" placeholder="Valor por Hora" />
        </div>
        <div class="col">
            <label for="dias_trabalhados">
                Dias Trabalhados na Semana
            </label>
            <input type="number" id="dias_trabalhados" name="dias_trabalhados" class="form-control" placeholder="Dias por Semana" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<?php
function calcularTempo($hora_entrada, $hora_saida)
{
    $hora_entrada = new DateTime($hora_entrada);
    $hora_saida = new DateTime($hora_saida);
    return $hora_saida->diff($hora_entrada);
}

if ($_POST) {
    $hora_entrada = $_POST["hora_entrada"];
    $hora_saida = $_POST["hora_saida"];
    $valor_hora = (float)$_POST["valor_hora"];
    $dias_trabalhados = (int)$_POST["dias_trabalhados"];

    $tempo_trabalhado = calcularTempo($hora_entrada, $hora_saida);
    $horas_trabalhadas_por_dia = $tempo_trabalhado->h + ($tempo_trabalhado->i / 60);
    $horas_trabalhadas_na_semana = $horas_trabalhadas_por_dia * $dias_trabalhados;
    $salario_semanal = $horas_trabalhadas_na_semana * $valor_hora;

    echo "<p>Horas Trabalhadas por Dia: <b>" . number_format($horas_trabalhadas_por_dia, 0) . "hrs</b></p>";
    echo "<p>Horas Trabalhadas na Semana: <b>" . number_format($horas_trabalhadas_na_semana, 0) . "hrs</b></p>";
    echo "<p>Salário Semanal: <b>R$ " . number_format($salario_semanal, 2, ',', '.') . "</b></p>";
}
?>

<?php require_once("footer.php") ?>
