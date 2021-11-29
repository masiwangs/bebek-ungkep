<x-droppoint-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3 class="h3">Pesanan #{{ $basket->invoice->code }}</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Nama Pemesan</label>
                                <p>{{ $basket->user->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Detail Pesanan</label>
                                <table class="table">
                                    <tbody>
                                        @foreach ($basket->products as $basket_product)
                                        <tr>
                                            <td>{{ $basket_product->product_name }}</td>
                                            <td>Rp{{ number_format($basket_product->product_price, 0, ',', '.') }},-</td>
                                            <td>{{ $basket_product->product_qty }}pcs</td>
                                            <td>Rp{{ number_format($basket_product->product_price * $basket_product->product_qty, 0, ',', '.') }},-</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Alamat Pengiriman</label>
                                <p>
                                    {{ \Str::title(implode(', ', [
                                        $basket->invoice->shipment_road,
                                        $basket->invoice->shipment_village,
                                        $basket->invoice->shipment_subdistrict,
                                        $basket->invoice->shipment_city,
                                        $basket->invoice->shipment_province

                                    ])) }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Status Pembayaran</label>
                                @if ($basket->is_sent)
                                    <p>Pembayaran selesai</p>
                                @elseif($basket->is_payment_confirmed)
                                    <p class="mb-0">Pembayaran selesai</p>
                                @elseif($basket->is_paid)
                                <p class="mb-0">Menunggu konfirmasi pembayaran (<a href="{{ route('admin.transaction.show', ['payment' => $basket->invoice->payment->id]) }}" class="text-warning">Konfirmasi sekarang</a>)</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Status Pengiriman</label>
                                <form action="{{ route('droppoint.order.sent', ['basket' => $basket->id]) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jasa Pengiriman</label>
                                        <input type="text" name="shipment_service" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nomor Resi Pengiriman</label>
                                        <input type="text" name="shipment_receipt" class="form-control">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input type="submit" value="Konfirmasi Pengiriman" class="btn btn-warning text-dark">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-droppoint-layout>