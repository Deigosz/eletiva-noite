<x-app-layout>

    <h5 class="mt-3">Gerenciar Cargos</h5>

    <a class="btn btn-success" href="/cargos/create">
        Inserir um novo Cargo
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $c)
            <tr>
                <td>{{ $c->nomeCargo }}</td>
                <td>
                    <a href="/cargos" class="btn btn-warning">Alterar</a>
                    <a href="/cargos" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>