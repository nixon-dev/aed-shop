@extends('landing.components.base')

@section('main')
    <main class="pt-90">
        <section class="shop-main container d-flex pt-4 pt-xl-5">
            <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
                <div class="aside-header d-flex d-lg-none align-items-center">
                    <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
                    <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
                </div>

                <div class="pt-4 pt-lg-0"></div>

                <div class="accordion" id="categories-list">
                    <div class="accordion-item mb-4 pb-3">
                        <h5 class="accordion-header" id="accordion-heading-1">
                            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                                data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true"
                                aria-controls="accordion-filter-1">
                                Product Categories
                                <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                        <path
                                            d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                    </g>
                                </svg>
                            </button>
                        </h5>
                        <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
                            aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
                            <div class="accordion-body px-0 pb-0 pt-3">
                                <ul class="list list-inline mb-0">
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Dairy Products</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Fresh Fish</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Seafood</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Wines & Spirits</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Fresh Fruits</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Crops & Vegatables</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Rice & Grains</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Fresh Juices</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Bread & Bakery</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" class="menu-link py-1">Other Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="price-filters">
                    <div class="accordion-item mb-4">
                        <h5 class="accordion-header mb-2" id="accordion-heading-price">
                            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                                data-bs-toggle="collapse" data-bs-target="#accordion-filter-price" aria-expanded="true"
                                aria-controls="accordion-filter-price">
                                Price
                                <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                        <path
                                            d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                    </g>
                                </svg>
                            </button>
                        </h5>
                        <div id="accordion-filter-price" class="accordion-collapse collapse show border-0"
                            aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
                            <input class="price-range-slider" type="text" name="price_range" value=""
                                data-slider-min="10" data-slider-max="10000" data-slider-step="5"
                                data-slider-value="[10,10000]" data-currency="₱" />
                            <div class="price-range__info d-flex align-items-center mt-2">
                                <div class="me-auto">
                                    <span class="text-secondary">Min Price: </span>
                                    <span class="price-range__min">₱10</span>
                                </div>
                                <div>
                                    <span class="text-secondary">Max Price: </span>
                                    <span class="price-range__max">₱10000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shop-list flex-grow-1">
                <div class="swiper-container js-swiper-slider slideshow slideshow_small slideshow_split"
                    data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 1,
            "effect": "fade",
            "loop": true,
            "pagination": {
              "el": ".slideshow-pagination",
              "type": "bullets",
              "clickable": true
            }
          }'>
                    <div class="swiper-wrapper">

                        @forelse($categories as $c)
                            <div class="swiper-slide">
                                <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                                    <div class="slide-split_text position-relative d-flex align-items-center"
                                        style="background-color: #f5e6e0;">
                                        <div class="slideshow-text container p-3 p-xl-5">
                                            <h2
                                                class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                                                {{ $c->c_name }}
                                            </h2>
                                            <p class="mb-0 animate animate_fade animate_btt animate_delay-5">
                                                {{ $c->c_description }}</h6>
                                        </div>
                                    </div>
                                    <div class="slide-split_media position-relative">
                                        <div class="slideshow-bg" style="background-color: #f5e6e0;">
                                            <img loading="lazy" src="{{ Storage::url($c->c_image) }}" width="630"
                                                height="450" alt="{{ $c->c_name }}"
                                                class="slideshow-bg__img object-fit-cover" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse




                    </div>

                    <div class="container p-3 p-xl-5">
                        <div
                            class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-4 pb-xl-2">
                        </div>

                    </div>
                </div>

                <div class="mb-3 pb-2 pb-xl-3"></div>

                <div class="d-flex justify-content-between mb-4 pb-md-2">
                    <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                        <a href="{{ route('landing.index') }}"
                            class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                        <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                        <a href="{{ route('landing.shop') }}"
                            class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                    </div>

                    <div
                        class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                        <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0"
                            aria-label="Sort Items" name="total-number">
                            <option selected>Default Sorting</option>
                            <option value="1">Featured</option>
                            <option value="2">Best selling</option>
                            <option value="3">Price, low to high</option>
                            <option value="3">Price, high to low</option>
                            <option value="3">Date, old to new</option>
                            <option value="3">Date, new to old</option>
                        </select>

                        <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

                        <div class="col-size align-items-center order-1 d-none d-lg-flex">
                            <span class="text-uppercase fw-medium me-2">View</span>
                            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                                data-cols="2">2</button>
                            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                                data-cols="3">3</button>
                            <button class="btn-link fw-medium js-cols-size" data-target="products-grid"
                                data-cols="4">4</button>
                        </div>

                        <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
                            <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside"
                                data-aside="shopFilter">
                                <svg class="d-inline-block align-middle me-2" width="14" height="10"
                                    viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_filter" />
                                </svg>
                                <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">

                    @forelse ($products as $p)
                        <div class="product-card-wrapper">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">

                                <div class="pc__img-wrapper">
                                    <div class="swiper-container background-img js-swiper-slider"
                                        data-settings='{"resizeObserver": true}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="details.html"><img loading="lazy"
                                                    src="{{ $p->p_image ? Storage::url($p->p_image) : asset('assets/products/default.png') }}" width="330"
                                                        height="400" alt="{{ $p->p_name }}"
                                                        class="pc__img"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">{{ $p->c_name }}</p>
                                    <h6 class="pc__title"><a href="details.html">{{ $p->p_name }}</a></h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price">₱ {{ number_format($p->p_price,) }}</span>
                                    </div>
                                    <div class="product-card__review d-flex align-items-center">
                                        <div class="reviews-group d-flex">
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                        </div>
                                        <span class="reviews-note text-lowercase text-secondary ms-1">1k+ reviews</span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                                <div
                                    class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
                                    <div class="pc-labels__right ms-auto">
                                        <span class="pc-label pc-label_sale d-block text-white">-10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                       <h2> No Product Found</h2>
                    @endforelse


                </div>

                <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
                    <a href="#" class="btn-link d-inline-flex align-items-center">
                        <svg class="me-1" width="7" height="11" viewBox="0 0 7 11"
                            xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_prev_sm" />
                        </svg>
                        <span class="fw-medium">PREV</span>
                    </a>
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">2</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">3</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">4</a></li>
                    </ul>
                    <a href="#" class="btn-link d-inline-flex align-items-center">
                        <span class="fw-medium me-1">NEXT</span>
                        <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_next_sm" />
                        </svg>
                    </a>
                </nav>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.quick-view-button').click(function() {
                let slug = $(this).data('slug');

                $('#quickViewContent').html('Loading...');

                var quickViewModal = new bootstrap.Modal(document.getElementById('quickViewModal'));
                quickViewModal.show();

                $.ajax({
                    url: '/quickview/' + slug,
                    method: 'GET',
                    success: function(response) {
                        $('#quickViewTitle').text(response.name);
                        $('#product_image').attr('src', response.image);
                        $('#product_name').text(response.name);
                        $('#product_description').text(response.description);
                        $('#product_stock').text(response.stock);
                        $('#product_price').text(response.price);
                    },
                    error: function() {
                        $('#quickViewContent').html(
                            '<p class="text-danger">Failed to load product details.</p>');
                    }
                });
            });
        });
    </script>
@endsection
