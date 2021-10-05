<?php

namespace App\Listeners;

use App\Events\SendInvoiceMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use App\Models\Vacancy;

class SendInvoiceMailListener
{
    public function handle(SendInvoiceMail $event)
    {

        $vacancy = Vacancy::with(['payment', 'company'])
                        ->where('id', $event->invoice->vacancy_id)
                        ->firstOrFail();

        $email = 'examle@gmail.com';
   
        $content = [
            'vacancy_name'      => $vacancy->name,
            'vacancy_type'      => $vacancy->vacancy_type,
            'company_name'      => $vacancy->company->name,
            'company_email'     => $vacancy->company->email,
            'amount_price'      => $vacancy->amount_price,
            'invoice_send_time' => $event->invoice->invoice_send_time,
            'order_id'          => $event->invoice->order_id,
        ];

        // Mail::to($email)->send(new InvoiceMail($content));

        dd('Successfully');
    }
}
