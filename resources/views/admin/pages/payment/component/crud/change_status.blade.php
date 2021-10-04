<button type="button" 
        class="btn btn-primary btn-sm" 
        data-toggle="modal" 
        data-target="#delete_{{ $payment->id }}">
        <img src="https://img.icons8.com/ios-glyphs/16/000000/refresh--v1.png"/>
</button>

<div    class="modal fade" 
        id="delete_{{ $payment->id }}"
        data-backdrop="static"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true" 
        tabindex="-1" 
        role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> 
                    გსურთ გადახდის სტატუსის შეცვლა ?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-right">
                {!! Form::open(['action' => 
                    ['Admin\PaymentController@update', 'payment_id' => $payment->vacancy->id], 'method' => 'PUT' ]) !!}
    
                    <div class="form-group">
                        <select name="change_status" class="form-control form-control-lg">
                        
                            <option value="{{ PaymentStatus::PAYABLE_STATUS }}"> 
                                {{ PaymentStatus::PAYABLE_STATUS }}
                            </option>

                            <option value="{{ PaymentStatus::PAYED_STATUS }}"> 
                                {{ PaymentStatus::PAYED_STATUS }}
                            </option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-success">
                            <i class="fa fa-check"></i>
                            {{ changeButton() }}
                        </button>
                    </div>
                        
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>



