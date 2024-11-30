<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Registrar Batida de Ponto</h3>

        <form action="{{ route('batidas.store') }}" method="POST" class="shadow p-4 rounded bg-light">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="funcionario_id" class="form-label">Funcionário:</label>
                    <select name="funcionario_id" id="funcionario_id" class="form-control" required>
                        <option value="">Selecione</option>
                        @foreach($funcionarios as $funcionario)
                        <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="data" class="form-label">Data:</label>
                    <input type="date" name="data" id="data" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="hora" class="form-label">Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
            </div>
            <div class="row text-center">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Registrar
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
