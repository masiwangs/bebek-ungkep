<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Daftar Produk</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg" style="font-size:.8rem">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tersedia untuk</th>
                                            <th>Harga</th>
                                            <th>Min. Pesan</th>
                                            <th>Diskon</th>
                                            <th>Ongkos Kirim</th>
                                            <th>Ongkos Pengemasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dada Ungkep</td>
                                            <td>Agen, Reseller, Industri</td>
                                            <td>Rp60.000</td>
                                            <td>5pcs</td>
                                            <td>
                                                <p class="mb-0">5%</p>
                                                <small>Minimal 50pcs untuk dapat diskon</small>
                                            </td>
                                            <td>
                                                <p class="mb-0">Rp10.000</p>
                                                <small>Minimal 10pcs untuk gratis ongkir</small>
                                            </td>
                                            <td>
                                                <p class="mb-0">Rp10.000</p>
                                                <small>Minimal 10pcs untuk gratis pengemasan</small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                                    <input type="submit" value="Cari" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin-layout>