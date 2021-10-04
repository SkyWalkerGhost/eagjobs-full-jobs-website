@extends('layouts.front')
    @section('siteTitle', 'დასაქმების განაცხადის განთავსება')

    @section('content')

    @include('front.component.section_hero', [
        'name' => 'ვაკანსია',
        'title' => 'დასაქმების ვაკანსიის განთავსება'
    ])

    @include('message.msg')

    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2> ახალი ვაკანსია </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md">
                                <span class="icon-open_in_new mr-2"></span>
                                Preview
                            </a>
                        </div>
                    
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md"> შენახვა </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    @include('front.account.components.crud.store')
                </div>
            </div>

            <div class="row align-items-center mb-5">
          
                <div class="col-lg-4 ml-auto">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md">
                                <span class="icon-open_in_new mr-2"></span>
                                Preview
                            </a>
                        </div>
                    
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
