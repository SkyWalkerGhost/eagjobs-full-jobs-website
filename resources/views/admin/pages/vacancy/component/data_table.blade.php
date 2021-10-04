<div class="card">
    <div class="card-header">
        <h3 class="card-title"> {{ dataTable() }} ({{ number_format($vacancies->total()) }}) </h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        @foreach(vacancyTableHeadName() as $theadName)
                            <th> {{ $theadName }} </th>
                        @endforeach
                    </tr>
                </thead>
            
                <tbody>

                    @forelse($vacancies as $vacancy)
                        
                        <tr>
                            <td> {{ $vacancy->id }} </td>

                            <td>
                                <a href="{{ route('admin.pages.payment.index') }}#vacancy_{{ $vacancy->id }}">
                                    {{ $vacancy->order_id }}
                                </a>
                            </td>

                            <td> 
                                <a title="{{ $vacancy->name }}" style="word-break: break-word;"> 
                                    {{ Str::limit($vacancy->name, 40) }}
                                </a> 
                            </td>

                            <td>
                                <span class="badge badge bg-danger btn-block p-2">
                                    {{ Str::upper($vacancy->vacancy_type) }}
                                </span>
                            </td>

                            <td>
                                @if($vacancy->job_status == VacancyStatus::PENDING_STATUS)
                                    <span class="badge badge-danger btn-block p-2">
                                        <i class="fa fa-times"></i>
                                        {{ Str::upper($vacancy->job_status) }}
                                    </span>
                                @else
                                    <span class="badge bg-success btn-block p-2">
                                        <i class="fa fa-globe"></i>
                                        {{ Str::upper($vacancy->job_status) }}
                                    </span>
                                @endif
                            </td>

                            <td>
                                @if($vacancy->payment->payment_status == PaymentStatus::PAYABLE_STATUS)
                                    <span class="badge badge-danger btn-block p-2">
                                        <i class="fa fa-times"></i>
                                        {{ Str::upper($vacancy->payment->payment_status ?? '') }}
                                    </span>
                                @else
                                    <span class="badge bg-success btn-block p-2">
                                        <i class="fa fa-check"></i>
                                        {{ Str::upper($vacancy->payment->payment_status ?? '') }}
                                    </span>
                                @endif
                            </td>

                            <td>
                                @if($vacancy->end_time > \Carbon\Carbon::now())
                                    <span class="badge badge badge-warning btn-block p-2">
                                        <i class="fa fa-calendar"></i>
                                        {{ \Carbon\Carbon::parse($vacancy->end_time)->format('d-m-Y H:i:s') }}
                                    </span>
                                @else
                                    <span class="badge badge badge-danger btn-block p-2">
                                        {{ jobPostingPeriodHasExpired() }}
                                    </span>
                                @endif
                            </td>

                            <td>
                                @include('admin.pages.vacancy.component.partials.show')
                                @include('admin.pages.payment.component.crud.change_status', ['payment' => $vacancy->payment])
                                <a href="{{ route('admin.pages.vacancy.edit', 
                                        ['vacancy_id' => $vacancy->id]) }}" 
                                    class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a> 

                                @include('admin.pages.vacancy.component.crud.delete')
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
        </div>
    </div>

    <div class="col-md-12 mt-3 mb-2">
        {{ $vacancies->links() }}
    </div>

</div>

