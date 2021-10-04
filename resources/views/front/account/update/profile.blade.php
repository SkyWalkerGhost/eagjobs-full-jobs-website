@extends('layouts.front')
    @section('siteTitle', 'პროფილის განახლება')

    @section('content')

    @include('front.component.section_hero', [
        'name' => 'პროფილი',
        'title' => 'კომპანიის პროფილის განახლება'
    ])
   
    @include('message.msg')

    <section class="site-section block__18514 bg-section" id="next-section" style="background: #f8f9fa !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">

                        @include('front.account.update.crud.update')
      
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection    
    
  


