<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="row d-flex align-items-center" style="min-height: 70vh">
                <div class="col-12 col-lg-4 offset-lg-4">
                    <div class="d-flex justify-content-center mb-4">
                        <h3 class="h3 text-danger">Login</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" name="email" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="text-secondary"><i class="bi bi-question-circle-fill"></i> Lupa password</a>
                                </div>
                                <button type="submit" class="btn btn-danger btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0">Belum punya akun? <a href="{{ route('client.register') }}" class="text-danger">Daftar sekarang.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>