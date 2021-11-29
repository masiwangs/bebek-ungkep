<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3 class="h3">Pembayaran Invoice #{{ $payment->invoice->code }}</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Nama Pemesan</label>
                                <p>{{ $payment->invoice->basket->user->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Detail Tagihan</label>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga produk</td>
                                            <td>Rp{{ number_format($payment->invoice->product_bill) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Biaya pengiriman</td>
                                            <td>Rp{{ number_format($payment->invoice->shipment_bill) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total tagihan</td>
                                            <th>Rp{{ number_format($payment->bill) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Dibayar melalui:</label>
                                <p>{{ $payment->pay_with }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Bukti pembayaran</label>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ \Storage::url($payment->payment_proof) }}" style="height: 200px" alt="" srcset="">
                                </div>
                            </div>
                            <form action="{{ route('admin.transaction.confirm', ['payment' => $payment->id]) }}" method="POST" class="d-flex justify-content-end">
                                @csrf
                                <input type="submit" value="Konfirmasi" class="btn btn-warning text-dark">
                            </form>
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