<?php require_once("header.php") ?>

<h1>Exercício 04</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa">
                Nome da Tarefa
            </label>
            <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control" placeholder="Nome da Tarefa" required />
        </div>
        <div class="col">
            <label for="horas_tarefa">
                Total de Horas da Tarefa
            </label>
            <input type="number" step="0.1" id="horas_tarefa" name="horas_tarefa" class="form-control" placeholder="Horas da Tarefa" required />
        </div>
        <div class="col">
            <label for="complexidade_tarefa">
                Complexidade da Tarefa
            </label>
            <select id="complexidade_tarefa" name="complexidade_tarefa" class="form-control" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="nome_funcionario">
                Nome do Funcionário
            </label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" placeholder="Nome do Funcionário" required />
        </div>
        <div class="col">
            <label for="horas_disponiveis">
                Horas Disponíveis de Trabalho
            </label>
            <input type="number" step="0.1" id="horas_disponiveis" name="horas_disponiveis" class="form-control" placeholder="Horas Disponíveis" required />
        </div>
        <div class="col">
            <label for="nivel_experiencia">
                Nível de Experiência
            </label>
            <select id="nivel_experiencia" name="nivel_experiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Verificar</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $nome_tarefa = $_POST["nome_tarefa"];
    $horas_tarefa = (float)$_POST["horas_tarefa"];
    $complexidade_tarefa = $_POST["complexidade_tarefa"];
    $nome_funcionario = $_POST["nome_funcionario"];
    $horas_disponiveis = (float)$_POST["horas_disponiveis"];
    $nivel_experiencia = $_POST["nivel_experiencia"];

    $pode_realizar = false;

    if ($horas_disponiveis >= $horas_tarefa * 1.1) {
        if ($nivel_experiencia == 'junior' && $complexidade_tarefa == 'baixa') {
            $pode_realizar = true;
        } elseif ($nivel_experiencia == 'pleno' && in_array($complexidade_tarefa, ['baixa', 'media'])) {
            $pode_realizar = true;
        } elseif ($nivel_experiencia == 'senior' && in_array($complexidade_tarefa, ['media', 'alta'])) {
            $pode_realizar = true;
        }
    }

    if ($pode_realizar) {
        echo "<p>O funcionário <b>{$nome_funcionario}</b> pode realizar a tarefa <b>{$nome_tarefa}</b>.</p>";
    } else {
        echo "<p>O funcionário <b>{$nome_funcionario}</b> <b>NÃO</b> pode realizar a tarefa <b>{$nome_tarefa}</b>.</p>";
    }
}
?>

<?php require_once("footer.php") ?>
