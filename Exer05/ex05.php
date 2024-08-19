<?php require_once("header.php") ?>

<h1>Exercício 05</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados">
                Dias Trabalhados na Empresa
            </label>
            <input type="number" id="dias_trabalhados" name="dias_trabalhados" class="form-control" placeholder="Dias Trabalhados" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular Férias</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $dias_trabalhados = (int)$_POST["dias_trabalhados"];
    $dias_ferias = min(floor($dias_trabalhados / 30), 30);

    echo "<p>Dias de Férias: <b>{$dias_ferias} dias</b></p>";
}
?>

<?php require_once("footer.php") ?>
