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
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama produk</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Deskripsi produk</label>
                                    <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-rumahan" type="checkbox" value="" id="check-pelanggan-rumahan">
                                            <label class="form-check-label" for="check-pelanggan-rumahan">
                                              Tersedia untuk pelanggan rumahan
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-rumahan" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="" id="" value="0" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Diskon</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Beli untuk Dapat Diskon</label>
                                                <input type="number" name="" id="" value="999" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Beli untuk Gratis Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-reseller" type="checkbox" value="" id="check-pelanggan-reseller">
                                            <label class="form-check-label" for="check-pelanggan-reseller">
                                              Tersedia untuk pelanggan Reseller
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-reseller" style="display: none">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="" id="" value="0" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Diskon</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Beli untuk Dapat Diskon</label>
                                                <input type="number" name="" id="" value="999" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Beli untuk Gratis Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="mb-3">
                                            <input class="form-check-input" name="is-pelanggan-agen" type="checkbox" value="" id="check-pelanggan-agen">
                                            <label class="form-check-label" for="check-pelanggan-agen">
                                              Tersedia untuk pelanggan Agen
                                            </label>
                                        </div>
                                        <div id="form-pelanggan-agen" style="display: ">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Harga</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian</label>
                                                <input type="number" name="" id="" value="999" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Diskon</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian untuk Dapat Diskon</label>
                                                <input type="number" name="" id="" value="999" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Minimal Pembelian untuk Gratis Ongkos Kirim</label>
                                                <input type="number" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
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
            let form_pelanggan_rumahan = $('#form-pelanggan-rumahan')
            let form_pelanggan_reseller = $('#form-pelanggan-reseller')
            let form_pelanggan_agen = $('#form-pelanggan-agen')
            let form_pelanggan_industri = $('#form-pelanggan-industri')

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
        </script>
    </x-slot>
</x-admin-layout>