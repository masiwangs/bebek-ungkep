<x-droppoint-layout>
    <div class="content-wrapper container">
        <div class="page-content" id="app">
            <section class="row">
                <div class="col-12 mb-5">
                    <h3 class="h3 text-dark">Daftar Pesanan baru</h3>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Nama Pemesan</th>
                                        <th>Produk Pesanan</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchase_orders as $purchase_order)
                                    <tr>
                                        <td>
                                            <small>{{ $purchase_order->basket->paid_at }}</small>
                                            <div>
                                                {{ $purchase_order->basket->invoice->code }}
                                            </div>
                                        </td>
                                        <td>{{ $purchase_order->basket->user->name }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($purchase_order->basket->products as $basket_product)
                                                <li>{{ $basket_product->product_name }} ({{ $basket_product->product_qty }}pcs)</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            {{ \Str::title(implode(', ', [
                                                $purchase_order->basket->invoice->shipment_road,
                                                $purchase_order->basket->invoice->shipment_village,
                                                $purchase_order->basket->invoice->shipment_subdistrict,
                                                $purchase_order->basket->invoice->shipment_city,
                                                $purchase_order->basket->invoice->shipment_province

                                            ])) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('droppoint.order.show', ['basket' => $purchase_order->basket->id]) }}" class="text-primary">Konfirmasi pengiriman</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-droppoint-layout>