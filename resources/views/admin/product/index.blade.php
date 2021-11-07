<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Produk Bebek Ungkep</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tren Produk</h4>
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
                                <div class="card-header">
                                    <h4>Daftar Produk</h4>
                                </div>
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
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produk Teratas</h4>
                        </div>
                        <div class="card-content pb-4">
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="name ms-4">
                                    <h5 class="mb-1">Hank Schrader</h5>
                                    <h6 class="text-muted mb-0">@johnducky</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="name ms-4">
                                    <h5 class="mb-1">Dean Winchester</h5>
                                    <h6 class="text-muted mb-0">@imdean</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="name ms-4">
                                    <h5 class="mb-1">John Dodol</h5>
                                    <h6 class="text-muted mb-0">@dodoljohn</h6>
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
                    name: 'series1',
                    data: [31, 40, 28, 51, 42, 109, 100]
                }, {
                    name: 'series2',
                    data: [11, 32, 45, 32, 34, 52, 41]
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
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
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