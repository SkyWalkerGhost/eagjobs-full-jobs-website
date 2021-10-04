<?php

namespace App\Repositories\Invoice;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Vacancy;
use App\Models\Invoice;
use Carbon\Carbon;

class InvoiceRepository
{
    public function __construct(Request $request, Invoice $invoice, Vacancy $vacancy) {

        $this->request      = $request;
        $this->vacancy      = $vacancy;
        $this->invoice      = $invoice;
    }

    public function getInvoice()
    {
        return $this->invoice->with(['vacancy', 'company', 'payment'])->latest()->paginate(10);
    }

    public function storeInvoice()
    {
        $vacancy = $this->vacancy->with(['payment'])->where('id', $this->request->vacancy_id)->firstOrFail();

        return [
            'order_id'          => $vacancy->order_id,
            'payment_id'        => $vacancy->payment->vacancy_id,
            'vacancy_id'        => $vacancy->id,
            'company_id'        => $vacancy->company_id,
            'invoice_send_time' => Carbon::now(),
        ];
    }
}
