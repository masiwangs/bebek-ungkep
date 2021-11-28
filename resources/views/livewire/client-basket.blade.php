<div class="card">
    <div class="card-header">
        <h4 class="h3">Keranjang Anda</h4>
    </div>
    <div class="card-body">
        <div class="list-group">
            @if(count($active_basket->products) > 0)
                @foreach ($active_basket->products as $product)    
                <div class="list-group-item px-0 border-0">
                    <div class="row gx-2">
                        <div class="col-3">
                            <img src="{{ \Storage::url($product->product_image) }}" class="w-100" alt="singleminded">
                        </div>
                        <div class="col-8">
                            <h6 class="mb-0">{{ $product->product_name }}</h6>
                            <p class="mb-0"  style="font-size:.8rem">Rp{{ number_format($product->product_price) }},-</p>
                            <div class="d-flex flex-row">
                                <span role="button" wire:click="decreaseQty({{ $product->id }})">
                                    <i class="bi bi-dash-circle-fill me-2"></i>
                                </span>
                                <p class="font-bold">{{ $product->product_qty }}</p>
                                <span role="button" wire:click="increaseQty({{ $product->id }})">
                                    <i class="bi bi-plus-circle-fill ms-2"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-light btn-sm" wire:click="remove({{ $product->id }})">
                                <i class="bi bi-trash text-danger"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="list-group-item px-0 border-0 mb-4">
                <em>Keranjang masih kosong :(</em>
            </div>
            @endif
        </div>
        <div>
            <button class="btn btn-block btn-danger" wire:click="checkout">Pesan sekarang</button>
        </div>
    </div>
</div>