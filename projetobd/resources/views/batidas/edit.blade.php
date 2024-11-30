<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Editar Batida de Ponto</h3>

        <form action="{{ route('batidas.update', $batida->id) }}" method="POST" class="shadow p-4 rounded bg-light">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="funcionario_id" class="form-label">Funcionário:</label>
                    <select name="funcionario_id" id="funcionario_id" class="form-control" required>
                        <option value="">Selecione</option>
                        @foreach($funcionarios as $funcionario)
                        <option value="{{ $funcionario->id }}" {{ $funcionario->id == $batida->funcionario_id ? 'selected' : '' }}>
                            {{ $funcionario->nome }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="data" class="form-label">Data:</label>
                    <input type="date" name="data" id="data" class="form-control" value="{{ $batida->data }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="hora" class="form-label">Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control" value="{{ $batida->hora }}" required>
                </div>
            </div>
            <div class="row text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Atualizar
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
