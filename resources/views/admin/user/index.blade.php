<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Pelanggan Bebek Ungkep</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tren Pelanggan</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-tren-produk"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Daftar Pelanggan</h4>
                                    <a href="{{ route('admin.user.list') }}" class="btn btn-sm text-primary my-auto"><i class="bi bi-eye"></i> Lihat Semua</a>
                                </div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pelanggan Teratas</h4>
                        </div>
                        <div class="card-body pb-4">
                            <div class="list-group-item px-0 border-0">
                                <div class="row gx-2">
                                    <div class="col-3">
                                        <img src="/images/profile.png" class="w-100" alt="singleminded">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-0">Ari</h6>
                                        <p class="mb-0" style="font-size:.8rem">5.000 pembelian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item px-0 border-0">
                                <div class="row gx-2">
                                    <div class="col-3">
                                        <img src="/images/profile.png" class="w-100" alt="singleminded">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-0">Budi</h6>
                                        <p class="mb-0" style="font-size:.8rem">5.500 pembelian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item px-0 border-0">
                                <div class="row gx-2">
                                    <div class="col-3">
                                        <img src="/images/profile.png" class="w-100" alt="singleminded">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-0">Dika</h6>
                                        <p class="mb-0" style="font-size:.8rem">5.000 pembelian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item px-0 border-0">
                                <div class="row gx-2">
                                    <div class="col-3">
                                        <img src="/images/profile.png" class="w-100" alt="singleminded">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-0">Enggar</h6>
                                        <p class="mb-0" style="font-size:.8rem">5.500 pembelian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item px-0 border-0">
                                <div class="row gx-2">
                                    <div class="col-3">
                                        <img src="/images/profile.png" class="w-100" alt="singleminded">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-0">Fahri</h6>
                                        <p class="mb-0" style="font-size:.8rem">5.000 pembelian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <x-slot name="script">
        <script>
            var options = {
                series: [{
                    name: 'Rumahan',
                    data: [31, 40, 28, 51, 42, 109, 100]
                }, {
                    name: 'Reseller',
                    data: [11, 32, 45, 32, 34, 52, 41]
                }, {
                    name: 'Agen',
                    data: [1, 23, 45, 67, 9, 21, 32]
                }, {
                    name: 'Heureka',
                    data: [34, 65, 23, 56, 87, 32, 76]
                }],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart-tren-produk"), options);
            chart.render();
        </script>
    </x-slot>
</x-admin-layout>