<?php require_once("header.php") ?>

<h1>Exercício 07</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo_projeto">
                Prazo do Projeto (em dias)
            </label>
            <input type="number" id="prazo_projeto" name="prazo_projeto" class="form-control" placeholder="Prazo em dias" required />
        </div>
        <div class="col">
            <label for="atividades_estabelecidas">
                Total de Atividades Estabelecidas
            </label>
            <input type="number" id="atividades_estabelecidas" name="atividades_estabelecidas" class="form-control" placeholder="Número de Atividades" required />
        </div>
        <div class="col">
            <label for="atividades_desenvolvidas">
                Atividades Já Desenvolvidas
            </label>
            <input type="number" id="atividades_desenvolvidas" name="atividades_desenvolvidas" class="form-control" placeholder="Número de Atividades Desenvolvidas" required />
        </div>
        <div class="col">
            <label for="produtividade_diaria">
                Produtividade Diária (atividades por dia)
            </label>
            <input type="number" step="0.1" id="produtividade_diaria" name="produtividade_diaria" class="form-control" placeholder="Atividades por Dia" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Avaliar Desempenho</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $prazo_projeto = (int)$_POST["prazo_projeto"];
    $atividades_estabelecidas = (int)$_POST["atividades_estabelecidas"];
    $atividades_desenvolvidas = (int)$_POST["atividades_desenvolvidas"];
    $produtividade_diaria = (float)$_POST["produtividade_diaria"];

    $dias_restantes = $prazo_projeto - floor($atividades_desenvolvidas / $produtividade_diaria);
    $atividades_restantes = $atividades_estabelecidas - $atividades_desenvolvidas;

    if ($atividades_restantes <= 0) {
        $situacao = "O projeto já foi concluído.";
    } elseif ($dias_restantes <= 0) {
        $situacao = "O prazo do projeto já foi ultrapassado.";
    } else {
        $situacao = "O projeto ainda está em andamento.";
    }

    echo "<p>Prazo do Projeto: <b>{$prazo_projeto} dias</b></p>";
    echo "<p>Total de Atividades Estabelecidas: <b>{$atividades_estabelecidas}</b></p>";
    echo "<p>Atividades Desenvolvidas: <b>{$atividades_desenvolvidas}</b></p>";
    echo "<p>Produtividade Diária: <b>{$produtividade_diaria} atividades/dia</b></p>";
    echo "<p>Atividades Restantes: <b>{$atividades_restantes}</b></p>";
    echo "<p>Dias Restantes: <b>{$dias_restantes}</b></p>";
    echo "<p>Situação do Projeto: <b>{$situacao}</b></p>";
}
?>

<?php require_once("footer.php") ?>
