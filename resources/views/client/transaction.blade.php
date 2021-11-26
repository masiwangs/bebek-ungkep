<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3>Transaksi Anda</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" style="font-size:.8rem">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Jumlah Tagihan</th>
                                            <th>Dibayar melalui</th>
                                            <th>Dibayar pada</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">
                                                <a href="">INV2021112109876</a>
                                            </td>
                                            <td>
                                                Rp150.000,-
                                            </td>
                                            <td>
                                                -
                                            </td>
                                            <td>
                                                -
                                            </td>
                                            <td>
                                                Belum dibayar
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">
                                                <a href="">INV2021112109872</a>
                                            </td>
                                            <td>
                                                Rp120.000,-
                                            </td>
                                            <td>
                                                BRI 484893247832
                                            </td>
                                            <td>
                                                {{ Date::now() }}
                                            </td>
                                            <td>Selesai</td>
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