<div class="border p-4 rounded">
    <ul class="list-unstyled block__47528 mb-0 text-center">
        <main class="animate__animated animate__zoomIn animate__delay-2s animate__faster">

            <ul class="list-group">

                <li class="btn btn-primary mb-2"> 
                    <a class="text-white" style="cursor: pointer;">
                    @if(auth()->guard('company')->user()->photo)
                        <img    src="{{ Storage::url(auth()->guard('company')->user()->photo) }}" 
                                class="company-logo" 
                                alt="{{ auth()->guard('company')->user()->name }}"> 
                        
                        <span class="text-white"> 
                            {{ Str::limit(auth()->guard('company')->user()->name, 20) }}
                        </span>
                    @else
                        <img    src="{{ asset('front/images/noimage.jpg') }}" 
                                class="company-logo" 
                                alt="{{ auth()->guard('company')->user()->name }}">
                        <span class="text-white"> 
                            {{ Str::limit(auth()->guard('company')->user()->name, 20) }}
                        </span> 
                    @endif
                  </a> 
              </li>

                <li class="list-group-item mb-2">
                    <a id="link_colors"  href="#" data-toggle="tooltip" data-placement="top" title="ჩვენს სისტემაში რეგისტრირების დროს მოგენიჭათ უნიკალური ID მნიშვნელობა">
                        ID: {{ auth()->guard('company')->user()->identity_id }}
                    </a>
                </li>

                <li class="list-group-item mb-2">
                    <a id="link_colors"  href="{{ route('front.account.create') }}" data-toggle="tooltip" data-placement="top" title="დასაქმების ვაკანსიების გამოქვეყნება">
                        <i class="icon-plus" aria-hidden="true" id="hover_animate_icon_company"></i>  განაცხადი
                    </a>
                </li>

            </ul>
        </main>
    </ul>
</div>