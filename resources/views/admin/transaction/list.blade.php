<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Transaksi Selesai</h3>
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
                                            <th>Kode Trf</th>
                                            <th>Kode Invoice</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Tipe Pelanggan</th>
                                            <th>Dibayar Pada</th>
                                            <th>Dibayar Menggunakan</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Status Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TRF123</td>
                                            <td>INV123</td>
                                            <td>Maulana Ichwan A</td>
                                            <td>Rumahan</td>
                                            <td>19 Juni 2022 - 19:20:22</td>
                                            <td>Transfer Bank BRI</td>
                                            <td>Rp150.000</td>
                                            <td>Terkonfirmasi</td>
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
                                    <label for="" class="form-label">Cari Transaksi</label>
                                    <input type="text" name="" id="" class="form-control">
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