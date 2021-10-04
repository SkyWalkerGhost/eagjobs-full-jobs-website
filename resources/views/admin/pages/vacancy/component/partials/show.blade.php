<button type="button" 
        class="btn btn-success btn-sm" 
        data-toggle="modal" 
        data-target="#show_{{ $vacancy->id }}">
        <i class="fa fa-eye"></i>
</button>

<div    class="modal fade bd-example-modal-lg" 
        id="show_{{ $vacancy->id }}"
        data-backdrop="static"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true" 
        tabindex="-1" 
        role="dialog">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> 
                    Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row text-left">

                    <div class="col-md-12 mb-3">
                        <div class="row font-weight-bold">
                            <div class="col-md-3">
                                <strong> ORDER ID: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->order_id }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> კომპანია: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->company->name }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> ელ-ფოსტა: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-primary">
                                    {{ $vacancy->company->email }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> კატეგორია: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->category->name ?? '' }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> სამუშაო გრაფიკი: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->work_schedule }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> ანაზღაურება: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->salary ?? 'მითითებული არ არის' }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> განათლება: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->education ?? 'მითითებული არ არის' }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> ენა: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->language->name ?? 'მითითებული არ არის' }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> ადგილმდებარეობა: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->location->name ?? '' }}
                                </span>
                            </div>

                            <div class="col-md-3">
                                <strong> გამოცდილება: </strong>
                            </div>
                             
                            <div class="col-md-3">
                                <span class="text-danger">
                                    {{ $vacancy->experience->name ?? '' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p class="mt-3">
                            <h5 class="font-weight-bold">
                                <i class="fa fa-align-left"></i> 
                                {{ Str::replace('აღწერეთ', '', jobDescriptionAndFunctionDuties()) }} 
                            </h5>
                            {!! $vacancy->job_description !!}
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p class="mt-3">
                            <h5 class="font-weight-bold">
                                <i class="fa fa-align-left"></i> 
                                {{ qualificationRequirements() }} 
                            </h5>
                            {!! $vacancy->qualification_requirements !!}
                        </p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="mt-3">
                            <h5 class="font-weight-bold">
                                <i class="fa fa-align-left"></i> 
                                {{ aboutCompanyTitle() }} 
                            </h5>
                            {!! $vacancy->company->about_company ?? '' !!}
                        </p>

                        <p>
                            <a href="{{ $vacancy->website }}" target="_blacnk">
                                <strong>
                                    ვებ-გვერდი: {{ $vacancy->company->website }}
                                </strong>
                            </a>
                        </p>

                        <p>
                            <a href="{{ $vacancy->facebook }}" target="_blacnk">
                                <strong>
                                    Facebook: {{ $vacancy->company->facebook }}
                                </strong>
                            </a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>