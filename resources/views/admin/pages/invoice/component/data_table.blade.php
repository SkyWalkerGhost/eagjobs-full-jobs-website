<div class="card">
    <div class="card-header">
        <h3 class="card-title"> {{ invoiceTableTitle() }} ({{ number_format($getInvoice->total()) }}) </h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        @foreach(invoiceTableTheadName() as $theadName)
                            <th> {{ $theadName }} </th>
                        @endforeach
                    </tr>
                </thead>
            
                <tbody>

                    @forelse($getInvoice as $invoice)
                        
                        <tr>
                            <td> {{ $invoice->id }} </td>
                            <td> {{ $invoice->vacancy->order_id ?? '' }} </td>

                            <td>
                                {{ Str::limit($invoice->vacancy->name, 50) ?? '' }}
                            </td>

                            <td>
                                {{ $invoice->company->name ?? '' }}
                            </td>

                            <td>
                                {{ $invoice->company->email ?? '' }}
                            </td>

                            <td>
                                {{ $invoice->invoice_send_time }}
                            </td>
                            
                            <td>
                                {{-- @include('admin.pages.invoice.component.crud.change_status') --}}
                                
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a> 

                                {{-- @include('admin.pages.vacancy.component.crud.delete') --}}
                            </td>
                            
                        </tr>

                    @empty
                        <tr>
                            <td>
                                {{ invoiceNotFound() }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12 mt-3 mb-2">
        {{ $getInvoice->links() }}
    </div>

</div>

