<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true"
    wire:listener="hideModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" wire:model="data_nascimento">
                </div>
                <div class="mb-3 fw-bold ">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="ex:xxx@xxx.com" wire:model.defer="email">
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label fw-bold">RM</label>
                    <input type="text" class="form-control" id="rm" name="rm" placeholder="ex:****"
                        wire:model.defer="rm">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label fw-bold">Senha</label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="ex:******"
                        wire:model.defer="senha">
                </div>
                <div class="mb-3">
                    <label for="confirmar_senha" class="form-label fw-bold">Confirmar Senha</label>
                    <input type="text" class="form-control" id="confirmar_senha" name="confirmar_senha"
                        placeholder="ex:******" wire:model.defer="confirmar_senha">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" wire:click="salvar">Salvar</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('fecharModalEdicao', function() {
                var modal = document.getElementById('editModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);

                if(modalInstance){
                    modalInstance.hide();
                }  else { 
                    var newModal = new bootstrap.modal(modal); 
                    newModal.hide(); 
                }

                document.querySelectorAll('.modal-backdrop')
                .forEach(el => el.remove()); 
                document.body.classList.remove('modal-open');
            });
        });
    </script>

</div>