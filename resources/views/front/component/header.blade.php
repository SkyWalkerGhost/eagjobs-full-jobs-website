<nav class="navbar navbar-expand-lg navbar-light bg-light bg-header" style="padding: 20px;">
    <a class="navbar-brand brand-logo" href="{{ route('front.index') }}"> EAGJOBS.GE </a>

    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="line-height: 1.3;">

            <li class="nav-item mr-3 active">
                <a class="hoverCSS3 nav-link text-white" href="{{ route('front.index') }}"> 
                    <i class="icon-home"></i> მთავარი 
                    <span class="sr-only">(current)</span>
                </a>
            </li>

        <li class="nav-item dropdown mr-3">
            <a  class="hoverCSS3 text-white" 
                data-toggle="modal" 
                data-target=".bd-example-modal-xl" 
                style="line-height: 2.3; cursor: pointer;"> 
                კატეგორიები 
            </a>

            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="container">
                            <div class="row mb-5">

                                <div class="col-md-12">
                                    <h5 class="py-2 mt-3" style="color: #3eba15;"> 
                                        <i class="icon-tags"></i> 
                                        დასაქმების კატეგორიები
                                        <a href="#" type="button" class="float-right" data-dismiss="modal" style="color: #3eba15;">
                                            <i class="icon-times"></i>
                                        </a>
                                    </h5>
                                </div>


                                <div class="col-6 col-md-3 mb-4 mb-md-0">
                                    <ul class="list-unstyled">
                                        <main class="animate__animated animate__bounceInDown animate__delay-0s animate__faster">
                                            <li class="mb-2 py-1">
                                                <a id="link_colors" href="#" class="btn-sm text-center" style="width: 100%;"> 
                                                    <i class="icon-tag"></i> 
                                                    Category 
                                                </a>
                                            </li>
                                        </main>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        </ul>

        @if(Auth::guard('company')->check())
            <div class="navbar-nav">
                <div class="dropdown mr-2">
                    
                    <button class="btn btn-outline-white border-width-2 mb-2 dropdown-toggle w-100" 
                            role="button" 
                            id="dropdownMenuLink" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                            <i class="icon-user-circle"></i>
                            {{ auth()->guard('company')->user()->name }}
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a  class="dropdown-item mb-2" href="{{ route('front.account.index') }}">
                            <i class="icon-user" aria-hidden="true"></i> 
                            პროფილი
                        </a>

                        <a  class="dropdown-item mb-2" href="{{ route('front.account.create') }}">
                            <i class="icon-plus" aria-hidden="true"></i> 
                            ვაკანსია
                        </a>

                        <a  class="dropdown-item mb-2" href="{{ route('front.account.update.profile') }}">
                            <i class="icon-pencil" aria-hidden="true"></i>
                            პროფილის განახლება
                        </a>

                        <a  class="dropdown-item mb-2" href="{{ route('front.account.history.index') }}">
                            <i class="icon-history" aria-hidden="true"></i>
                            ჩემი ისტორია
                        </a>
                    </div>
                </div>

                <a href="#" style="width: 100%;">
                    {{ Form::open(['action' => ['Auth\LoginController@logoutCompanyUser'], 'method' => 'POST']) }}
                        <button class="btn btn-outline-white border-width-2 mr-3 mb-2" style="width: 98.4%;">
                            <span class="mr-2 icon-sign-out "></span> გასვლა
                        </button>
                    {{ Form::close() }}

                </a>
            </div>
        @else
            <div class="navbar-nav">
                <a href="{{ route('company.register') }}" class="btn btn-outline-white border-width-2 mr-3 mb-2">
                    <span class="mr-2 icon-plus" id="animate_icon_company"></span> 
                    განათავსე სამუშაო
                </a>

                <a href="{{ route('company.login') }}" class="btn btn-outline-white border-width-2 mr-3 mb-2">
                    <span class="mr-2 icon-sign-out"></span> 
                    შესვლა
                </a>
            </div>
        @endif
    </div>
</nav>
