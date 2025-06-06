@extends('components.admin.base')
@section('title', 'Add Products - Auxilliary and Enterprises Development')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone.css" />

@endsection
@section('main')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Add Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('admin.products') }}">
                            <div class="text-tiny">Products</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Add product</div>
                    </li>
                </ul>
            </div>
            <!-- form-add-product -->
            <form class="tf-section-2 form-add-product" id="product-form" action="{{ route('admin.products-submit') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product name <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="product_name"
                            tabindex="0" value="" aria-required="true" required="">

                    </fieldset>


                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="category_id" required>
                                    <option value="" disabled selected>Choose category</option>
                                    @forelse ($categories as $c)
                                        <option value="{{ $c->c_id }}">{{ $c->c_name }}</option>
                                    @empty
                                        <option disabled>No categories available</option>
                                    @endforelse
                                </select>
                            </div>
                        </fieldset>
                    </div>

                    <fieldset class="description">
                        <div class="body-title mb-10">Description</div>
                        <textarea class="mb-10" name="description" placeholder="Description" tabindex="0"></textarea>
                    </fieldset>
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title mb-10">Upload images <span class="tf-color-1">*</span>
                        </div>
                        <div class="upload-image flex-grow ">

                            <div class="dropzone w-full" id="product-image-dropzone"></div>

                        </div>
                    </fieldset>



                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Regular Price <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter regular price" name="regular_price"
                                tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Sale Price</div>
                            <input class="mb-10" type="text" placeholder="Enter sale price" name="sale_price"
                                tabindex="0" value="">
                        </fieldset>
                    </div>


                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">SKU <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" type="text" placeholder="Enter SKU" name="sku" tabindex="0"
                                value="" aria-required="true" required="">
                            <div class="text-tiny">Stock Keeping Unit</div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" type="text" placeholder="Enter quantity" name="quantity" tabindex="0"
                                value="" aria-required="true" required="">
                        </fieldset>
                    </div>

                    <div class="cols gap22">

                        <fieldset class="name">
                            <div class="body-title mb-10">Featured</div>
                            <div class="select mb-10">
                                <select class="" name="featured">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Add product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone-min.js"></script>

    <script>
        Dropzone.autoDiscover = false;

        const myDropzone = new Dropzone("#product-image-dropzone", {
            url: "{{ route('admin.products-submit') }}",
            autoProcessQueue: false,
            uploadMultiple: false,
            maxFiles: 1,
            maxFilesize: 10,
            acceptedFiles: 'image/jpeg,image/png,image/jpg,image/svg+xml,image/webp',
            addRemoveLinks: true,
            dictDefaultMessage: 'Drop image here or click to upload',
            init: function() {
                this.on("error", function(file, message) {
                    if (file.size > (10 * 1024 * 1024)) {
                        this.removeFile(file);
                        Swal.fire({
                            title: "File too large!",
                            text: "Please upload images smaller than 10MB.",
                            icon: "warning"
                        });
                    }
                });
            }
        });

        myDropzone.on("maxfilesexceeded", function(file) {
            this.removeAllFiles();
            this.addFile(file);
        });

        document.getElementById('product-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            if (myDropzone.files.length > 0) {
                formData.append('product_image', myDropzone.files[0]);
            }

            Swal.fire({
                title: "Uploading...",
                text: "Please wait",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(form.action, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    Swal.close();
                    Swal.fire({
                        title: "Success!",
                        text: 'Product added successfully!',
                        icon: "success"
                    });
                    form.reset();
                    myDropzone.removeAllFiles();
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.close();
                    Swal.fire({
                        title: "Error!",
                        text: 'Something went wrong.',
                        icon: "error"
                    });
                });
        });
    </script>

@endsection
