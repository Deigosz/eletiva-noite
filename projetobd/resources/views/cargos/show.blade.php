<x-app-layout>

<div class="container mt-5">
        <h3 class="text-center mb-4">Alterar Cargo</h3>


        <form action="/cargos/{{$cargo->id}}" method="POST" class="shadow p-4 rounded bg-light">
            @CSRF
            @method('DELETE')
            <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="nomeCargo" class="form-label">Informe o Cargo:</label>
                        <input type="text" name="nomeCargo" id="nomeCargo" value="{{ $cargo->nomeCargo }}" class="form-control" placeholder="Digite o nome do cargo" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="descricao" class="form-label">Informe a descrição do Cargo:</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Digite a descrição do cargo" required>{{ $cargo->descricao }}</textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="salario" class="form-label">Informe o salário do Cargo:</label>
                        <input type="number" step="0.01" name="salario" id="salario" value="{{ $cargo->salario }}" class="form-control" placeholder="Digite o salário" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/cargos" class="btn btn-secondary ms-2">
                            <i class="bi bi-arrow-left-circle"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Excluir
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
