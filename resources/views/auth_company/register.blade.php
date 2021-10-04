@extends('layouts.front')
    @section('siteTitle', 'კომპანიის რეგისტრაცია')

    @section('content')


    @include('front.component.section_hero', [
        'name' => 'რეგისტრაცია',
        'title' => 'დაარეგისტრირეთ თქვენი კომპანია'
    ])


    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-7 mb-5">
                    <h2 class="mb-4 text-center"> დარეგისტრირდი EAGJOBS.GE -ზე </h2>

                    {{ Form::open(['action' => ['Auth\RegisterController@createCompanyUser'], 'method' => 'POST']) }}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="mb-3 mb-md-0">
                                        <label class="text-black" for="fname"> კომპანიის ელექტრონული მისამართი * </label>
                                        <input type="text" name="email" class="form-control" placeholder="ელ-ფოსტა" value="{{ old('email') }}">
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
                                        <label class="text-black" for="fname"> კომპანიის სახელი * </label>
                                        <input type="text" name="name" class="form-control" placeholder="კომპანიის სახელი" value="{{ old('name') }}">
                                    </div>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ $message }} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-3 mb-md-0">
                                        <label class="text-black" for="fname"> პაროლი
                                            <span data-html="true" data-toggle="tooltip" data-placement="top" title="">
                                                <i class="icon-question-circle"></i>
                                            </span>
                                        </label>
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

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-3 mb-md-0">
                                        <label class="text-black" for="fname"> გაიმეორეთ პაროლი
                                            <span data-html="true" data-toggle="tooltip" data-placement="top" title="">
                                                <i class="icon-question-circle"></i>
                                            </span>
                                        </label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="გაიმეორეთ პაროლი" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" name="check_mark" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> მე ვეთანხმები საიტის
                                        <a href="Privacy-policy" id="link_colors"> პოლიტიკასა და წესებს </a>
                                    </label>
                                </div>
                                @error('check_mark')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ $message }} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <input type="reset" value="გაუქმება" class="btn px-4 btn-secondary text-white">
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <button type="submit" name="_reg" class="btn px-4 btn-primary text-white"> რეგისტრაცია </button>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="#" id="link_colors"> <i class="icon-unlock-alt"></i> ავტორიზაცია </a>
                            </div>

                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

    @endsection
