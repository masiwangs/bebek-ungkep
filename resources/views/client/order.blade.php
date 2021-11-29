<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3 class="h3 text-dark">Pesanan Anda</h3>
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
                                            <th>Produk</th>
                                            <th class="text-nowrap">Jumlah Tagihan</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($baskets as $basket)
                                        <tr>
                                            <td class="font-semibold">
                                                <a href="" class="text-danger">{{ $basket->invoice->code }}</a>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($basket->products as $basket_product)
                                                    <li>{{ $basket_product->product_name }} ({{ $basket_product->product_qty }}pcs)</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            @if($basket->invoice)
                                            @if($basket->invoice->payment)
                                            <td>
                                                Rp{{ number_format($basket->invoice->payment->bill, 0, ',', '.') }},-
                                            </td>
                                            @else
                                            <td class="text-danger">
                                                <a href="{{ route('client.payment') }}">Selesaikan pembayaran</a>
                                            </td>
                                            @endif
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
                                                @if ($basket->is_done)
                                                    Selesai
                                                @elseif ($basket->is_sent)
                                                    Sedang dikirim
                                                @elseif ($basket->is_payment_confirmed)
                                                    Sedang dikemas
                                                @elseif ($basket->is_paid)
                                                    Menunggu konfirmasi pembayaran
                                                @else
                                                    Menunggu pembayaran
                                                @endif
                                            </td>
                                            @else
                                            <td colspan="3">Harap selesaikan pesanan Anda</td>
                                            @endif
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