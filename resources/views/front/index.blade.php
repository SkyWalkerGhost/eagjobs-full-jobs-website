@extends('layouts.front')
    @section('siteTitle', 'ვაკანსიები')

    @section('content')

    <section    class="home-section section-hero overlay bg-image" 
                style=" background-image: url({{ asset('front/images/hero_1.jpg') }});" 
                id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <div>
                            <main class="animate__animated animate__backInLeft animate__delay-1s animate__repeat-1">
                                <h1 id="animate_slogan" data-text="სწრაფი გზა შენი ოცნების სამუშაოსთვის" class="text-white font-weight-bold mt-5" >
                                    სწრაფი გზა შენი ოცნების სამუშაოსთვის
                                </h1>
                            </main>
                        </div>

                        <div>
                            <main class="animate__animated animate__backInRight animate__delay-1s animate__repeat-1">
                                <p id="mainanimate_text"> მოძებნე შენთვის სასურველი სამუშაო - <span id="animateSpanTxt" ></span> </p>
                            </main>
                        </div>
                    </div>
                        
                        @include('front.partials.search_vacancy')

                </div>
            </div>
        </div>

        <a href="#jobs_section" class="scroll-button smoothscroll">
            <span class="icon-keyboard_arrow_down"></span>
        </a>

    </section>

    <section    class="py-5 bg-image overlay-primary fixed overlay" 
                id="next" 
                style="background-image: url({{ asset('front/images/hero_1.jpg') }});">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title mb-2 text-white"> კატეგორიები </h2>
                    <p class="lead text-white">
                        მოძებნე შენთვის სასურველი ვაკანსია დასაქმების კატეგორიის მიხედვით
                    </p>
                </div>
            </div>

            <div class="row pb-0 section-counter">
                @include('front.partials.category')
            </div>
        </div>
    </section>

    <section class="site-section bg-section" id="jobs_section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center mb-5">
                    <h2 class="section-title mb-2"> 
                        PREMIUM პაკეტის განაცხადები
                    </h2>
                </div>

                <div class="col-md-12 mb-3">
                    @include('front.partials.vacancy_item', ['vacancies' => $getPrimeVacancy])
                </div>

                <div class="col-md-12 mb-3">
                    @include('front.partials.vacancy_item', ['vacancies' => $getGoldVacancy])
                </div>

                <div class="col-md-12 mb-3">
                    @include('front.partials.vacancy_item', ['vacancies' => $getVipVacancy])
                </div>

            </div>
        </div>
    </section>

    <section class="site-section section-hero overlay bg-image section-style" id="demos" style="background-image: url({{ asset('front/images/hero_1.jpg') }});">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    @include('front.partials.company_logo_slider')
                </div>
            </div>
        </div>
    </section>


    <section class="site-section bg-section" id="#jobs_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate mb-20" id="jobs">
                    <div class="col-md-12 mb-3">
                        @include('front.partials.vacancy_item', ['vacancies' => $getStandardVacancy])
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('front.component.finding_vacancy')

    @endsection
