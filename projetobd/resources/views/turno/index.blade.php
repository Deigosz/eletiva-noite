<x-app-layout>

    <div class="container mt-5">
        <h3 class="text-center">Gerenciar Turnos</h3>
        
        <a class="btn btn-success mb-4" href="/turnos/create">
            <i class="bi bi-plus-circle"></i> Inserir um novo Turno
        </a>

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Período</th>
                    <th class="text-center">Horário Inicio</th>
                    <th class="text-center">Horário Fim</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($turno as $t)
                <tr>
                    <td class="text-center">{{ $t->periodo }}</td>
                    <td class="text-center">{{ $t->horario_inicio }}</td>
                    <td class="text-center">{{ $t->horario_final }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm mx-1">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="/turnos/{{ $t->id }}/edit" class="btn btn-warning btn-sm mx-1">
                            <i class="bi bi-pencil-square"></i> Alterar
                        </a>
                        <a href="/turnos/{{ $t->id }}" class="btn btn-danger btn-sm mx-1">
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