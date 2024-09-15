<?php require_once("header.php") ?>

<h1>Exercício 06</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_previstas">
                Horas Previstas
            </label>
            <input type="number" step="0.1" id="horas_previstas" name="horas_previstas" class="form-control" placeholder="Total de Horas Previstas" required />
        </div>
        <div class="col">
            <label for="taxa_por_hora">
                Taxa por Hora
            </label>
            <input type="number" step="0.01" id="taxa_por_hora" name="taxa_por_hora" class="form-control" placeholder="Taxa por Hora" required />
        </div>
        <div class="col">
            <label for="custos_adicionais">
                Custos Adicionais
            </label>
            <input type="number" step="0.01" id="custos_adicionais" name="custos_adicionais" class="form-control" placeholder="Custos Adicionais" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular Custos</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $horas_previstas = (float)$_POST["horas_previstas"];
    $taxa_por_hora = (float)$_POST["taxa_por_hora"];
    $custos_adicionais = (float)$_POST["custos_adicionais"];

    $custo_mao_de_obra = $horas_previstas * $taxa_por_hora;
    $custo_total_projeto = $custo_mao_de_obra + $custos_adicionais;

    echo "<p>Custo de Mão de Obra: <b>R$ " . number_format($custo_mao_de_obra, 2, ',', '.') . "</b></p>";
    echo "<p>Custo Total do Projeto: <b>R$ " . number_format($custo_total_projeto, 2, ',', '.') . "</b></p>";
}
?>

<?php require_once("footer.php") ?>
