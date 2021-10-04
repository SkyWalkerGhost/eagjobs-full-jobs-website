<table class="table table-hover p-3 mb-3">
    
    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 text-center" id="link_colors"> 
        <i class="icon-info-circle"></i>  
        გადახდის დეტალები 
    </h3>

    <tbody>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> სამუშაოს სახელი: </strong> 
            </th>
            <td> 
                <span   data-toggle="tooltip" 
                        data-placement="right" 
                        title="განაცხადის სახელი: {{ $vacancy->name }}"> 
                    {{ $vacancy->name }}
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> ORDER ID: </strong> 
            </th>
            <td> 
                <span   data-toggle="tooltip" 
                        data-placement="right" 
                        title="განაცხადის ORDER: {{ $vacancy->order_id }}"> 
                    {{ $vacancy->order_id }} 
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> კომპანია: </strong> 
            </th>
            <td> 
                <span   data-toggle="tooltip" 
                        data-placement="right" 
                        title="კომპანიის სახელი: {{ auth()->guard('company')->user()->name }}"> 
                    {{ auth()->guard('company')->user()->name }} 
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> კომპანიის ID: </strong> 
            </th>
            <td> 
                <span   data-toggle="tooltip" 
                        data-placement="right" 
                        title="კომპანიის ID: {{ auth()->guard('company')->user()->identity_id }}"> 
                    {{ auth()->guard('company')->user()->identity_id }} 
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> ვაკანსიის ტიპი: </strong> 
            </th>
            <td> 
                <span   class="btn btn-secondary btn-sm btn-block" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="განაცხადის ტიპი: {{ $vacancy->vacancy_type }}"> 
                    {{ $vacancy->vacancy_type }} 
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> განაცხადის სტატუსი: </strong> 
            </th>
            <td> 
                @if($vacancy->job_status == VacancyStatus::PENDING_STATUS)
                    <span   class="badge badge-danger btn-block p-2"
                            data-toggle="tooltip" 
                            data-placement="right" 
                            title="განაცხადის სტატუსი: {{ $vacancy->job_status }}">
                        <i class="icon-times"></i>
                        {{ Str::upper($vacancy->job_status) }}
                    </span>
                @else
                    <span   class="badge btn-green btn-block p-2 text-white"
                            data-toggle="tooltip" 
                            data-placement="right" 
                            title="განაცხადის სტატუსი: {{ $vacancy->job_status }}">
                        <i class="icon-check"></i>
                        {{ Str::upper($vacancy->job_status) }}
                    </span>
                @endif 
            </td>
        </tr>
        
        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> გადახდის სტატუსი: </strong> 
            </th>
            <td> 
                @if($vacancy->payment->payment_status == VacancyStatus::PENDING_STATUS)
                    <span   class="badge badge-danger btn-block p-2 text-white"
                            data-toggle="tooltip" 
                            data-placement="right" 
                            title="გადახდის სტატუსი: {{ $vacancy->payment->payment_status }}">
                        <i class="icon-times"></i>
                        {{ Str::upper($vacancy->payment->payment_status) }}
                    </span>
                @else
                    <span   class="badge btn-green btn-block p-2 text-white"
                            data-toggle="tooltip" 
                            data-placement="right" 
                            title="გადახდის სტატუსი: {{ $vacancy->payment->payment_status }}">
                        <i class="icon-check"></i>
                        {{ Str::upper($vacancy->payment->payment_status) }}
                    </span>
                @endif 
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> გადასახდელი თანხა: </strong> 
            </th>
            <td> 
                <span   class="btn btn-info btn-sm btn-block"  
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="განაცხადის გადახდის საფასური: {{ $vacancy->amount_price }}₾"> 
                    {{ $vacancy->amount_price }}₾ 
                </span>  
            </td>
        </tr>

        <tr>
            <th style="width:50%"> 
                <strong class="text-dark mr-4"> განაცხადის შექმნის თარიღი: </strong> 
            </th>
            <td> 
                <span   data-toggle="tooltip" 
                        data-placement="right" 
                        title="განაცხადის შექმნის თარიღი: {{ \Carbon\Carbon::parse($vacancy->created_at)->format('m-m-Y') }}"> 
                    <i class="icon-clock-o"></i> 
                    {{ \Carbon\Carbon::parse($vacancy->created_at)->format('m-m-Y') }} 
                </span>  
            </td>
        </tr>
  
    </tbody>
</table>