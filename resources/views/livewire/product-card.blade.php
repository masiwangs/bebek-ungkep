<div class="col-6 col-lg-3">
    <div class="card shadow-sm">
        <div class="card-content">
            <div style="position: relative;">
                <img src="{{ \Storage::url($product->image) }}" class="card-img-top img-fluid" alt="singleminded">
                <button wire:click="addToBasket({{ $product->id }})" class="btn btn-warning font-semibold p-1" style="position: absolute; top: .5rem; right: .5rem; font-size: .8rem;">+ Ke keranjang</button>
            </div>
            <div class="card-body p-3">
                <div>
                    <p class="mb-0">{{ $product->name }}</p>
                    @if($role == 'regular')
                    <p class="h5">Rp. {{ number_format($product->regular_price, 0, ',', '.') }},-</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>