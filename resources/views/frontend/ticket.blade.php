<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    @forelse($configAppData as $configApp)
    <title> {{ $configApp->app_name  }}</title>
    @empty
    <title>No App Name</title>
    @endforelse

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('../frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../frontend/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('../frontend/css/templatemo-festava-live.css') }}" rel="stylesheet">
    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

</head>

<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>

                            @forelse($configAppData as $configApp)
                            <strong class="text-dark">Welcome to {{ $configApp->app_name  }} | {{ now()->year }}</strong>
                            @empty
                            <p class="mb-0">
                                <strong class="text-dark">No App Name</strong>
                            </p>
                            @endforelse
                            <strong class="text-dark">Welcome to {{ config('app.name') }} | {{ now()->year }}</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/front">
                    @forelse($configAppData as $configApp)
                        {{ config('app.name') }}
                    @empty
                    <strong>No App Name</strong>
                    @endforelse
                </a>

                <a href="{{ route('frontend.ticket') }}" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('frontend.home') }}#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('frontend.home') }}#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('frontend.home') }}#section_3">Event List</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('frontend.home') }}#section_4">Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('frontend.home') }}#section_5">Meet Sponsor</a>
                        </li>
                    </ul>

                    <a href="{{ route('frontend.ticket') }}" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                </div>
            </div>
        </nav>


        <section class="ticket-section section-padding">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10 mx-auto">
                        <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                            <h2 class="text-center mb-4">Get started here</h2>

                            <div class="ticket-form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="ticket-form-name" id="ticket-form-name"
                                            class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="ticket-form-email" id="ticket-form-email"
                                            pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                            required>
                                    </div>
                                </div>

                                <input type="tel" class="form-control" name="ticket-form-phone"
                                    placeholder="Ph 085-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">

                                <h6>Choose Ticket Type</h6>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Eary bird $120
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Standard $240
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="number" name="ticket-form-number" id="ticket-form-number"
                                    class="form-control" placeholder="Number of Tickets" required>

                                <textarea name="ticket-form-message" rows="3" class="form-control"
                                    id="ticket-form-message" placeholder="Additional Request"></textarea>

                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Buy Ticket</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        @forelse($configAppData as $configApp)
                            <h2 class="text-white mb-lg-0"> {{ config('app.name') }}</h2>
                        @empty
                            <h2 class="text-white mb-lg-0">No App Name</h2>
                        @endforelse
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="{{ route('frontend.home') }}#section_1">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="{{ route('frontend.home') }}#section_2">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="{{ route('frontend.home') }}#section_3">Event List</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="{{ route('frontend.home') }}#section_4">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="{{ route('frontend.home') }}#section_5">Meet Sponsor</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            123-456-7890
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Silang Junction South, Tagaytay, Cavite, Philippines</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2036 Festava Live Company</p>
                        <p class="copyright-text">Distributed by: <a href="https://themewagon.com">ThemeWagon</a></p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--

T e m p l a t e M o

-->
    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('../frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('../frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('../frontend/js/custom.js') }}"></script>

</body>

</html>
