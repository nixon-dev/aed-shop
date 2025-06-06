@extends('components.admin.base')
@section('title', 'Products - Auxilliary and Enterprises Development')
@section('main')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Products</h3>
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
                        <div class="text-tiny">All Products</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <form class="form-search" method="GET" action="{{ route('admin.products') }}">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." value="{{ request('search') }}"
                                    name="search" tabindex="2">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.products-add') }}"><i class="icon-plus"></i>Add
                        Product</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 100px"></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th class='text-center'>Featured</th>
                                <th class='text-center'>Stock</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>
                                        @isset($d->p_image)
                                            <img src="{{ asset('storage/' . $d->p_image) }}" alt="" class="image"
                                                style="height: auto; width: 100px; aspect-ratio: 4/4; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('assets/products/default.png') }}" alt="" class="image"
                                                style="height: auto; width: 100px; aspect-ratio: 4/4; object-fit: cover;">
                                        @endisset
                                    </td>
                                    <td>
                                        {{ $d->p_name }}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>₱</span>
                                            <span>{{ number_format($d->p_price, 2) }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $d->c_name }}</td>
                                    <td class='text-center'>{{ $d->p_featured }}</td>
                                    <td class="text-center">
                                        @if ($d->p_stock == 0)
                                            <span class="badge bg-danger">Out of Stock</span>
                                        @elseif($d->p_stock <= 10)
                                            <span class="badge bg-warning">Low Stock</span>
                                        @else
                                            <span class="badge bg-success">In Stock</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $d->p_stock }}</td>
                                    <td>
                                        <div class="list-icon-function d-flex justify-content-center">
                                            <a href="{{ route('admin.products-view', ['slug' => $d->p_slug]) }}"
                                                target="_blank">
                                                <div class="item eye">
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <form action="#" method="POST">
                                                <div class="item text-danger delete">
                                                    <i class="icon-trash-2"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="divider"></div>
                <div class="flex items-center justify-end flex-wrap gap10 wgp-pagination">
                    {{ $data->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
