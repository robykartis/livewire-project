@extends('home.layout.app')
@section('content')
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600"
        data-image-src="{{ asset('assets/template/home/assets/img/photos/bg23.png') }}">
        <div class="container pt-16 pt-md-18 pb-9">
            <div class="row gx-0 gy-10 align-items-center text-center text-lg-start">
                <div class="col-lg-6 col-xxl-5 position-relative" data-cues="slideInDown" data-group="page-title"
                    data-delay="700">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle1.svg') }}"
                        class="h-9 position-absolute d-none d-lg-block" data-cue="fadeIn" data-delay="3000"
                        style="top: -9%; left: -6%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle2.svg') }}"
                        class="h-15 position-absolute d-none d-lg-block" data-cue="fadeIn" data-delay="3000"
                        style="bottom: 9%; right: -22%" alt="">
                    <h1 class="display-1 fs-50 mb-4">Manage all your bills, accounts and budgets in <span
                            class="text-gradient gradient-7">one place.</span></h1>
                    <p class="lead fs-24 lh-sm mb-7">Sandbox is available to download from both App Store and
                        Google Play Store.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                        data-group="page-title-buttons" data-delay="1800">
                        <span><a href="#" class="me-2"><img
                                    src="{{ asset('assets/template/home/assets/img/photos/button-appstore.svg') }}"
                                    class="h-11 rounded-xl" alt=""></a></span>
                        <span><a href="#"><img
                                    src="{{ asset('assets/template/home/assets/img/photos/button-google-play.svg') }}"
                                    class="h-11 rounded-xl" alt=""></a></span>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-lg-6 ms-auto mb-n20 mb-xxl-n22" data-cues="slideInDown" data-delay="600">
                    <figure><img src="{{ asset('assets/template/home/assets/img/photos/devices3.png') }}"
                            srcset="{{ asset('assets/template/home/assets/img/photos/devices3@2x.png') }} 2x"
                            alt=""></figure>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden" style="z-index:1;">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <g fill="currentColor">
                        <polygon points="1440 100 0 100 0 85 1440 0 1440 100" />
                    </g>
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pt-18 pt-md-20 pb-14 pb-md-16">
            <div class="row text-center">
                <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto position-relative">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle3.svg') }}"
                        class="h-11 position-absolute d-none d-lg-block" style="top: -45%; left: 23%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle4.svg') }}"
                        class="h-8 position-absolute d-none d-lg-block" style="top: 6%; right: 2%" alt="">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">App Features</h2>
                    <h3 class="display-3 mb-11 px-lg-5 px-xl-0 px-xxl-6">Sandbox makes your spending <span
                            class="text-gradient gradient-7">stress-free</span> for you to have the perfect
                        control.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row mb-20">
                <div class="col-xxl-11 mx-auto">
                    <div class="row gx-md-8 gy-10 text-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-yellow rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/cloud-network-2.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Always up to Date</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-green rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/touchscreen.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Easy Usage</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-purple rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/lock.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Secure Payments</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-pink rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/rocket.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Fast Transactions</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-violet rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/bar-chart.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Reports & Forecasting</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-orange rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/safe.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Online Banking</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-blue rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/controls.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">Configurable Fields</h4>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3">
                            <div class="svg-bg svg-bg-lg bg-pale-leaf rounded-xl mb-4"> <img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/checked.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /> </div>
                            <h4 class="fs-20">List of Transactions</h4>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-md-10 col-lg-7 mx-auto position-relative">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle5.svg') }}"
                        class="w-15 position-absolute d-none d-lg-block" data-delay="1800"
                        style="bottom: -60%; right: 10%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle6.svg') }}"
                        class="h-15 position-absolute d-none d-lg-block" data-delay="1800" style="top: -40%; left: -5%"
                        alt="">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">How It Works</h2>
                    <h3 class="display-3 mb-8 px-xl-6">Download the app, create your profile and <span
                            class="text-gradient gradient-7">voilà</span>, you're all set!</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row mb-lg-20 mb-xl-23">
                <div class="col-xxl-11 mx-auto">
                    <div class="row gy-10 gy-lg-0 text-center d-flex align-items-center">
                        <div class="col-md-6 col-lg-4 mx-auto mb-n10 mb-lg-0">
                            <figure class="mx-auto"><img
                                    src="{{ asset('assets/template/home/assets/img/photos/devices4.png') }}"
                                    srcset="{{ asset('assets/template/home/assets/img/photos/devices4@2x.png') }} 2x"
                                    alt=""></figure>
                        </div>
                        <!-- /column -->
                        <div class="w-100 d-lg-none"></div>
                        <div class="col-md-6 col-lg-4 order-lg-first">
                            <div class="mb-8">
                                <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">01</span>
                                <h4 class="fs-20">Download Application</h4>
                                <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit
                                    non mi porta gravida at eget metus.</p>
                            </div>
                            <!-- /div -->
                            <div>
                                <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">02</span>
                                <h4 class="fs-20">Quick Registration</h4>
                                <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit
                                    non mi porta gravida at eget metus.</p>
                            </div>
                            <!-- /div -->
                        </div>
                        <!-- /column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-8">
                                <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">03</span>
                                <h4 class="fs-20">Track Your Spending</h4>
                                <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit
                                    non mi porta gravida at eget metus.</p>
                            </div>
                            <!-- /div -->
                            <div>
                                <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">04</span>
                                <h4 class="fs-20">Have Total Control</h4>
                                <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit
                                    non mi porta gravida at eget metus.</p>
                            </div>
                            <!-- /div -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600 bg-content"
        data-image-src="{{ asset('assets/template/home/assets/img/photos/bg23.png') }}">
        <div class="container py-14 pt-md-16 pt-lg-0 pb-md-17 position-relative" style="z-index: 2;">
            <div class="row">
                <div class="col-xl-11 col-xxl-10 mx-auto">
                    <div class="mt-lg-n20 mt-xl-n22 mb-14 mb-md-16 rounded-xl">
                        <div class="player" data-plyr-provider="vimeo" data-plyr-embed-id="165101721"></div>
                    </div>
                    <div class="position-relative">
                        <img src="{{ asset('assets/template/home/assets/img/svg/doodle7.svg') }}"
                            class="h-7 position-absolute d-none d-lg-block" data-delay="1800"
                            style="top: -90%; right: -3%" alt="">
                        <img src="{{ asset('assets/template/home/assets/img/svg/doodle8.svg') }}"
                            class="h-14 position-absolute d-none d-lg-block" data-delay="1800"
                            style="top: -20%; left: -12%" alt="">
                        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">FAQ</h2>
                        <h3 class="display-3 mb-11 px-lg-8 px-xl-11 text-center">If you don't see an <span
                                class="text-gradient gradient-7">answer</span> to your question, you can send us an
                            email from our contact form.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-0">
                            <div id="accordion-1" class="accordion-wrapper">
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-1-1">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-1-1" aria-expanded="false"
                                            aria-controls="accordion-collapse-1-1">Can I cancel my
                                            subscription?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-1-1" class="collapse"
                                        aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-1-2">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-1-2" aria-expanded="false"
                                            aria-controls="accordion-collapse-1-2">Which payment methods do you
                                            accept?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-1-2" class="collapse"
                                        aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-1-3">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-1-3" aria-expanded="false"
                                            aria-controls="accordion-collapse-1-3">How can I manage my
                                            Account?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-1-3" class="collapse"
                                        aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.accordion-wrapper -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div id="accordion-2" class="accordion-wrapper">
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-2-1">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                                            aria-controls="accordion-collapse-2-1">How do I get my subscription
                                            receipt?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-2-1" class="collapse"
                                        aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-2-2">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                                            aria-controls="accordion-collapse-2-2">Are there any discounts for
                                            people in need?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-2-2" class="collapse"
                                        aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                                <div class="card accordion-item shadow-lg">
                                    <div class="card-header" id="accordion-heading-2-3">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-collapse-2-3" aria-expanded="false"
                                            aria-controls="accordion-collapse-2-3">Do you offer a free trial
                                            edit?</button>
                                    </div>
                                    <!-- /.card-header -->
                                    <div id="accordion-collapse-2-3" class="collapse"
                                        aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                                        <div class="card-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                nibh, ut fermentum massa justo sit amet risus. Cras mattis
                                                consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                                vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et
                                                magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio
                                                dui. Cras justo odio, dapibus ac facilisis.</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.collapse -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.accordion-wrapper -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-16 py-md-18">
            <div class="row text-center">
                <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle3.svg') }}"
                        class="h-11 position-absolute d-none d-lg-block" style="top: -20%; right: -12%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle9.svg') }}"
                        class="h-17 position-absolute d-none d-lg-block" style="bottom: 5%; left: -17%" alt="">
                    <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Why Choose Sandbox?</h2>
                    <h3 class="display-3 mb-12 text-center">Here are a few <span class="text-gradient gradient-7">reasons
                            why</span> our customers choose the Sandbox
                        app.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row d-flex align-items-start mb-19">
                <div class="col-lg-6 position-lg-sticky" style="top: 8rem;">
                    <figure><img src="{{ asset('assets/template/home/assets/img/photos/devices5.png') }}"
                            srcset="{{ asset('assets/template/home/assets/img/photos/devices5@2x.png') }} 2x"
                            alt=""></figure>
                </div>
                <!-- /column -->
                <div class="col-lg-5 ms-auto">
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-grape rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/calendar.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Scheduled Transactions</h4>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus
                                magna.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-green rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/currency.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Multiple Currencies</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra
                                augue. Maecenas faucibus mollis interdum.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-pink rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/server.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Database Management</h4>
                            <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a
                                ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis
                                dis parturient montes.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-yellow rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/devices.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Sync Between Devices</h4>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus
                                magna.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-blue rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/search.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Smart Search</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra
                                augue. Maecenas faucibus mollis interdum.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-8">
                        <div>
                            <div class="svg-bg svg-bg-lg bg-pale-leaf rounded-xl me-5"><img
                                    src="{{ asset('assets/template/home/assets/img/icons/solid/compare.svg') }}"
                                    class="svg-inject icon-svg solid text-navy" alt="" /></div>
                        </div>
                        <div>
                            <h4 class="fs-20">Detailed Reports</h4>
                            <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a
                                ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis
                                dis parturient montes.</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-11 col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center position-relative">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle1.svg') }}"
                        class="h-9 position-absolute d-none d-lg-block" style="top: 2%; left: 9%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle10.svg') }}"
                        class="h-7 position-absolute d-none d-lg-block" style="top: -45%; left: -17%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle11.svg') }}"
                        class="h-13 position-absolute d-none d-lg-block" style="top: -40%; right: -15%" alt="">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Happy Customers</h2>
                    <h3 class="display-3 mb-11 px-xl-10 px-xxl-13">Don't take our word for it. See what <span
                            class="text-gradient gradient-7">customers</span> are saying about us.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="grid mb-12">
                <div class="row isotope gy-6">
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-grape">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                        Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                        facilisis sociis natoque penatibus.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-green">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa
                                        justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                        dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean
                                        lacinia bibendum nulla sed consectetur.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Cory Zamora</h5>
                                            <p class="mb-0">Marketing Specialist</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-orange">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet
                                        rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur
                                        vestibulum. Donec sed odio dui consectetur adipiscing elit.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Nikolas Brooten</h5>
                                            <p class="mb-0">Sales Manager</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-pink">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus
                                        rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit
                                        aliquam tincidunt at at sapien. Aenean tortor libero condimentum ac laoreet
                                        vitae.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-blue">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis
                                        natoque penatibus magnis dis montes, nascetur ridiculus mus. Donec sed odio
                                        dui. Nulla vitae elit libero a pharetra.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Jackie Sanders</h5>
                                            <p class="mb-0">Investment Planner</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-4">
                        <div class="card shadow-none rounded-xl bg-soft-yellow">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a
                                        pharetra augue. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Laura Widerski</h5>
                                            <p class="mb-0">Sales Specialist</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid-view -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600"
        data-image-src="{{ asset('assets/template/home/assets/img/photos/bg23.png') }}">
        <div class="overflow-hidden" style="z-index:1;">
            <div class="divider divider-alt text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <g fill="currentColor">
                        <polygon points="1440 100 0 15 0 0 1440 0 1440 100" />
                    </g>
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
        <div class="container pt-10 pt-lg-10 pt-md-13 pb-8 pb-md-10 text-center text-lg-start">
            <div class="row gx-0 gy-10">
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 position-relative">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle2.svg') }}"
                        class="h-15 position-absolute d-none d-lg-block" style="bottom: 36%; right: -25%" alt="">
                    <img src="{{ asset('assets/template/home/assets/img/svg/doodle6.svg') }}"
                        class="h-14 position-absolute d-none d-lg-block" data-delay="1800" style="top: -20%; left: -25%"
                        alt="">
                    <h2 class="display-3 mb-4">Manage all your bills, accounts & budgets in <span
                            class="text-gradient gradient-7">one place.</span></h2>
                    <p class="lead fs-24 lh-sm mb-7">Sandbox is available to download from both App Store and
                        Google Play Store.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <span><a href="#" class="me-2"><img
                                    src="{{ asset('assets/template/home/assets/img/photos/button-appstore.svg') }}"
                                    class="h-11 rounded-xl" alt=""></a></span>
                        <span><a href="#"><img
                                    src="{{ asset('assets/template/home/assets/img/photos/button-google-play.svg') }}"
                                    class="h-11 rounded-xl" alt=""></a></span>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-lg-6 ms-auto mt-lg-n15 mt-xl-n20">
                    <figure><img src="{{ asset('assets/template/home/assets/img/photos/devices6.png') }}"
                            srcset="{{ asset('assets/template/home/assets/img/photos/devices6@2x.png') }} 2x"
                            alt=""></figure>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
