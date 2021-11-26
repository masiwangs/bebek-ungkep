<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Dashboard Penjualan Bebek Ungkep</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="bi-cash-coin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total Penjualan</h6>
                                            <h6 class="font-extrabold mb-0">Rp123jt</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="bi-house-door"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Droppoint</h6>
                                            <h6 class="font-extrabold mb-0">183.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="bi-cart4"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Agen/Reseller</h6>
                                            <h6 class="font-extrabold mb-0">80.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="bi-person"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Pelanggan Aktif</h6>
                                            <h6 class="font-extrabold mb-0">112</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Grafik Penjualan</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-penjualan"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pesanan Terakhir</h4>
                                </div>
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
                                                    <td>2021-11-21 11:47:08</td>
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
                                                    <td>2021-11-21 11:47:08</td>
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
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="/images/profile.png" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Halo</h5>
                                    <h6 class="text-muted mb-0">Admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Komposisi Penjualan</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-komposisi-penjualan"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Transaksi Terbaru</h4>
                            <a href="{{ route('admin.transaction.new') }}">
                                <i class="bi bi-list"></i>
                            </a>
                        </div>
                        <div class="card-body">
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
                    name: 'Penjualan',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
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
                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                },
                colors:['#ffc107'],
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
                            return val + " pcs"
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart-penjualan"), options);
            chart.render();
        </script>
        <script>
            var options = {
                series: [44, 55, 13, 43, 22],
                chart: {
                    width: 260,
                    type: 'pie',
                },
                labels: ['Produk A', 'Produk B', 'Produk C', 'Produk D', 'Produk E'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                legend: {
                    show: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart-komposisi-penjualan"), options);
            chart.render();
        </script>
    </x-slot>
</x-admin-layout>