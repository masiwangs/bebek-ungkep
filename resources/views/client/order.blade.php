<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3>Pesanan Anda</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" style="font-size:.8rem">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Invoice</th>
                                            <th>Produk</th>
                                            <th>Jumlah Tagihan</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ Date::now() }}</td>
                                            <td class="font-semibold">
                                                <a href="">INV2021112109876</a>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Bebek ungkep (5pcs)</li>
                                                    <li>Bebek ungkep box (5pcs)</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp150.000,-
                                            </td>
                                            <td>
                                                Jl. Tempong No. 91, Semarang
                                            </td>
                                            <td>
                                                Sedang dikemas
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ Date::now() }}</td>
                                            <td class="font-semibold">
                                                <a href="">INV2021112109872</a>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Bebek ungkep (5pcs)</li>
                                                    <li>Bebek ungkep box (3pcs)</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp120.000,-
                                            </td>
                                            <td>
                                                Jl. Tempong No. 91, Semarang
                                            </td>
                                            <td>
                                                Dalam perjalanan
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
                        <div class="card-header">
                            <h4 class="h4">Pencarian pesanan</h4>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode invoice</label>
                                    <input type="text" name="" class="form-control form-control-sm" id="">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Cari" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-client-layout>