<div class="owl-carousel owl-theme">
    @foreach($getCompanyLogo as $company_logo)
        <div class="item">

            @if($company_logo->photo)
                <img    src="{{ Storage::url($company_logo->photo) }}" 
                        alt="{{ $company_logo->name }}" class="img-fluid rounded w-100" 
                        style="height: 25vh">
            @else
                <img    src="http://via.placeholder.com/640x360" 
                        alt="{{ $company_logo->name }}" class="img-fluid rounded w-100" 
                        style="height: 25vh">
            @endif
            <a  href="{{ route('front.company.index', [$company_logo->id, Str::slug($company_logo->name, '-')]) }}" 
                class="text-white text-center mt-2"> 
                {{ Str::limit($company_logo->name, 20) }} 
                ({{ number_format($company_logo->vacancy_count) }})
            </a>
        </div>
    @endforeach
</div>