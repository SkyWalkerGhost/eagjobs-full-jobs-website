<!-- Button trigger modal -->
<button 
        type="button" 
        class="btn btn-warning btn-block btn-sm" 
        data-toggle="modal" 
        data-target="#sendInvoiceToEmail_{{ $payment->id }}">
        <i class="fa fa-envelope"></i>
        {{ $payment->company->email }}
</button>

    <div    class="modal fade" 
            id="sendInvoiceToEmail_{{ $payment->id }}" 
            data-backdrop="static" 
            tabindex="-1" 
            role="dialog" 
            aria-labelledby="staticBackdropLabel" 
            aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Invoice-ის გაგზავნა </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body text-left">
                    გსურთ გაიგზავნოს <b> Invoice </b>
                    <span class="text-primary font-weight-bold">
                        {{ $payment->company->email }}
                    </span> ელ-ფოსტაზე ?
                </div>
            
                <div class="modal-footer">
                    {!! Form::open(['action' => ['Admin\InvoiceController@store', 'vacancy_id' => $payment->vacancy_id], 'method' => 'POST' ]) !!}
    
                        {!! Form::button('<i class="fa fa-times"></i> დახურვა', ['type' => 'submit','class' => 'btn bg-dark text-white', 'data-dismiss' => 'modal']) !!}

                        {!! Form::button('<i class="fa fa-paper-plane"></i> Invoice-ის გაგზავნა', 
                                    ['type' => 'submit', 'class' => 'btn bg-danger text-white border-0;',]) !!}
                            
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>