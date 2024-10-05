<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center">Gerenciar Cargos</h3>
        
        <a class="btn btn-success mb-4" href="/cargos/create">
            <i class="bi bi-plus-circle"></i> Inserir um novo Cargo
        </a>

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Cargo</th>
                    <th>Descrição</th>
                    <th>Salário (R$)</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cargos as $c)
                <tr>
                    <td>{{ $c->nomeCargo }}</td>
                    <td>{{ $c->descricao }}</td>
                    <td>{{ number_format($c->salario, 2, ',', '.') }}</td>
                    <td class="text-center">
                        <a href="/cargos/{{ $c->id }}/edit" class="btn btn-info btn-sm mx-1">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="/cargos" class="btn btn-warning btn-sm mx-1">
                            <i class="bi bi-pencil-square"></i> Alterar
                        </a>
                        <a href="/cargos" class="btn btn-danger btn-sm mx-1">
                            <i class="bi bi-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>


<style>
    .btn-sm {
        font-size: 0.9rem;
        padding: 0.25rem 0.5rem;
    }
    .table {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .thead-dark th {
        background-color: #343a40;
        color: #fff;
    }
</style>
