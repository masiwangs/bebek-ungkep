<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3>Profil Akun</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Login sebagai</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="1">Pelanggan</option>
                                            <option value="2">Reseller</option>
                                            <option value="3">Agen</option>
                                            <option value="3">Heureka/Industri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Nama Anda</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">No HP</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
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