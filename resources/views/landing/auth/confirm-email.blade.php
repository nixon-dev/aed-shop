@extends('landing.components.base')

@section('main')
    @include('components.alert');

    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="login-register container">
            <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab" href="#tab-item-login"
                        role="tab" aria-controls="tab-item-login" aria-selected="true">Email Confirmation</a>
                </li>
            </ul>
            <div class="tab-content pt-2" id="login_register_tab_content">
                <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="login-form">
                        <form method="POST" action="#" name="login-form" class="needs-validation" novalidate="">
                            <div class="form-floating mb-3">
                                <input class="form-control form-control_gray " name="code" value="" required=""
                                    autofocus="">
                                <label for="email">Code *</label>
                            </div>

                            <div class="pb-3"></div>

                            <button class="btn btn-primary w-100 text-uppercase" type="submit">Confirm</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
