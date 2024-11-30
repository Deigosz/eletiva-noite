<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Novo Funcionário</h3>

        <form action="/funcionarios" method="POST" class="shadow p-4 rounded bg-light">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do funcionário" required/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite o CPF do funcionário" required/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="cargo_id" class="form-label">Cargo:</label>
                    <select name="cargo_id" id="cargo_id" class="form-control" required>
                        @foreach($cargos as $cargo)
                            <option value="{{ $cargo->id }}">{{ $cargo->nomeCargo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="turno_id" class="form-label">Turno:</label>
                    <select name="turno_id" id="turno_id" class="form-control" required>
                        @foreach($turnos as $turno)
                            <option value="{{ $turno->id }}">{{ $turno->periodo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>

