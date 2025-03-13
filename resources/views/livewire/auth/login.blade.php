<div class="d-flex align-items-center justify-content-center vh-100 " style="background-color:darkorange">
    <div class="card shadow-sm p-5 bg-warning" style="width:500px">
        <h2 class="text-center mb-4">Login</h2>

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-5 space-between">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email" class="form-control"
                    placeholder="Digite seu email">
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" wire:model="password" class="form-control"
                    placeholder="Digite sua senha">
                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-arrow-bar-right"></i></button>
        </form>
       

        </div>
    </div>

</div>
