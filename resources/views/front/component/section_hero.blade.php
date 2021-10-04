<section    class="section-hero overlay inner-page bg-image"
            style="background-image: url({{ asset('front/images/hero_1.jpg') }});"
            id="home-section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white font-weight-bold" style="word-break: break-word;">
                        {{ $name }}
                    </h1>

                    <div class="custom-breadcrumbs">
                        <a href="{{ route('front.index') }}"  class="text-white">
                            <i class="icon-home"></i>
                            <strong> მთავარი </strong>
                        </a>

                        @if(Auth::guard('company')->check())
                        <span class="mx-2 slash text-white">/</span>
                            <a href="{{ route('front.account.index') }}"  class="text-white">
                                <i class="icon-user"></i>
                                <strong> პროფილი </strong>
                            </a>
                        @endif

                        <span class="mx-2 slash text-white">/</span>

                        <span class="text-white">
                            <strong> {{ $title }} </strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
</section>
