@extends('home.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
        data-image-src="{{ asset('assets/template/home/assets/img/photos/bg18.png') }}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3">{{ $title }}</h1>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start">Welcome Back 🎉</h2>
                            <p class="lead mb-6 text-start">Fill your email and password to {{ $title }}.</p>

                            <form class="text-start mb-3" action="{{ route('process_register') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                        id="loginName">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="loginEmail">Name</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        id="loginEmail">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="loginEmail">Email</label>
                                </div>

                                <div class="form-floating password-field mb-4">
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                        id="loginPassword">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="loginPassword">Password</label>
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" id="loginPassword">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="loginPassword">Confirm Password</label>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary rounded-pill btn-login w-100 mb-2">{{ $title }}</button>
                            </form>
                            <!-- /form -->
                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}"
                                    class="hover">Login</a></p>

                            <!--/.social -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
