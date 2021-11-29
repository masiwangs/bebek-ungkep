<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3 class="h3 text-dark">Droppoint Baru</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" required name="name" id="" class="form-control">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor HP</label>
                                    <input type="text" required name="phone" id="" class="form-control">
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" required name="email" id="" class="form-control">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password Baru</label>
                                    <input type="password" required name="password" id="" class="form-control">
                                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <div class="row">
                                        <div class="col-3 mb-2">
                                            <input type="text" name="postalcode" id="" class="form-control" placeholder="Kodepos">
                                            @error('postalcode') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-3 mb-2">
                                            <input type="text" name="province" id="" class="form-control" placeholder="Provinsi">
                                            @error('province') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-3 mb-2">
                                            <input type="text" name="city" id="" class="form-control" placeholder="Kabupaten/Kota">
                                            @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-3 mb-2">
                                            <input type="text" name="subdistrict" id="" class="form-control" placeholder="Kecamatan">
                                            @error('subdistrict') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-3 mb-2">
                                            <input type="text" name="village" id="" class="form-control" placeholder="Desa/Kelurahan">
                                            @error('village') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="col-9 mb-2">
                                            <input type="text" name="road" id="" class="form-control" placeholder="Jalan">
                                            @error('road') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Simpan" class="btn btn-warning text-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cari</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Kategori pelanggan</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Cari" class="btn btn-warning text-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin-layout>