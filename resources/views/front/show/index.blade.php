@extends('layouts.front')
    @section('siteTitle', $vacancy->name ?? '')

    @section('content')

    @include('message.msg')

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <section    class="section-hero overlay inner-page bg-image" 
                style="background-image: url({{ asset('front/images/hero_1.jpg') }});" 
                id="home-section">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white font-weight-bold" style="word-break: break-word;"> 
                        {{ $vacancy->name }} 
                    </h1>
                    
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('front.index') }}"  class="text-white"> 
                            <i class="icon-home"></i> 
                            <strong> მთავარი </strong> 
                        </a> 

                        <span class="mx-2 slash text-white">/</span>

                        <a href="#" class="text-white"> 
                            <strong> ვაკანსია </strong> 
                        </a> 

                        <span class="mx-2 slash text-white">/</span>
                        
                        <span class="text-white"> 
                            <strong> {{ $vacancy->name }} </strong> 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" style="background: #f1f1f1 !important;">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-10 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">

                        <div class="p-2 d-inline-block mr-3 rounded">

                            @if($vacancy->company->photo)
                                <img    src="{{ Storage::url($vacancy->company->photo) }}" 
                                        style="width: 130px; height: 130px;" 
                                        alt="{{ $vacancy->company->name ?? '' }}">
                            @else
                                  <i class="icon-image"></i>
                                  <strong> NO COMPANY IMAGE </strong>
                            @endif

                        </div>


                        <div class="col-md-10">

                            <h4 class="text-wrap" style="word-break: break-word;"> 
                                {{ Str::limit($vacancy->name) }} 
                            </h4>

                            <div>

                                <a id="link_colors" href="#" class="ml-0 mr-2 mb-2">
                                    <span class="icon-briefcase mr-2"></span> 
                                    {{ $vacancy->company->name ?? '' }}
                                </a>


                                <a id="link_colors" href="#">
                                    <span class="m-2">
                                        <span class="icon-room mr-2" style=""></span> 
                                        {{ $vacancy->location->name ?? '' }}
                                    </span>
                                </a>

                                <span class="m-2">
                                    <span class="icon-clock-o mr-2" style=""></span> 
                                    {{ \Carbon\Carbon::parse($vacancy->start_time)->format('d M') }}
                                    /
                                    {{ \Carbon\Carbon::parse($vacancy->end_time)->format('d M') }}
                                </span>


                                <span data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="კომპანიის რეპუტაცია"> 
                                    <span id="link_colors" style="font-size: 1.3rem;"> 
                                        1
                                        5
                                    </span>

                                    <span id="link_colors" style=" font-size: 1.1rem;"> 
                                        3
                                    </span>
                                </span>

                                <span   class="ml-3" 
                                        data-style="btn-white btn-lg" 
                                        data-width="100%" 
                                        data-live-search="true" 
                                        title="დასაქმების განაცხადი ნახა: 123 ადამიანმა"> 
                                        <i id="link_colors" class="icon-eye" style="font-size: 1.1rem;"></i> 
                                    {{ number_format($vacancy->vacancy_view) }}
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-md-12">
                            @livewire('company.add-company-review', ['vacancy_id' => $vacancy->id])
                        </div>
                    </div>
                </div>  
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-8 mb-4 mb-lg-0">

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary" id="link_colors">
                            <span class="icon-align-left mr-3"></span> კომპანიის შესახებ
                        </h3>

                        <p> {!! $vacancy->company->about_company ?? '' !!} </p>

                    </div>


                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary" id="link_colors">
                            <span class="icon-align-left mr-3"></span> სამუშაოს აღწერა
                        </h3>
                        <p> {!! $vacancy->job_description !!} </p>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary" id="link_colors">
                            <span class="icon-rocket mr-3"></span> საკვალიფიკაციო მოთხოვნები 
                        </h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2">
                                <!-- <span class="icon-check_circle mr-2 text-muted"></span> -->
                                <span> {!! $vacancy->qualification_requirements !!} </span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary" id="link_colors">
                            <span class="icon-book mr-3"></span> 
                            განათლება + გამოცდილება + სამუშაო ენა
                        </h3>

                        <ul class="list-unstyled m-0 p-0">

                            <li class="d-flex align-items-start mb-2">
                                <span class="icon-check_circle mr-2" style="color: #0ae80a;"></span>
                                <span> {{ $vacancy->education }} </span>
                            </li>


                            <li class="d-flex align-items-start mb-2">
                                <span class="icon-check_circle mr-2" style="color: #0ae80a;"></span>
                                <span> {{ $vacancy->experience->name ?? '' }} </span>
                            </li>


                            <li class="d-flex align-items-start mb-2">
                                <span class="icon-check_circle mr-2"  style="color: #0ae80a;" ></span>
                                <span> {{ $vacancy->language->name ?? '' }} </span>
                            </li>
                       
                        </ul>

                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">

                    <div class="table-responsive">
                        <table class="table table-hover p-3 mb-3">
                            
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 text-center" id="link_colors"> 
                                <i class="icon-info-circle"></i> 
                                ვაკანსიის დეტალები 
                            </h3>
                        
                            <tbody>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-tags"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->category->name ?? '' }} </span> </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-university"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->education }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-clock-o"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->work_schedule }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-book"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->experience->name ?? '' }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-location-arrow"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->location->name ?? '' }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> <i class="icon-globe"></i> </strong> 
                                    </th>
                                    <td> <span> {{ $vacancy->language->name ?? '' }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <span class="text-dark mr-4"> ₾ </span> 
                                    </th>
                                    <td> <span> {{ $vacancy->salary ?? '' }} </span>  </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> 
                                        <i class="icon-phone"></i> </strong> 
                                    </th>

                                    <td> 
                                        123 452 123
                                    </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> 
                                        <i class="icon-envelope-o"></i> </strong> 
                                    </th>

                                    <td> 
                                        <a href="#" id="link_colors">
                                            {{ $vacancy->company->email ?? '' }}
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> 
                                            <i class="icon-laptop"></i> 
                                        </strong> 
                                    </th>

                                    <td> 
                                        {{ $vacancy->company->website ?? 'მითითებული არ არის' }}
                                    </td>
                                </tr>

                                <tr>
                                    <th style="width:50%"> 
                                        <strong class="text-dark mr-4"> 
                                            <i class="icon-facebook"></i> 
                                        </strong> 
                                    </th>
                                  
                                    <td> 
                                        {{ $vacancy->company->facebook ?? 'მითითებული არ არის' }}
                                    </td>
                                </tr>
                      
                            </tbody>
                        </table>
                    </div>


              
                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 " id="link_colors"> 
                            <i class="icon-share-alt"></i> გაზიარება 
                        </h3>
                        
                        <div class="px-3">
                            <a id="link_colors" href="#" class="pt-3 pb-3 pr-3 pl-0">
                                <span class="icon-facebook"></span>
                            </a>
                        </div>

                    </div>

                    </div>
            </div>
        </div>
    </section>    

@endsection    
    
  


