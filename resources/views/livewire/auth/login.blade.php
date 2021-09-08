<section>
    @push('pageTitle', 'Twinbit | Login')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="userLogin">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" id="exampleInputEmail1" wire:model.defer="email" required
                                       class="form-control @error('email') is-invalid @enderror {{session()->has('error') ? 'is-invalid' : ''}}">
                                @error('email')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" id="exampleInputPassword1" required wire:model.defer="password"
                                       class="form-control @error('password') is-invalid @enderror {{session()->has('error') ? 'is-invalid' : ''}}">
                                @error('password')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
