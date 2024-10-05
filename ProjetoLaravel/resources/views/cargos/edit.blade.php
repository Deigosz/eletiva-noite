<x-app-layout>

    <h5>Alterar Cargos</h5>

    <form action="/cargo/{{ $cargo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nomeCargo" class="form-label">Informe o Cargo:</label>
                <input type="text" name="nomeCargo" id="nomeCargo" value="{{ $cargo->nomeCargo }}" class="form-control"/>

                <label for="descricao" class="form-label">Informe a descrição do Cargo:</label>
                <input type="text" name="descricao" id="descricao" value="{{ $cargo->descricao }}" class="form-control"/>

                <label for="salario" class="form-label">Informe o salário do Cargo:</label>
                <input type="text" name="salario" id="salario" value="{{ $cargo->salario }}" class="form-control"/>
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
