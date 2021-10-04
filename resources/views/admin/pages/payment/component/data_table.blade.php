<div class="card">
    <div class="card-header">
        <h3 class="card-title"> {{ paymentTableTitle() }} ({{ number_format($getPayment->total()) }}) </h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        @foreach(paymentTableTheadName() as $theadName)
                            <th> {{ $theadName }} </th>
                        @endforeach
                    </tr>
                </thead>
            
                <tbody>

                    @forelse($getPayment as $payment)
                        
                        <tr>
                            <td> {{ $payment->id }} </td>

                            <td> 
                                <a href="#" id="vacancy_{{ $payment->vacancy->id ?? '' }}">
                                    {{ $payment->vacancy->order_id ?? '' }}
                                </a>
                            </td>

                            <td>
                                {{ Str::limit($payment->vacancy->name, 50) ?? '' }}
                            </td>

                            <td>
                                {{ $payment->company->name ?? '' }}
                            </td>
                            
                            <td>
                                @include('admin.pages.payment.component.crud.send_invoice')
                            </td>

                            <td>
                                @if($payment->payment_status == PaymentStatus::PAYABLE_STATUS)
                                    <span class="badge badge-danger btn-block p-2">
                                        <i class="fa fa-times"></i>
                                        {{ Str::upper($payment->payment_status) }}
                                    </span>
                                @else
                                    <span class="badge bg-success btn-block p-2">
                                        <i class="fa fa-check"></i>
                                        {{ Str::upper($payment->payment_status) }}
                                    </span>
                                @endif
                            </td>
                            
                            <td>
                                @include('admin.pages.payment.component.crud.change_status', ['payment' => $payment])
                                
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a> 
                            </td>
                            
                        </tr>

                    @empty
                        <tr>
                            <td>
                                {{ paymentNotFound() }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12 mt-3 mb-2">
        {{ $getPayment->links() }}
    </div>

</div>

