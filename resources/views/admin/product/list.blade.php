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
                                            <th class="text-nowrap">Nama</th>
                                            <th class="text-nowrap">Harga Reguler</th>
                                            <th class="text-nowrap">Min. Pesan Reguler</th>
                                            <th class="text-nowrap">Harga Reseller</th>
                                            <th class="text-nowrap">Min. Pesan Reseller</th>
                                            <th class="text-nowrap">Harga Agen</th>
                                            <th class="text-nowrap">Min. Pesan Agen</th>
                                            <th class="text-nowrap">Harga Industri</th>
                                            <th class="text-nowrap">Min. Pesan Industri</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-decoration-underline text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                      {{ $product->name }}
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="font-size:.8rem">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li>
                                                            <form action="{{ route('admin.product.delete', ['product' => $product->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="dropdown-item text-danger" value="Hapus">
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span>{{ $product->description }}</span>
                                            </td>
                                            <td>{{ $product->regular_price > 0 ? 'Rp'.number_format($product->regular_price, 2, ',', '.') : '-' }}</td>
                                            <td>{{ $product->regular_min_order > 0 ? $product->regular_min_order.' pcs' : '-' }}</td>
                                            <td>{{ $product->reseller_price > 0 ? 'Rp'.number_format($product->reseller_price, 2, ',', '.') : '-' }}</td>
                                            <td>{{ $product->reseller_min_order > 0 ? $product->reseller_min_order.' pcs' : '-' }}</td>
                                            <td>{{ $product->agent_price > 0 ? 'Rp'.number_format($product->agent_price, 2, ',', '.') : '-' }}</td>
                                            <td>{{ $product->agent_min_order > 0 ? $product->agent_min_order.' pcs' : '-' }}</td>
                                            <td>{{ $product->industrial_price > 0 ? 'Rp'.number_format($product->industrial_price, 2, ',', '.') : '-' }}</td>
                                            <td>{{ $product->industrial_min_order > 0 ? $product->industrial_min_order.' pcs' : '-' }}</td>
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