<button type="button" 
        class="btn btn-danger btn-sm" 
        data-toggle="modal" 
        data-target="#delete_{{ $vacancy->id }}">
        <i class="fa fa-trash"></i>
</button>

<div    class="modal fade" 
        id="delete_{{ $vacancy->id }}"
        data-backdrop="static"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true" 
        tabindex="-1" 
        role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> 
                    გსურთ ამ ვაკანსიის წაშლა ?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-right">
                {!! Form::open(['action' => 
                    ['VacancyController@destroy', 'vacancy_id' => $vacancy->id], 'method' => 'POST' ]) !!}
    
                    {!! Form::hidden('_method', 'DELETE') !!}
                    
                    {!! Form::button('გაუქმება <i class="fa fa-times"></i>', ['type' => 'submit','class' => 'btn bg-dark text-white', 'data-dismiss' => 'modal']) !!}

                    {!! Form::button('წაშლა <i class="text-white fa fa-trash"></i> ', 
                                ['type' => 'submit', 'class' => 'btn bg-danger text-white border-0;',]) !!}
                        
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>



