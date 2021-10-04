@extends('layouts.front')
    @section('siteTitle', 'ადგილმდებარეობა')

    @section('content')

    @include('front.component.section_hero', [
        'name' => 'ადგილმდებარეობა',
        'title' => 'ვაკანსიები ადგილმდებარეობის მიხედვით'
    ])
    
    <section class="site-section bg-section" id="jobs_section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 mb-5 text-center">
                    <h4 class="section-title"> 
                        <strong class="number section-counter" 
                                data-number="{{ number_format($getVacancyByLocation->total()) }}">
                            0
                        </strong> 
                        დასაქმების განაცხადი
                    </h4>
                </div>

                <div class="col-md-12">
                    @include('front.partials.vacancy_item', ['vacancies' => $getVacancyByLocation])
                </div>
                
                <div class="col-md-12">
                    @include('front.partials.pagination_link', ['paginator' => $getVacancyByLocation])
                </div>

            </div>


        </div>
    </section>

    @endsection    
    
  


