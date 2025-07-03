@extends('landing.components.base')

@section('main')
    <main>

        <section class="swiper-container js-swiper-slider swiper-number-pagination slideshow"
            data-settings='{
    "autoplay": {
      "delay": 5000
    },
    "slidesPerView": 1,
    "effect": "fade",
    "loop": true
  }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="{{ asset('assets/landing/images/juice.webp') }}" width="542"
                                height="733" alt="Fruit Juice"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
                            <div class="character_markup type2">
                                <p
                                    class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
                                    Fruits
                                </p>
                            </div>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                Check out our</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Fruit
                            </h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Juices</h2>
                            <a href="#"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="{{ asset('assets/landing/images/wine.png') }}" width="400"
                                height="733" alt="Wine Bottle"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
                            <div class="character_markup type2">
                                <p
                                    class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">
                                    Wines
                                </p>
                            </div>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                New Arrivals</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Bugnay
                            </h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Wines</h2>
                            <a href="#"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="{{ asset('assets/landing/images/bread.png') }}" width="400"
                                height="690" alt="Bread"
                                class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 w-auto h-auto" />
                        </div>
                        <div class="character_markup type2">
                            <p
                                class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
                                Fresh
                            </p>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                Freshly Baked</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Soya
                            </h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Breads</h2>
                            <a href="#"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div
                    class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
                </div>
            </div>
        </section>
        <div class="container mw-1620 bg-white border-radius-10">
            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
            <section class="category-carousel container">
                <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Categories</h2>

                <div class="position-relative">
                    <div class="swiper-container js-swiper-slider px-5"
                        data-settings='{
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": 6,
          "slidesPerGroup": 1,
          "effect": "none",
          "loop": true,
          "navigation": {
            "nextEl": ".products-carousel__next-1",
            "prevEl": ".products-carousel__prev-1"
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "slidesPerGroup": 2,
              "spaceBetween": 15
            },
            "768": {
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "spaceBetween": 30
            },
            "992": {
              "slidesPerView": 6,
              "slidesPerGroup": 1,
              "spaceBetween": 45,
              "pagination": false
            },
            "1200": {
              "slidesPerView": 6,
              "slidesPerGroup": 1,
              "spaceBetween": 60,
              "pagination": false
            }
          }
        }'>
                        <div class="swiper-wrapper">
                            @forelse ($categories as $c)
                                <div class="swiper-slide">
                                    @isset($c->c_image)
                                        <img loading="lazy" class="w-100 mb-3 zoom-out-on-hover"
                                            src="{{ Storage::url($c->c_image) }}" alt=""
                                            style=" object-fit: cover; aspect-ratio: 1/1; border-radius: 50%;" />
                                    @else
                                        <img loading="lazy" class="w-100 h-auto mb-3 zoom-on-hover"
                                            src="{{ asset('assets/products/default.png') }}" width="124" height="124"
                                            alt="" />
                                    @endisset
                                    <div class="text-center">
                                        <a href="#" class="menu-link fw-medium">{{ $c->c_name }}</a>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-100 h-auto mb-3"
                                        src="{{ asset('assets/products/default.png') }}" width="124" height="124"
                                        alt="" />
                                    <div class="text-center">
                                        <a href="#" class="menu-link fw-medium">No Category Found</a>
                                    </div>
                                </div>
                            @endforelse


                        </div>
                    </div>

                    <div
                        class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_prev_md" />
                        </svg>
                    </div>
                    <div
                        class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_next_md" />
                        </svg>
                    </div>
                </div>
            </section>

            @isset($featured)
                <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

                <section class="hot-deals container">
                    <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Featured</h2>
                    <div class="row">
                        <div
                            class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
                            <h2 class="fw-bold">Sale</h2>
                            <h2>Shop the Best Deals Now!</h2>

                            <a href="#" class="btn-link default-underline text-uppercase fw-medium mt-3">View
                                All</a>
                        </div>
                        <div class="col-md-6 col-lg-8 col-xl-80per">
                            <div class="position-relative">
                                <div class="swiper-container js-swiper-slider"
                                    data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "effect": "none",
              "loop": false,
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 14
                },
                "768": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 3,
                  "spaceBetween": 24
                },
                "992": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30,
                  "pagination": false
                },
                "1200": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30,
                  "pagination": false
                }
              }
            }'>
                                    <div class="swiper-wrapper">
                                        @foreach ($featured as $f)
                                            <div class="swiper-slide product-card product-card_style3">
                                                <div class="pc__img-wrapper">
                                                    <a href="details.html">
                                                        <img loading="lazy" src="{{ Storage::url($f->p_image) }}"
                                                            width="258" height="313" alt="{{ $f->p_name }}"
                                                            class="pc__img zoom-on-hover">

                                                    </a>
                                                    @isset($f->p_price_sale)
                                                        @php
                                                            $percentage = floor(
                                                                (($f->p_price - $f->p_price_sale) / $f->p_price) * 100,
                                                            );
                                                            $percentage = abs($percentage);
                                                            if ($f->p_price_sale < $f->p_price) {
                                                                $percentage = '-' . $percentage;
                                                                $s = 'Negative';
                                                            } else {
                                                                $percentage = '+' . $percentage;
                                                                $s = 'Positive';
                                                            }
                                                        @endphp
                                                        <div
                                                            class="product-label {{ $s == 'Negative' ? 'bg-red' : 'bg-green' }} text-white right-0 top-0 left-auto mt-2 mx-2">
                                                            {{ $percentage }}%
                                                        </div>
                                                    @endisset
                                                </div>

                                                <div class="pc__info position-relative">
                                                    <h6 class="pc__title"><a href="details.html">{{ $f->p_name }}</a></h6>
                                                    <div class="product-card__price d-flex">
                                                        <span
                                                            class="money {{ isset($f->p_price_sale) ? 'price-old' : 'price text-secondary' }}">₱{{ $f->p_price }}</span>
                                                        @isset($f->p_price_sale)
                                                            <span
                                                                class="money price text-secondary">₱{{ $f->p_price_sale }}</span>
                                                        @endisset
                                                    </div>

                                                    <div
                                                        class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                                        <button
                                                            class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                                            data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                        <button
                                                            class="btn-link btn-link_lg me-4 text-uppercase fw-medium quick-view-button"
                                                            data-slug="{{ $f->p_slug }}">
                                                            <span class="d-none d-xxl-block">Quick View</span>
                                                            <span class="d-block d-xxl-none">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use href="#icon_view" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                                            title="Add To Wishlist">
                                                            <svg width="16" height="16" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use href="#icon_heart" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endisset



            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="products-grid container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">New Arrival</h2>

                <div class="row">
                    @foreach ($products as $p)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a href="details.html">
                                        <img loading="lazy"
                                            src="{{ $p->p_image ? Storage::url($p->p_image) : asset('assets/products/default.png') }}"
                                            width="330" height="400" alt="{{ $p->p_name }}"
                                            class="pc__img zoom-on-hover">
                                    </a>
                                    @if ($p->created_at >= Carbon\Carbon::now()->subDays(7))
                                        <div class="product-label text-uppercase bg-white top-0 left-0 mt-2 mx-2">New</div>
                                    @endif
                                    @isset($p->p_price_sale)
                                        @php
                                            $percentage = floor((($p->p_price - $p->p_price_sale) / $p->p_price) * 100);
                                            $percentage = abs($percentage);
                                            if ($p->p_price_sale < $p->p_price) {
                                                $percentage = '-' . $percentage;
                                                $s = 'Negative';
                                            } else {
                                                $percentage = '+' . $percentage;
                                                $s = 'Positive';
                                            }
                                        @endphp
                                        <div
                                            class="product-label {{ $s == 'Negative' ? 'bg-red' : 'bg-green' }} text-white right-0 top-0 left-auto mt-2 mx-2">
                                            {{ $percentage }}%
                                        </div>
                                    @endisset
                                </div>

                                <div class="pc__info position-relative">
                                    <h6 class="pc__title"><a href="details.html">{{ $p->p_name }}</a></h6>
                                    <div class="product-card__price d-flex">
                                        <span
                                            class="money {{ isset($p->p_price_sale) ? 'price-old' : 'price text-secondary' }}">₱{{ $p->p_price }}</span>
                                        @isset($p->p_price_sale)
                                            <span class="money price text-secondary">₱{{ $p->p_price_sale }}</span>
                                        @endisset
                                    </div>

                                    <div
                                        class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                        <button
                                            class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                            data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium quick-view-button" data-slug="{{ $p->p_slug }}">
                                            <span class="d-none d-xxl-block">Quick View</span>
                                            <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_view" />
                                                </svg></span>
                                        </button>
                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                            title="Add To Wishlist">
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_heart" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-2">
                    <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="{{ route('landing.shop') }}">See All</a>
                </div>
            </section>
        </div>

        <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

        @include('components.modals.quick-view')

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
