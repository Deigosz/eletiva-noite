<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center">Gerenciar Funcionarios</h3>
        
        <a class="btn btn-success mb-4" href="/funcionarios/create">
            <i class="bi bi-plus-circle"></i> Inserir um novo Funcionario
        </a>

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Nome</th>
                    <th class="text-center">CPF</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Turno</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($funcionarios as $t)
                <tr>
                    <td class="text-center">{{ $t->nome }}</td>
                    <td class="text-center">{{ $t->cpf }}</td>
                    <td class="text-center">{{ $t->cargo->nomeCargo }}</td>
                    <td class="text-center">{{ $t->turno->periodo }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm mx-1">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="/funcionarios/{{ $t->id }}/edit" class="btn btn-warning btn-sm mx-1">
                            <i class="bi bi-pencil-square"></i> Alterar
                        </a>
                        <a href="/funcionarios/{{ $t->id }}" class="btn btn-danger btn-sm mx-1">
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