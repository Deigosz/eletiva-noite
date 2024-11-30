<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center">Gerenciar Batidas de Ponto</h3>
        
        <a class="btn btn-success mb-4" href="/batidas/create">
            <i class="bi bi-plus-circle"></i> Registrar Batida de Ponto
        </a>

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Funcionário</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Hora</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($batidas as $b)
                <tr>
                    <td class="text-center">{{ $b->funcionario->nome }}</td>
                    <td class="text-center">{{ $b->data }}</td>
                    <td class="text-center">{{ $b->hora }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm mx-1">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="/batidas/{{ $b->id }}/edit" class="btn btn-warning btn-sm mx-1">
                            <i class="bi bi-pencil-square"></i> Alterar
                        </a>
                        <a href="/batidas/{{ $b->id }}" class="btn btn-danger btn-sm mx-1">
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