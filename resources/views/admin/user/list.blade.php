<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Daftar Pelanggan</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg" style="font-size: .8rem">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Maulana</td>
                                            <td>Agen</td>
                                            <td>maulanaichwana@gmail.com</td>
                                            <td>088233010696</td>
                                            <td>Gendol, RT 26, Dukuh, Tangen, Sragen 57261</td>
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