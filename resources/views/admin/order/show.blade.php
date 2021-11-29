<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3 class="h3">Pesanan #{{ $basket->invoice->code }}</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
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
                                @if(!$basket->purchase_order)
                                @if ($basket->is_payment_confirmed)
                                    <label for="" class="form-label fw-bold">Purchase Order</label>
                                    <form action="{{ route('admin.order.send-po', ['basket' => $basket->id]) }}" method="POST" class="d-flex flex-row">
                                        @csrf
                                        <select class="form-select flex-fill me-2" name="drop_point_id" aria-label="Default select example">
                                            <option selected>Pilih Droppoint</option>
                                            @foreach ($drop_points as $drop_point)
                                            <option value="{{ $drop_point->id }}">{{ $drop_point->name }}</option>
                                            @endforeach
                                        </select>
                                        <input type="submit" value="Kirim PO ke Drop Point" class="btn btn-warning text-dark">
                                    </form>
                                @endif
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Purchase Order</label>
                                @if ($basket->purchase_order)
                                    <p>Dikirim dari Droppoint {{ $basket->purchase_order->drop_point->name }}</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Detail Pengiriman</label>
                                @if ($basket->is_sent)
                                <p>{{ $basket->shipment_service }} {{ $basket->shipment_receipt }}</p>
                                @endif
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