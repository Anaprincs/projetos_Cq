<div class="mt-5">
    {{-- margin top --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($admin as $a)
                            <td>{{ $a->id }} </td>
                            <td> {{ $a->nome }}</td>
                            <td> {{ $a->cpf }}</td>
                           
                           
                            <td>
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                                    wire:click="abrirModalVisualizar({{ $a->id }})">Vizualizar</button>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal" wire:click="abrirModalEdicao({{$a->id}})">Editar</button>

                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                 wire:click="abrirModalExclusao({{$a->id}})">Excluir</button>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

<livewire:administracao.edit> 


        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p> Tem certeza que deseja excluir o Cadastro??</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" wire:click="excluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes dos Cadastros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>Email:</strong>{{ $email }}</p>
                    <p><strong>CPF:</strong>{{ $cpf }}</p>
                    <p><strong>Senha:</strong>{{ $senha }}</p>
                    <p><strong>Confirmar Senha:</strong>{{ $confirmar_senha }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

