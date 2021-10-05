<div class="card">
    <div class="card-header">
        <h3 class="card-title"> {{ companyTableTitle() }} ({{ number_format($getCompanyUsers->total()) }}) </h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        @foreach(companyTableTheadName() as $theadName)
                            <th> {{ $theadName }} </th>
                        @endforeach
                    </tr>
                </thead>
            
                <tbody>

                    @forelse($getCompanyUsers as $companies)
                        
                        <tr>
                            <td> {{ $companies->id }} </td>

                            <td>
                                @if($companies->photo)
                                    <img    src="{{ Storage::url($companies->photo) }}" 
                                            class="img-fluid"
                                            style="width: 50px; height: 50px; border-radius: 50%;">
                                @else
                                    <img    src="{{ asset('back/img/NoImageFound.png') }}" 
                                            class="img-fluid"
                                            style="width: 50px; height: 50px; border-radius: 50%;">
                                @endif
                            </td>

                            <td> 
                                <span class="badge badge bg-primary p-2">
                                    <i class="fa fa-user"></i>
                                    {{ $companies->name }}
                                </span>
                            </td>

                            <td> 
                                <span class="badge badge bg-yellow p-2">
                                    <i class="fa fa-envelope"></i>
                                    {{ $companies->email }}
                                </span>
                            </td>

                            <td>
                                @include('admin.pages.company.component.crud.delete')
                            </td>
                            
                        </tr>

                    @empty
                        <tr>
                            <td>
                                {{ companyNotFound() }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12 mt-3 mb-2">
        {{ $getCompanyUsers->links() }}
    </div>

</div>

