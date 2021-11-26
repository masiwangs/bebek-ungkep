<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Transaksi/Keuangan Bebek Ungkep</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Arus Keuangan</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-arus-keuangan"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Traksaksi Berhasil</h4>
                                    <a href="" class="btn btn-sm my-0 text-primary"><i class="bi bi-eye"></i> Lihat Semua</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg" style="font-size: .8rem">
                                            <thead>
                                                <tr>
                                                    <th>Kode Trf</th>
                                                    <th>Kode Invoice</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Dibayar Pada</th>
                                                    <th>Dibayar Menggunakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>TRF123</td>
                                                    <td>INV123</td>
                                                    <td>
                                                        <p class="mb-0">Maulana Ichwan A</p>
                                                        <small>Pelanggan Rumahan</small>
                                                    </td>
                                                    <td>19 Juni 2022 - 19:20:22</td>
                                                    <td>
                                                        <p class="mb-0">Transfer Bank BRI</p>
                                                        <small>Rp150.000</small>
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
                            <h4>Transaksi Terbaru</h4>
                        </div>
                        <div class="card-body pb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Invoice</th>
                                        <th>Jumlah Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="fw-bold mb-0">INV2021112001291</p>
                                        </td>
                                        <td>Rp.140.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="fw-bold mb-0">INV2021112001212</p>
                                        </td>
                                        <td>Rp.240.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="fw-bold mb-0">INV2021112001321</p>
                                        </td>
                                        <td>Rp.40.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
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
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        horizontal: false,
                        columnWidth: '55%',
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                colors:['#ffc107'],

                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                },
                yaxis: {
                    title: {
                        text: '$ (thousands)'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart-arus-keuangan"), options);
            chart.render();
        </script>
    </x-slot>
</x-admin-layout>