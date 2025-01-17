<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.plyr.io/3.6.8/plyr.css" rel="stylesheet"/>
    {{-- resource_path --}}

    <link href="{{ asset('../frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../frontend/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('../frontend/css/templatemo-festava-live.css') }}" rel="stylesheet">
    {{-- <link href="../css/frontend/bootstrap.min.css" rel="stylesheet">
    <link href="../css/frontend/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/frontend/templatemo-festava-live.css" rel="stylesheet"> --}}

    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
        nonce="yUMgYs56">
    </script>
    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to {{ config('app.name') }} | {{ now()->year }}</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontend.home') }}">
                    {{ config('app.name') }}
                </a>

                <a href="{{ route('frontend.ticket') }}" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Event List</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Meet Sponsor</a>
                        </li>
                    </ul>

                    <a href="{{ route('frontend.ticket') }}" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                    {{-- <a href="/front/ticket" class="btn custom-btn d-lg-block d-none">Buy Ticket</a> --}}
                </div>
            </div>
        </nav>


        @forelse ($eventData as $event)
        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>{{ config('app.name') }}</small>
                        <h1 class="text-white mb-5">{{ $event->tittle }}</h1>
                        <a class="btn custom-btn smoothscroll" href="{{ $event->id }}">Let's begin</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                {{-- <i class="custom-icon bi-clock me-2"></i> --}}
                                <i class="custom-icon bi-calendar2 me-2"></i>
                                {{ \Carbon\Carbon::parse($event->start_date)->format('d-m-Y') }} -
                                {{ \Carbon\Carbon::parse($event->end_date)->format('d-m-Y') }}
                            </h5>
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                {{-- <i class="custom-icon bi-calendar2 me-2"></i> --}}
                                {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                @forelse($venueData as $venue)
                                    {{ $venue->tittle  }}
                                @empty
                                    <p class="mb-0">
                                        <strong>No Venue</strong>
                                    </p>
                                @endforelse
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>
                                {{-- <div class="fb-share-button"
                                data-href="https://developers.facebook.com/docs/plugins/"
                                data-layout="" data-size="">
                                    <a target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                                    class="fb-xfbml-parse-ignore">Share</a></div> --}}
                                <li class="social-icon-item">
                                    <div class="fb-share-button"
                                        data-href="https://developers.facebook.com/docs/plugins/"
                                        data-layout="" data-size="">
                                        <a target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                                            class="social-icon-link">
                                            <span class="bi-facebook"></span>
                                        </a>
                                    </div>
                                </li>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    {{-- <source src="{{ asset('../frontend/video/pexels-2022395.mp4') }}" type="video/mp4"> --}}
                    {{-- <source src="{{ asset('../storage/images/events/videos/sample-promotion.mp4') }}" type="video/mp4"> --}}
                    {{-- <source src="{{ asset('uploads/media/gLLMIFHOvNSio6zZG8RM96X2H0UMeqUoEx2ptHLL.mp4') }}" type="video/mp4"> --}}
                    {{-- <source src="{{ asset('uploads/media/'.$event->video_link.")' }} type="video/mp4"> --}}
                    <source src="<?php echo asset("uploads/media/{$event->video_link}")?>" type="video/mp4">
                    {{-- <source src="https://www.youtube-nocookie.com/embed/YUikseVI58A?controls=0&&disable_polymer=true" type="video/mp4"> --}}
                    Your browser does not support the video tag.
                </video>

                {{-- <div class="plyr__video-embed" id="player"> --}}
                    {{-- <iframe
                      src="https://www.youtube.com/watch?v=YUikseVI58A?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                      allowfullscreen
                      allowtransparency
                      allow="autoplay"
                    ></iframe> --}}

                    {{-- <iframe video autoplay="" loop="" muted=""
                        src="https://www.youtube-nocookie.com/embed/YUikseVI58A?controls=0&&disable_polymer=true"
                        title="YouTube video player"
                        allowfullscreen
                        allowtransparency
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media;"
                        allowfullscreen>
                    </iframe> --}}

                    {{-- <iframe
                        width="560" height="315"
                        src="https://www.youtube.com/embed/YUikseVI58A"
                        frameborder="0"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay"
                        allowfullscreen>
                    </iframe> --}}
                {{-- </div> --}}
            </div>
        </section>
        @empty
        <p class="mb-0">
            <strong>No Featured</strong>
        </p>
        @endforelse


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">


                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                        @forelse($configAppData as $configApp)
                            <h2 class="text-white mb-4">About {{ $configApp->app_name }}</h2>
                            <p class="text-white">
                                {{ $configApp->description }}
                            </p>
                            {{-- <p class="text-white">Festava Live is free CSS template provided by TemplateMo website. This
                                layout is built on Bootstrap v5.2.2 CSS library. You are free to use this template for
                                your commercial website.</p>
                            <h6 class="text-white mt-4">Once in Lifetime Experience</h6>
                            <p class="text-white">You are not allowed to redistribute the template ZIP file on any other
                                website without a permission.</p>
                            <h6 class="text-white mt-4">Whole Night Party</h6>
                            <p class="text-white">Please tell your friends about our website. Thank you.</p> --}}
                        @empty
                        <h2 class="text-white mb-4">About {{ config('app.name') }}</h2>
                        <p class="text-white mb-4">
                            <strong>No Venue</strong>
                        </p>
                        @endforelse
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="{{ asset('../frontend/images/pexels-alexander-suhorucov-6457579.jpg') }}" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>a happy moment</h3>

                                    <p class="mb-0">your amazing festival experience with us</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <section class="event-list-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="mb-4">Events List</h1>
                    </div>
                    @forelse ( $allEventData as $allEvents)
                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                {{-- images/events/thumbnail/mZyCKGo1lu3SFCSOQmxB6OGsGynk5TvTrrjXPnge.jpg --}}
                                {{-- disk('public')->path('images/events/thumbnail') --}}
                                {{-- < ?php echo asset("uploads/media/{$event->video_link}")?> --}}
                                {{-- < ?php echo disk("public/{$event->poster}")?> --}}
                                {{-- echo asset('storage/file.jpg'); //without subfolder uploads --}}
                                {{-- <img src="< ?php echo Storage::disk("public/{$event->poster}")?>"
                                    class="artists-image img-fluid"> --}}
                                {{-- <img src="{{ asset('storage/2/images/'.$user->profile_image) }}" /> --}}
                                <img src="{{ asset('storage/'.$allEvents->poster) }}"
                                    class="artists-image img-fluid">
                            </div>
                            <div class="artists-hover">
                                {{-- <p class="d-flex me-4 mb-0">
                                    <i class="bi-person custom-icon me-2"></i>
                                    <strong class="text-dark">Welcome to {{ config('app.name') }} | {{ now()->year }}</strong>
                                </p> --}}
                                <p>
                                    <strong class="text-dark link-fx-2">{{ $allEvents->tittle }}</strong>
                                </p>
                                {{-- <p>
                                    <strong class="text-dark">{{ Str::limit("$event->description", 100, ' ...') }}</strong>
                                </p> --}}
                                {{-- Str::words("$post->content", 8, ' ...') --}}
                                <p>
                                    <strong class="text-dark link-fx-2 color-contrast-higher">
                                        {{ Str::limit("$allEvents->description",75, ' ...') }}</strong>
                                </p>
                                <p>
                                    <strong class="text-dark link-fx-2 color-contrast-higher">Location:</strong>
                                    <a class="link-fx-2" href="/{{ $allEvents->venue_id }}">
                                        <span>{{ Str::limit("$allEvents->venues_tittle",50, ' ...') }}</span>
                                    </a>
                                </p>
                                <hr>
                                <p>
                                    <a class="link-fx-1 color-contrast-higher" href="ticket.html">
                                        <span>Buy Ticket</span>
                                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="16" cy="16" r="15.5"></circle>
                                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                                <line x1="16" y1="12" x2="22" y2="18"></line>
                                            </g>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="mb-0">
                        <strong>No Events</strong>
                    </p>
                    @endforelse
                </div>
            </div>
        </section>

        {{-- <section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Event Schedule</h1>
                            <div class="table-responsive">
                                <table class="schedule-table table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sunday</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    < ?php
                                        // $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];   
                                    ?>
                                    <tbody>
                                        <tr>
                                        {{-- @foreach($days as $day) -- }}

                                            @forelse ($allEventData as $allEvents)
                                                {{-- @foreach ($endDayOfEvent as $endDay)
                                                    @foreach ($startDayOfEvent as $startDay)
                                                        
                                                    @endforeach
                                                @endforeach --}}
                                            {{-- {{ $eventDay = \Carbon\Carbon::parse($allEvents->start_date)->format('l')}} --}}
                                        {{-- {{ Debugbar::info($eventDay) }} --}}
                                        {{-- {{ Debugbar::info($allEvents) }} --}}
                                        {{-- @if($allEvents->$eventDay == $day) --}}
                                            {{-- {{ Debugbar::info(\Carbon\Carbon::parse($allEvents->start_date)->format('l')) }} --}}
                                            {{-- {{ Debugbar::info($allEvents) }} --}}
                                            {{-- Carbon::createFromFormat('m/d/Y', 
                                                $allEvents->start_date)->format('l'); -- }}

                                            <td>{{ $allEvents->venues_tittle.'-'.\Carbon\Carbon::parse($allEvents->start_date)->format('l') }}</td>
                                            <td class="table-background-image-wrap pop-background-image">
                                                <div class="jam"><h3>{{ $allEvents->venues_tittle  }}</h3></div>
                                                <div class="jam"><p class="mb-2">5:00 - 7:00 PM</p></div>
                                                <div class="jam"><p>By Adele</p>></div>                                                
                                                <div class="section-overlay"></div>
                                            </td>
                                        {{-- @else
                                            <td></td>

                                        @endif -- }}
                                            @empty
                                            <td>
                                                <p class="mb-0">
                                                        <strong>No Venue</strong>
                                                </p>
                                            </td>
                                            @endforelse
                                        {{-- @endforeach --}}
                                            {{-- 
                                            <td class="table-background-image-wrap pop-background-image">
                                                <h3>Pop Night</h3>
                                                <p class="mb-2">5:00 - 7:00 PM</p>
                                                <p>By Adele</p>
                                                <div class="section-overlay"></div>
                                            </td>
                                            <td class="table-background-image-wrap pop-background-image">
                                                <h3>Pop Night</h3>
                                                <p class="mb-2">5:00 - 7:00 PM</p>
                                                <p>By Adele</p>
                                                <div class="section-overlay"></div>
                                            </td>
                                            <td style="background-color: #F3DCD4"></td>
                                            <td class="table-background-image-wrap rock-background-image">
                                                <h3>Rock & Roll</h3>
                                                <p class="mb-2">7:00 - 11:00 PM</p>
                                                <p>By Rihana</p>
                                                <div class="section-overlay"></div>
                                            </td> 
                                            -- }}
                                        </tr>

                                        {{-- 
                                        <tr>
                                            <td>Day 2</td>
                                            <td style="background-color: #ECC9C7"></td>
                                            <td>
                                                <h3>DJ Night</h3>
                                                <p class="mb-2">6:30 - 9:30 PM</p>
                                                <p>By Rihana</p>
                                            </td>
                                            <td style="background-color: #D9E3DA"></td>
                                        </tr> 
                                        --}}
                                        
                                        {{--                                         
                                        <tr>
                                            <td>Day 3</td>
                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Country Music</h3>
                                                <p class="mb-2">4:30 - 7:30 PM</p>
                                                <p>By Rihana</p>
                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>
                                            <td>
                                                <h3>Free Styles</h3>
                                                <p class="mb-2">6:00 - 10:00 PM</p>
                                                <p>By Members</p>
                                            </td>
                                        </tr> 
                                        --}}
                                        
                                        {{-- 
                                        <tr>
                                            <td>Day 3</td>
                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Country Music</h3>
                                                <p class="mb-2">4:30 - 7:30 PM</p>
                                                <p>By Rihana</p>
                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>
                                            <td>
                                                <h3>Free Styles</h3>
                                                <p class="mb-2">6:00 - 10:00 PM</p>
                                                <p>By Members</p>
                                            </td>
                                        </tr> 
                                        --}}
                                        {{-- 
                                        <tr>
                                            {{-- <td scope="row">Day 3</td> -- }}
                                            <td>No Venue</td>
                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Country Music</h3>
                                                <p class="mb-2">4:30 - 7:30 PM</p>
                                                <p>By Rihana</p>
                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>
                                            <td>
                                                <h3>Free Styles</h3>
                                                <p class="mb-2">6:00 - 10:00 PM</p>
                                                <p>By Members</p>
                                            </td>
                                        </tr> 
                                        -- }}

                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="artists-section section-padding" id="section_5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Meet Sponsor</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="{{ asset('../frontend/images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg') }}"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Madona
                                </p>

                                {{-- <p>
                                    <strong>Birthdate:</strong>
                                    August 16, 1958
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop, R&amp;B
                                </p> --}}

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Madona Official</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="{{ asset('../frontend/images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg') }}"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Rihana
                                </p>

                                {{-- <p>
                                    <strong>Birthdate:</strong>
                                    Feb 20, 1988
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Country
                                </p> --}}

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Rihana Official</a>
                                </p>
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="{{ asset('../frontend/images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg') }}"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Bruno Bros
                                </p>

                                {{-- <p>
                                    <strong>Birthdate:</strong>
                                    October 8, 1985
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop
                                </p> --}}

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Bruno Official</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- <section class="pricing-section section-padding section-bg" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Plans, you' love</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Early Bird</small> $120</h3>

                                    <p>Including good things:</p>
                                </div>

                                <p class="pricing-tag ms-auto">Save up to <span>50%</span></h2>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">platform for potential customers</li>

                                <li class="pricing-list-item">digital experience</li>

                                <li class="pricing-list-item">high-quality sound</li>

                                <li class="pricing-list-item">standard content</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                                <span>Buy Ticket</span>
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

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Standard</small> $240</h3>

                                    <p>What makes a premium festava?</p>
                                </div>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">platform for potential customers</li>

                                <li class="pricing-list-item">digital experience</li>

                                <li class="pricing-list-item">high-quality sound</li>

                                <li class="pricing-list-item">premium content</li>

                                <li class="pricing-list-item">live chat support</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                                <span>Buy Ticket</span>
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
            </div>
        </section> --}}



        {{--
        <section class="contact-section section-padding" id="section_7">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Interested? Let's talk</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactForm" type="button" role="tab"
                                    aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                    role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                    class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email"
                                                    pattern="[^ @]*@[^ @]*" class="form-control"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>

                                        <input type="text" name="contact-company" id="contact-company"
                                            class="form-control" placeholder="Company" required>

                                        <textarea name="contact-message" rows="3" class="form-control"
                                            id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        --}}
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">{{ config('app.name') }}</h2>
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
                                    <span class="bi-apple"></span>
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

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
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
                            <a class="site-footer-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="#section_3">Event List</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="#section_4">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link click-scroll" href="#section_5">Meet Sponsor</a>
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
                        <p class="copyright-text">Copyright 2020 - {{ now()->year }}</p>
                        <p class="copyright-text text-yellow-600 hover:text-yellow-400 transition-all">Powered by
                            <a class="link-default font-bold" href="https://sivnot.com">VnoT</a></p>
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
    {{-- @push('head') --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/pizza.css') }}" rel="stylesheet"> --}}
    <!-- Scripts -->

    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    <script src="{{ asset('../frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('../frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('../frontend/js/click-scroll.js') }}"></script>
    <script src="{{ asset('../frontend/js/custom.js') }}"></script>
    {{-- @endpush --}}
    {{--
    <script src="../js/frontend/jquery.min.js"></script>
    <script src="../js/frontend/bootstrap.min.js"></script>
    <script src="../js/frontend/jquery.sticky.js"></script>
    <script src="../js/frontend/click-scroll.js"></script>
    <script src="../js/frontend/custom.js"></script>
    --}}
</body>

</html>
