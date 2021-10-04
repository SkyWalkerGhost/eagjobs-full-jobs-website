

@foreach($vacancies as $vacancy)
    <main class="animate__animated animate__backInLeft animate__delay-2s animate__faster">
        <div class="job-post-item bg-white p-3 d-block d-md-flex align-items-center mb-3" id="hoverBlock" style="background: #fff !important;">

            <div class="mb-4 mb-md-2 mr-2">

                <div class="job-post-item-header d-flex align-items-center">
                    <a href="{{ route('front.show.index', [$vacancy->id, Str::slug($vacancy->name, '-')]) }}" class="mr-3 text-black text-decoration-none" style="font-size: 1.2rem;" > 
                        {{ $vacancy->vacancyName() }}
                    </a>
                </div>
              
                <div class="job-post-item-body d-block d-md-flex">
                
                    <div class="mr-2">
                        <a href="{{ route('front.company.index', [$vacancy->company->id, Str::slug($vacancy->company->name, '-')]) }}" id="link_colors"> 
                            <i class="icon-layers" id="animate_icon_company"></i>
                            {{ $vacancy->company->name ?? '' }}
                        </a>
                    </div>

                    <div>

                        <a href="{{ route('front.location.index', [$vacancy->location->id, Str::slug($vacancy->location->name, '-')]) }}" id="link_colors" class="ml-1"> 
                            <i class="icon-my_location" id="animate_icon_location"></i> 
                            {{ $vacancy->location->name ?? '' }}
                        </a>

                        <a href="{{ route('front.category.index', [$vacancy->category->id, Str::slug($vacancy->category->name, '-')]) }}" id="link_colors" class="p-2 ml-1">
                            <i class="icon-tags" id="animate_icon_tags"></i>
                            {{ $vacancy->category->name ?? '' }}
                        </a>

                        <span class="p-2">
                            <i class="icon-calendar-plus-o"> </i>  
                            <span data-toggle="tooltip" data-placement="top" title="გამოქვეყნდა"> 
                                {{ \Carbon\Carbon::parse($vacancy->start_time)->format('d M') }}
                            </span>

                                <i class="mr-2 ml-2"> - </i> 

                            <i class="icon-calendar-minus-o"> </i> 
                            <span data-toggle="tooltip" data-placement="top" title="ბოლო ვადა"> 
                                {{ \Carbon\Carbon::parse($vacancy->end_time)->format('d M') }}
                            </span>
                        </span> 

                    </div>

                </div>
            </div>

            <div class="ml-auto d-flex">
                <a href="#" class="btn btn-primary py-1 mr-1 text-white"> 
                    {{ $vacancy->vacancy_type }} 
                </a>
            </div>
        </div>
    </main>
@endforeach