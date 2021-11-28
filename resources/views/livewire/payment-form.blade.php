<section class="row">
    <div class="col-12 col-lg-4 offset-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Tagihan</label>
                    <p class="mb-0">Rp{{ number_format($total_bill) }},-</p>
                </div>
                <hr>
                <form wire:submit.prevent="submit">
                    <div class="mb-3">
                        <label for="" class="form-label">Pembayaran melalui</label>
                        <input type="text" class="form-control" wire:model="pay_with" placeholder="ex. BRI 1234567890">
                        @error('pay_with') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bukti transfer:</label>
                        <input type="file" wire:model="payment_proof" class="form-control">
                        @error('payment_proof') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="">
                        <button class="btn btn-block btn-danger">Selesai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>