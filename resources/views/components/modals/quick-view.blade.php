<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="quickViewTitle">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/products/default.png') }}" class="img-fluid mb-3" id="product_image" style="aspect-ratio: 4/4; object-fit: cover;" alt="Product Image" onerror="this.onerror=null; this.src='{{ asset('assets/products/default.png') }}">
                    </div>
                    <div class="col-md-8">
                        <h4 id="product_name">Product Name</h4>
                        <p class="text-tiny" id="product_description"></p>
                        <p>Stock: <span id="product_stock">0</span></p>
                        <h5>₱<span id="product_price">0</span></h5>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
