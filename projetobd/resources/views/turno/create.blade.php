<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Novo Turno</h3>

        <form action="/turnos" method="POST" class="shadow p-4 rounded bg-light">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="periodo" class="form-label">Informe o Período:</label>
                    <select name="periodo" id="periodo" class="form-control" required>
                        <option value="">Selecione o período</option>
                        <option value="Manhã" {{ old('periodo') == 'Manhã' ? 'selected' : '' }}>Manhã</option>
                        <option value="Tarde" {{ old('periodo') == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                        <option value="Noite" {{ old('periodo') == 'Noite' ? 'selected' : '' }}>Noite</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="horario_inicio" class="form-label">Informe o horário de início:</label>
                    <input type="time" name="horario_inicio" id="horario_inicio" class="form-control" value="{{ old('horario_inicio') }}" required/>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="horario_final" class="form-label">Informe o horário de término:</label>
                    <input type="time" name="horario_final" id="horario_final" class="form-control" value="{{ old('horario_final') }}" required/>
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

<style>
    .form-control {
        border-radius: 0.25rem;
    }
    .btn-success {
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