<x-app-layout>

    <h5>Novo Cargo</h5>

    <form action="/cargos" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="nomeCargo" class="form-label">Informe o Cargo:</label>
                <input type="text" name="nomeCargo" id="nomeCargo" class="form-control"/>

                <label for="descricao" class="form-label">Informe a descrição do Cargo:</label>
                <input type="text" name="descricao" id="descricao" class="form-control"/>

                <label for="salario" class="form-label">Informe o salário do Cargo:</label>
                <input type="text" name="salario" id="salario" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>
