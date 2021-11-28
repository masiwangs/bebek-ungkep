<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Upload Produk Baru</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Foto Produk</label>
                                    <input type="file" name="photo" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama produk</label>
                                    <input type="text" name="name" id="" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Deskripsi produk</label>
                                    <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-lg-3 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-rumahan" type="checkbox" value="" id="check-pelanggan-rumahan">
                                            <label class="form-check-label" for="check-pelanggan-rumahan">
                                              Tersedia untuk pelanggan rumahan
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-rumahan" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="regular_price" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="regular_min_order" id="" value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-reseller" type="checkbox" value="" id="check-pelanggan-rumahan">
                                            <label class="form-check-label" for="check-pelanggan-reseller">
                                              Tersedia untuk reseller
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-reseller" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="reseller_price" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="reseller_min_order" id="" value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-agen" type="checkbox" value="" id="check-pelanggan-agen">
                                            <label class="form-check-label" for="check-pelanggan-agen">
                                              Tersedia untuk pelanggan Agen
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-agen" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="agent_price" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="agent_min_order" id="" value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-industri" type="checkbox" value="" id="check-pelanggan-industri">
                                            <label class="form-check-label" for="check-pelanggan-industri">
                                              Tersedia untuk pelanggan Industri
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-industri" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="industrial_price" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="industrial_min_order" id="" value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-light me-2">Batal</button>
                                    <input type="submit" value="Simpan" class="btn btn-warning text-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <x-slot name="script">
        <script>
            let is_pelanggan_rumahan = $('input[name=is-pelanggan-rumahan]')
            let is_pelanggan_reseller = $('input[name=is-pelanggan-reseller]')
            let is_pelanggan_agen = $('input[name=is-pelanggan-agen]')
            let is_pelanggan_industri = $('input[name=is-pelanggan-industri]')
            let is_pelanggan_droppoint = $('input[name=is-pelanggan-droppoint]')
            let form_pelanggan_rumahan = $('#form-pelanggan-rumahan')
            let form_pelanggan_reseller = $('#form-pelanggan-reseller')
            let form_pelanggan_agen = $('#form-pelanggan-agen')
            let form_pelanggan_industri = $('#form-pelanggan-industri')
            let form_pelanggan_droppoint = $('#form-pelanggan-droppoint')

            is_pelanggan_rumahan.on('change', function() {
                if(is_pelanggan_rumahan.is(':checked')) {
                    form_pelanggan_rumahan.show()
                } else {
                    form_pelanggan_rumahan.hide()
                }
            })

            is_pelanggan_reseller.on('change', function() {
                if(is_pelanggan_reseller.is(':checked')) {
                    form_pelanggan_reseller.show()
                } else {
                    form_pelanggan_reseller.hide()
                }
            })

            is_pelanggan_agen.on('change', function() {
                if(is_pelanggan_agen.is(':checked')) {
                    form_pelanggan_agen.show()
                } else {
                    form_pelanggan_agen.hide()
                }
            })

            is_pelanggan_reseller.on('change', function() {
                if(is_pelanggan_reseller.is(':checked')) {
                    form_pelanggan_reseller.show()
                } else {
                    form_pelanggan_reseller.hide()
                }
            })

            is_pelanggan_industri.on('change', function() {
                if(is_pelanggan_industri.is(':checked')) {
                    form_pelanggan_industri.show()
                } else {
                    form_pelanggan_industri.hide()
                }
            })

            is_pelanggan_droppoint.on('change', function() {
                if(is_pelanggan_droppoint.is(':checked')) {
                    form_pelanggan_droppoint.show()
                } else {
                    form_pelanggan_droppoint.hide()
                }
            })
        </script>
    </x-slot>
</x-admin-layout>