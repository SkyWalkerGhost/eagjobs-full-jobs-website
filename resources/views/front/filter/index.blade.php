@extends('layouts.front')
    @section('siteTitle', 'ფილტრაცია')

    @section('content')

    <section    class="section-hero overlay inner-page bg-image" 
                style="background-image: url({{ asset('front/images/hero_1.jpg') }});" 
                id="home-section">
      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     @include('front.partials.filter_vacancy')
                </div>
            </div>
        </div>
    </section>
    
    <section class="site-section bg-section" id="jobs_section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 mb-5 text-center">
                    <h4 class="section-title"> 
                        <strong class="number section-counter"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title="ნაპოვნია: {{ number_format($filterVacancy->total()) }}  განაცხადი" 
                                data-number="">
                            0
                        </strong> 
                        დასაქმების განაცხადი
                    </h4>
                </div>

                @if(count($filterVacancy))
                    <div class="col-md-12">
                        @include('front.partials.vacancy_item', ['vacancies' => $filterVacancy])
                    </div>

                    <div class="col-md-12">
                        @include('front.partials.pagination_link', ['paginator' => $filterVacancy])
                    </div>
                @else
                    <div class="col-md-12">
                        <h5 class="font-weight-bold text-center text-black"> 
                            {{ vacancyNotFound() }} 
                        </h5>
                    </div>
                @endif

            </div>
        </div>
    </section>


    <script type="text/javascript">
      
        var app = angular.module('app', []);
            app.controller('myCtrl', function($scope) {
            $scope.salary;
          
            $scope.min        = 300;      // მინიმალური ანაზღაურება
            $scope.max        = 5000;     // მაქსიმალური ანაზღაურება
            $scope.step       = 100;      // თანხის ბიჯი
            $scope.value      = 500;      // წინასწარი მნიშვნელობა


            $scope.getSalary = function() {
                $scope.EnteredValue = "ანაზღაურება: " + ' ' + $scope.salary + ' ₾';
            }
        });

    </script>

    @endsection    
