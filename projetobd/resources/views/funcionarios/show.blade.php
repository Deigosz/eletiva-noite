<x-app-layout>

<div class="container mt-5">
    <h3 class="text-center mb-4">Excluir Funcionário</h3>

    <form action="/funcionarios/{{$funcionario->id}}" method="POST" class="shadow p-4 rounded bg-light">
        @CSRF
        @method('DELETE')
        <div class="row mb-3">
            <div class="col-md-12">
            <label for="nomeFuncionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nomeFuncionario" id="nomeFuncionario" value="{{ $funcionario->nome }}" class="form-control" placeholder="Digite o nome do funcionário" readonly/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
            <label for="nomeFuncionario" class="form-label">CPF:</label>
            <input type="text" name="nomeFuncionario" id="nomeFuncionario" value="{{ $funcionario->cpf }}" class="form-control" placeholder="Digite o nome do funcionário" readonly/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
            <label for="cargo" class="form-label">Cargo do Funcionário:</label>
            <input type="text" name="cargo" id="cargo" value="{{ $funcionario->cargo->nomeCargo }}" class="form-control" placeholder="Digite o cargo do funcionário" readonly/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
            <label for="cargo" class="form-label">Turno:</label>
            <input type="text" name="cargo" id="cargo" value="{{ $funcionario->turno->periodo }}" class="form-control" placeholder="Digite o cargo do funcionário" readonly/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
            <label for="salario" class="form-label">Salário do Funcionário:</label>
            <input type="number" step="0.01" name="salario" id="salario" value="{{ $funcionario->cargo->salario }}" class="form-control" placeholder="Digite o salário" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
            <a href="/funcionarios" class="btn btn-secondary ms-2">
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
