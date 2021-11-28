<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3 class="h3 text-dark">Keamanan Akun</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Password Baru</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="password" name="password" required id="" class="form-control">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Konfirmasi</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="password" name="password_confirm" required id="" class="form-control">
                                        @error('password_confirm')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Perbarui" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="h4">Menu Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ route('client.profile') }}" class="text-danger">Data Diri</a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('client.security') }}" class="text-danger">Keamanan</a>
                            </div>
                            <div class="mb-3">
                                <a href="" class="text-danger">Pengajuan Agen</a>
                            </div>
                            <div class="mb-3">
                                <a href="" class="text-danger">Pengajuan Heureka/Industri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-client-layout>