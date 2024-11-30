<x-app-layout>

<div class="container mt-5">
    <h3 class="text-center mb-4">Alterar Turno</h3>

    <form action="/turnos/{{$turno->id}}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="periodo" class="form-label">Informe o Período:</label>
                <select name="periodo" id="periodo" class="form-control" required>
                    <option value="Manhã" {{ $turno->periodo == 'Manhã' ? 'selected' : '' }}>Manhã</option>
                    <option value="Tarde" {{ $turno->periodo == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                    <option value="Noite" {{ $turno->periodo == 'Noite' ? 'selected' : '' }}>Noite</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="horario_inicio" class="form-label">Horário do Turno:</label>
                <input type="text" name="horario_inicio" id="horario_inicio" value="{{ $turno->horario_inicio }}" class="form-control" placeholder="Digite o horário do turno" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label for="horario" class="form-label">Horário do Turno:</label>
                <input type="text" name="horario" id="horario" value="{{ $turno->horario_final }}" class="form-control" placeholder="Digite o horário do turno" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/turnos" class="btn btn-secondary ms-2">
                    <i class="bi bi-arrow-left-circle"></i> Voltar
                </a>
                <button type="submit" class="btn btn-primary">
                    Alterar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>


<style>
    .form-control {
        border-radius: 0.25rem;
    }
    .btn-warning {
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
    }
    .btn-secondary {
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
    }
    .shadow {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .bg-light {
        background-color: #f8f9fa;
    }
</style>
