@extends('layouts.front')
    @section('siteTitle', 'კომპანიის ავტორიზაცია')

    @section('content')

    @include('message.msg')

    @include('front.component.section_hero', [
        'name' => 'ავტორიზაცია',
        'title' => 'კომპანიის ანგარიშში შესვლა'
    ])


    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-5 mb-5">
                    <h2 class="mb-4 text-center"> ავტორიზაცია </h2>

                    {{ Form::open(['action' => ['Auth\LoginController@loginCompanyUser'], 'method' => 'POST']) }}

                        <div class="row">

                            <div class="col-md-12">
                                @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ session('error') }} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="mb-3 mb-md-0">
                                        <input type="text" name="email" class="form-control" placeholder="ელ-ფოსტა">
                                    </div>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ $message }} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="mb-3 mb-md-0">
                                        <input type="password" name="password" class="form-control" placeholder="პაროლი" >
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ $message }} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            ავტორიზაცია
                                        </button>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <a href="{{ route('company.register') }}" id="link_colors">
                                    არ გაქვს ანგრიში ? რეგისტრაცია
                                 </a>
                            </div>

                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

    @endsection
