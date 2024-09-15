<?php require_once("header.php") ?>

<h1>Exercício 03</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros">
                Lucros da Empresa (R$)
            </label>
            <input type="number" step="0.01" id="lucros" name="lucros" class="form-control" placeholder="Lucros da Empresa" required />
        </div>
        <div class="col">
            <label for="nome_funcionario">
                Nome do Funcionário
            </label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" placeholder="Nome do Funcionário" required />
        </div>
        <div class="col">
            <label for="desempenho">
                Desempenho (Escala de 1 a 5)
            </label>
            <input type="number" step="1" id="desempenho" name="desempenho" class="form-control" min="1" max="5" placeholder="Desempenho" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular Bônus</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $lucros = (float)$_POST["lucros"];
    $nome_funcionario = $_POST["nome_funcionario"];
    $desempenho = (int)$_POST["desempenho"];

    $percentual = 0.001 + ($desempenho - 1) * 0.0015;
    $bonus = $lucros * $percentual;

    echo "<p>Funcionário: <b>{$nome_funcionario}</b></p>";
    echo "<p>Desempenho: <b>{$desempenho}</b></p>";
    echo "<p>Bônus Recebido: <b>R$ " . number_format($bonus, 2, ',', '.') . "</b></p>";
}
?>

<?php require_once("footer.php") ?>
