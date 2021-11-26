<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="row d-flex align-items-center" style="min-height: 70vh">
                <div class="col-12 col-lg-4 offset-lg-4">
                    <div class="d-flex justify-content-center mb-4">
                        <h3 class="h3 text-danger">Registrasi</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor HP</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Konfirmasi Password</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-danger btn-block">Registrasi</button>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('client.login') }}" class="text-danger">Masuk.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client-layout>