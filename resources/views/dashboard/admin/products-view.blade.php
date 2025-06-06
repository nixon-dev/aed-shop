@extends('components.admin.base')
@section('title', 'Add Products - Auxilliary and Enterprises Development')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone.css" />

@endsection
@section('main')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>{{ $data->p_name }}</h3>
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
                        <div class="text-tiny">{{ $data->p_name }}</div>
                    </li>
                </ul>
            </div>
            <div class="tf-section-1">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <img src="{{ Storage::url($data->p_image) }}" class="img-fluid" alt="Product Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <h3>{{ $data->p_name }}</h3>
                                    <p>{{ $data->p_description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









            </div>
        </div>

    </div>
    </div>

@endsection
