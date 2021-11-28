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
                                <table class="table table-hover table-lg" style="font-size:.7rem">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Pelanggan</th>
                                            <th class="text-nowrap">Invoice</th>
                                            <th class="text-nowrap">Produk</th>
                                            <th class="text-nowrap">Alamat Pengiriman</th>
                                            <th class="text-nowrap">Status Pemesanan</th>
                                            <th class="text-nowrap">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($baskets as $basket)
                                        <tr>
                                            <td>{{ $basket->user->name }}</td>
                                            <td>{{ $basket->invoice->id }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($basket->products as $basket_product)
                                                        <li>{{ $basket_product->product_name }} ({{ $basket_product->product_qty }}pcs)</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                {{ \Str::title(implode(', ', [
                                                    $basket->invoice->shipment_road,
                                                    $basket->invoice->shipment_village,
                                                    $basket->invoice->shipment_subdistrict,
                                                    $basket->invoice->shipment_city,
                                                    $basket->invoice->shipment_province

                                                ])) }}
                                            </td>
                                            <td>
                                                {{ 
                                                    $basket->is_done
                                                        ? 'Selesai'
                                                        : $basket->is_sent
                                                            ? 'Sedang dikirim'
                                                            : $basket->is_paid
                                                                ? 'Sedang dikemas'
                                                                : 'Menunggu pembayaran'
                                                        
                                                }}
                                            </td>
                                            <td>Detail pesanan</td>
                                        </tr>
                                        @endforeach
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