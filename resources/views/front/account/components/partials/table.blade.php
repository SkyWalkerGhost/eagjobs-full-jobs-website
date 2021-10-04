<div class="table-responsive">
    
    <table class="table">
        <tbody>
            <tr>
                <th style="width:50%;"> {{ currentPayableApplications() }} </th>
                <td> <strong style="color: #34CA27 !important;"> {{ $myVacancy->total() }} </strong> </td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead class="thead-dark text-center">
            <tr>
                @foreach(companyVacancyTableThead() as $thead)
                    <th scope="col"> {{ $thead }} </th>
                @endforeach
            </tr>
        </thead>

        <tbody>
        
            @forelse($myVacancy as $vacancy)
                <tr>
                    <th scope="row"> {{ $vacancy->id }} </th>
                    <td> 
                        <a href="{{ route('front.account.order.index', ['order_id' => $vacancy->order_id]) }}" id="link_colors" class="font-weight-bold">
                            {{ $vacancy->order_id }}
                        </a>
                    </td>
                    
                    <td> 
                        <span data-toggle="tooltip" data-placement="top" title="{{ $vacancy->name }}">
                            {{ Str::limit($vacancy->name, 20) }}
                        </span>
                    </td>

                    <td>
                        <span class="badge badge bg-primary btn-block p-2 text-white">
                            <i class="icon-tag"></i>
                            {{ $vacancy->category->name ?? '' }}
                        </span>
                    </td>

                    <td>
                        <span class="badge badge bg-info btn-block p-2 text-white">
                            {{ Str::upper($vacancy->vacancy_type) }}
                        </span>
                    </td>

                    <td>
                        <span class="badge badge-danger btn-block p-2">
                            <i class="icon-times"></i>
                            {{ Str::upper($vacancy->payment->payment_status ?? '') }}
                        </span>
                    </td>

                    <td>
                        <span class="badge badge badge-warning btn-block p-2" data-toggle="tooltip" data-placement="top" title="განაცხადის გაკეთების თარიღი">
                            <i class="icon-calendar"></i>
                            {{ \Carbon\Carbon::parse($vacancy->end_time)->format('d-m-Y H:i:s') }}
                        </span>
                    </td>

                    <td>
                        <a class="btn btn-dark btn-block btn-sm text-white"> 
                            {{ $vacancy->amount_price }}₾
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        {{ vacancyNotFound() }}
                    </td>

                </tr>
            @endforelse
        
        </tbody>
    </table>

    <div class="col-md-12">
        {{ $myVacancy->links() }}
    </div>

</div>