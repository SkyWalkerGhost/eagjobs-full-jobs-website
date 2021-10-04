<?php

namespace App\Repositories\Payment;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Vacancy;
use Carbon\Carbon;

class PaymentRepository
{
    public function __construct(Request $request, Payment $payment, Vacancy $vacancy)
    {
        $this->request = $request;
        $this->payment = $payment;
        $this->vacancy = $vacancy;
    }

    public function getPayment()
    {
        return $this->payment->with(['company', 'vacancy'])->latest()->paginate(10);
    }

    public function checkRequestStatus()
    {
        return abort_if(!in_array($this->request->change_status, [Payment::PAYABLE_STATUS, Payment::PAYED_STATUS]), 404);
    }

    public function getTime()
    {
        return $this->request->change_status == Payment::PAYED_STATUS ? Carbon::now() : null;
    }

    public function changePaymentStatus($payment_id)
    {
        $this->payment_id = $payment_id;
        
        $this->checkRequestStatus();
            
        $paymentUpdate = $this->payment->where('id', $this->payment_id)->firstOrFail();

        $paymentUpdate->update([
            'payment_status'    => $this->request->change_status,
            'payment_time'      => $this->getTime(),
        ]);
    }

    public function vacancyStatusToApproved($payment_id)
    {
        $this->payment_id = $payment_id;
        
        $this->checkRequestStatus();
            
        $status = $this->request->change_status == Payment::PAYABLE_STATUS ? Vacancy::PENDING_STATUS : Vacancy::APPROVED_STATUS;

        $vacancyUpdate = $this->vacancy->where('id', $this->payment_id)->firstOrFail();

        $vacancyUpdate->update([
            'job_status'    => $status,
            'start_time' => $this->getTime(),
        ]);
    }
}
