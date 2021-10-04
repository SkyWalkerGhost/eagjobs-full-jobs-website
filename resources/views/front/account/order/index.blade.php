@extends('layouts.front')
    @section('siteTitle', 'დასაქმების განაცხადი - '. $vacancy->order_id)

    @section('content')


    @include('front.component.section_hero', [
        'name' => 'დასაქმების განაცხადი',
        'title' => 'დასაქმების განაცხადის დეტალები'
    ])
    
    <section class="site-section block__18514" id="next-section" style="background: #f8f9fa !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
       
                    <div class="container">
                        <div class="row">
                  
                            <div class="col-md-12 mb-3">
                                <strong class="float-right" style="font-size: 1.2rem;"> 
                                    <a id="link_colors" href="#" onclick="window.print()"> 
                                        ამობეჭდვა: <i class="icon-print2"></i> 
                                    </a> 
                                </strong>
                            </div>

                            <div class="col-md-12">
                                @include('front.account.order.components.table')
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    @endsection    
    
  


