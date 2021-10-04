<div>
    <div class="col-md-12">
        <div class="card p-5">
            <div class="card-body">
                <h1 class="card-title text-center mb-2"> 
                    ჩემი ისტორია 
                    ({{ $myVacancyHistory->total() }}) 
                </h1>

                <div id="content">
                    <ul class="timeline">

                        @foreach($myVacancyHistory as $history)
                            <li class="event" data-date="{{ $history->created_at }}">
                            <h3> 
                                <strong> განაცხადის ტიპი: </strong> 
                                {{ $history->vacancy_type }} 
                            </h3>
                            <p> <strong> განაცხადის სახელი: </strong> {{ $history->name }} </p>
                            <p> <strong> ORDER ID: </strong> {{ $history->order_id }} </p>
                            <p> <strong> გადახდის სტატუსი: </strong> {{ $history->payment->payment_status }} </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 text-center mt-5 mb-5">
        @if(count($myVacancyHistory) !== $myVacancyHistory->total())
            <button wire:click.submit="loadMoreHistory"
                    class="btn btn-success btn-green text-white border-0"
                    style="cursor: pointer;">
                <i class="icon-history"></i>
                მეტი ისტორია 
                ({{ count($myVacancyHistory) }} / {{ $myVacancyHistory->total() }})
            </button>
        @endif
    </div>

</div>
