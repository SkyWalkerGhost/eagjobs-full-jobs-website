{{-- <div class="col-lg-6 col-6">
    <div class="small-box bg-info">
        <div class="inner">
            <h3> {{ number_format($numberOfNews) }} </h3>

            <p> სტატიები </p>
        </div>
        <div class="icon">
            <i class="fa fa-briefcase"></i>
        </div>
        <a href="{{ route('admin.pages.news.index') }}" class="small-box-footer">
            გვერდზე გადასვლა 
            <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div>



<div class="col-lg-6 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
            <h3> {{ number_format($visitorCount) }} </h3>

            <p title="ვიზიტორების რაოდენობა მთლიანად"> ვიზიტორები </p>
        </div>
        <div class="icon">
            <i class="fa fa-eye"></i>
        </div>
        @can('isAdmin')
            <a href="{{ route('admin.pages.visitor.index') }}" class="small-box-footer">
                გვერდზე გადასვლა 
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        @else
            <a href="#" class="small-box-footer">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                YOU CAN'T ACCSESS THIS PAGE 
            </a>
        @endcan
    </div>
</div>

--}}

@foreach($getVacancyTypeCountAndSum as $type)
    <div class="col-md-3">
        <div class="ui-card gradient-1">
            <div class="ui-card-body">
                <h3 class="ui-card-title text-white"> 
                    <span class="font-weight-bold letter-spacing"> 
                        {{ $type->vacancy_type }}
                        ({{ $type->vacancy_type_count }})
                        <sup> {{ $type->amount_price }} ₾ </sup>
                    </span> 
                </h3>
                <div class="d-inline-block">
                    <h2 class="text-white"> 
                        {{ number_format($type->vacancy_type_sum) }}
                        <sup> ₾ </sup>
                    </h2>
                </div>
                <span class="float-right display-5 opacity-5 text-white"> ₾ </span>
            </div>
        </div>
    </div>
@endforeach