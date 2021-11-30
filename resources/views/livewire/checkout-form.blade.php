<form wire:submit.prevent="submit" class="row">
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Produk yang Dipesan</label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah Pemesanan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        @php $product_bill = 0; @endphp
                        <tbody>
                            @foreach ($basket->products as $product)
                            @php 
                                $individual_price = $product->product_price * $product->product_qty;
                                $product_bill += $individual_price;
                            @endphp
                            <tr>
                                <td>
                                    <div>
                                        {{ $product->product_name }}
                                    </div>
                                    <div>
                                        <small>{{ $product->product_description }}</small>
                                    </div>
                                </td>
                                <td>Rp{{ number_format($product->product_price) }},-/pcs</td>
                                <td>{{ $product->product_qty }} pcs</td>
                                <td>Rp{{ number_format($individual_price) }},-</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Alamat Pengiriman</label>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Kode POS</label>
                        <div class="col-9">
                            <input type="text" class="form-control" wire:model="shipment_postalcode">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Provinsi</label>
                        <div class="col-9">
                            <input type="text" wire:model="shipment_province" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Kabupaten/Kota</label>
                        <div class="col-9">
                            <input type="text" class="form-control" wire:model="shipment_city">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Kecamatan</label>
                        <div class="col-9">
                            <input type="text" class="form-control" wire:model="shipment_subdistrict">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Desa/Kelurahan</label>
                        <div class="col-9">
                            <select class="form-select" aria-label="Default select example" wire:model="shipment_village">
                                @if ($villages)
                                    @foreach ($villages as $village)
                                    <option value="{{ $village->kelurahan }}">{{ $village->kelurahan }}</option>
                                    @endforeach
                                @endif
                              </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Alamat</label>
                        <div class="col-9">
                            <input type="text" class="form-control" wire:model="shipment_road">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Pilihan Pengiriman</label>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-2 d-flex justify-content-end">Dikirim dari</label>
                        <div class="col-9">
                            <select class="form-select" aria-label="Default select example" wire:model="sent_from">
                                <option>Pilih Droppoint</option>
                                <option value="DEPOK">DEPOK</option>
                                <option value="SEMARANG">SEMARANG</option>
                                <option value="BLITAR">BLITAR</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4 class="h4">Tagihan</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Subtotal</label>
                    <p class="mb-0">Rp{{ number_format($product_bill, 0, ',', '.') }},-</p>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Biaya pengiriman</label>
                    <p class="mb-0">Rp{{ number_format($shipment_bill, 0, ',', '.') }},-</p>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Diskon</label>
                    <p class="mb-0">Rp{{ $discount }},-</p>
                </div>
                <hr>
                <div class="mb-4">
                    <label for="" class="form-label fw-bold">TOTAL</label>
                    @if(!$bill_error)
                        @if($total_bill)
                        <p class="mb-0">Rp{{ number_format($total_bill, 0, ',', '.') }},-</p>
                        @else
                        <p class="mb-0 text-danger">Lengkapi data pemesanan.</p>
                        @endif
                    @else
                        <p class="mb-0 text-danger">{{ $bill_error }}</p>
                    @endif
                </div>
                <div class="">
                    <button class="btn btn-block btn-danger">Lanjut pembayaran</button>
                </div>
            </div>
        </div>
    </div>
</form>